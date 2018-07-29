<?php

namespace Patterns\State;

/**
 * Interface IBotState
 * @package Patterns\State
 */
interface IBotState
{
    /**
     * @return string
     */
    public function getAnswer();

    /**
     * @return int
     */
    public function getStateCode();
}
