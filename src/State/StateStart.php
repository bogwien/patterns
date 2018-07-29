<?php

namespace Patterns\State;

/**
 * Class StateStart
 * @package Patterns\State
 */
class StateStart implements IBotState
{
    /**
     * @return string
     */
    public function getAnswer()
    {
        return 'Let\'s get started';
    }

    /**
     * @return int
     */
    public function getStateCode()
    {
        return BotStateDictionary::STATE_START;
    }
}
