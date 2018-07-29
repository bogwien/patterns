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
     * @param string $expected
     */
    public function testRun($expected)
    {
        $businessToolsMock = $this->createMock('Patterns\DI\BusinessTools');
        $businessToolsMock->expects($this->once())->method('run')->willReturn($expected);

        $businessLogic = new BusinessLogic($businessToolsMock);
        $result = $businessLogic->run();

        $this->assertEquals($expected, $result);
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
