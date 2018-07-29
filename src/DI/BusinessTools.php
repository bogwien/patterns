<?php

namespace Patterns\DI;

/**
 * Class BusinessTools
 * @package Patterns\DI
 */
class BusinessTools implements IBusinessTools
{
    /**
     * @return string
     */
    public function run()
    {
        return self::class;
    }
}
