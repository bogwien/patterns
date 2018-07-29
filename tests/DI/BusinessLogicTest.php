<?php

namespace Tests\DI;

use Patterns\DI\BusinessLogic;
use PHPUnit\Framework\TestCase;

/**
 * Class BusinessLogicTest
 * @package Tests\DI
 */
final class BusinessLogicTest extends TestCase
{
    /**
     * Тестируем что BusinessLogic::run() вызовет run() у BusinessTools и вернет его результат
     *
     * @dataProvider runResultProvider
     * @param string $data
     */
    public function testRun($data)
    {
        $tools = $this->createMock('Patterns\DI\BusinessTools');
        $tools->expects($this->once())->method('run')->willReturn($data);
        $object = new BusinessLogic($tools);
        $this->assertSame($data, $object->run());
    }

    /**
     * Провайдер тестовых данных
     *
     * @return array
     */
    public function runResultProvider()
    {
        return [
            [''],
            ['test'],
            ['string'],
            ['ololo'],
        ];
    }
}
