<?php

namespace Patterns\Observer;

use Patterns\Core\IScenario;

/**
 * Class Scenario
 * @package Patterns\Observer
 */
class Scenario implements IScenario
{
    public function run()
    {
        $observable = new ConcreteObservable();

        /* Самоцепляющийся наблюдатель */
        new FirstConcreteObserver($observable);

        /* Цепляем наблюдатель вручную */
        $observable->addObserver(new SecondConcreteObserver());

        /* Допустим произошло событие и мы тригерим обсерверы */
        echo 'Some event was triggered, then:', PHP_EOL;
        $observable->notifyObservers();
    }
}
