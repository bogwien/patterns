<?php

namespace Patterns\State;

/**
 * Class StateActions
 * @package Patterns\State
 */
class StateActions implements IBotState
{
    /**
     * @return string
     */
    public function getAnswer()
    {
        return 'Please select action';
    }

    /**
     * @return int
     */
    public function getStateCode()
    {
        return BotStateDictionary::STATE_ACTIONS;
    }
}
