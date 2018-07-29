<?php

namespace Patterns\Core;

use InvalidArgumentException;

/**
 * Class PatternDictionary
 * @package Patterns\Core
 */
class PatternDictionary
{
    const OBSERVER = 1;
    const STATE = 2;
    const DI = 3;

    /**
     * @var array
     */
    protected $map = [
        self::OBSERVER => 'Patterns\Observer\Scenario',
        self::STATE => 'Patterns\State\Scenario',
        self::DI => 'Patterns\DI\Scenario',
    ];

    /**
     * Make scenario object
     *
     * @param int $pattern
     * @return IScenario
     */
    public function getPatternScenario($pattern)
    {
        if (!isset($this->map[$pattern])) {
            throw new InvalidArgumentException('Unknown pattern');
        }

        return new $this->map[$pattern];
    }
}
