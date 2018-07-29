<?php

namespace Patterns\DI;

use DI\ContainerBuilder;
use function DI\create;
use Patterns\Core\IScenario;
use stdClass;

/**
 * Class Scenario
 * @package Patterns\DI
 */
class Scenario implements IScenario
{
    /**
     * Main method that run scenario
     *
     * @return void
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     * @throws \Exception
     */
    public function run()
    {
        /**
         * Зацепление
         *
         * Мера того, насколько зависимы разные части кода(методы, классы, модули),
         * т.е. код предназначеный для выполнения какой-нибудь задачи размазан по проекту.
         *
         * Сильное зацепление рассматривается как серьёзный недостаток, поскольку затрудняет понимание логики,
         * их правки, тестирование, а также переиспользование по отдельности.
         *
         * Одним из ключевых методов снижения зацепления является инверсия управления.
         */

        /**
         * IoC
         *
         * Принцип ООП, используемый для уменьшения зацепления,
         * при котором контроль над потоком управления программы остаётся за фреймворком.
         *
         * Т.е. пользовательский код может реализовывать конкретное поведение,
         * встраиваемое в более общий — «абстрактный» код фреймворка.
         * При этом фреймворк вызывает пользовательский код.
         *
         * IoC контейнер - код который обслуживает инверсию управления.
         *
         * Одной из реализаций IoC в применении к управлению зависимостями является внедрение зависимостей(dependency injection).
         */

        /**
         * Принцип единственной ответственности
         *
         * SOLID - S - каждый объект должен иметь одну ответственность
         * и эта ответственность должна быть полностью инкапсулирована в класс.
         *
         * Все его поведения должны быть направлены исключительно на обеспечение этой ответственности.
         */

        /**
         * DI
         *
         * Процесс предоставления внешней зависимости программному компоненту.
         *
         * В соответсвии с принципом единственной ответственности
         * класс не может заниматься выяснением своих зависимостей и созданием нужных ему объектов,
         * он это делегирует внешнему механизму.
         *
         * Настоящее внедрение зависимости состоит в том, что объект для получения зависимостей
         * предоставляет сеттеры и\или принимает завиисмости параметрами в конструктор.
         */

        $this->realDI();

        /**
         * DIC
         *
         * Используя внедрение зависимости, объект просто предоставляет свойство,
         * которое в состоянии хранить ссылку на нужный тип сервиса; и когда объект создается,
         * ссылка на реализацию нужного типа сервиса автоматически вставляется в это свойство (поле),
         * используя средства среды (DIC).
         *
         * @see http://php-di.org/doc/container-configuration.html
         */

        $this->DIC();

        /**
         * Использование
         *
         * Настройка контейнера может проходить в коде(даже рантайме), в конфиге, автоматически для простых случаев.
         * Используется для масштабирования, тестирования, переиспользования(shared объекты).
         */
    }

    /**
     * Пример настоящего внедрения зависимости
     */
    protected function realDI()
    {
        // Объект которому нужны зависимости, но он сам их не создает
        $dependency = new stdClass();
        $dependency->data = RealDI::class;

        // Иньекция зависимости через конструктор
        $realDI = new RealDI($dependency);
        // Иньекция зависимости через сеттер
        $realDI->setDependency($dependency);
        $result = $realDI->run();

        echo 'Real DI: ', $result, PHP_EOL;
    }

    /**
     * Пример использования DIC
     *
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     * @throws \Exception
     */
    protected function DIC()
    {
        // Создаем контейнер и лоадим конфигурацию
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->addDefinitions([
            IBusinessTools::class => create(BusinessTools::class),
            IBusinessLogic::class => create(BusinessLogic::class),
        ]);
        $container = $containerBuilder->build();

        // Получаем инстанс нужного класса (при этом его зависимости создадутся автоматически)
        $businessLogic = $container->get(BusinessLogic::class);

        // Используем полученый инстанс по назначению
        $result = $businessLogic->run();

        echo 'DIC: ', $result, PHP_EOL;
    }
}