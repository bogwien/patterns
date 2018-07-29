<?php

namespace Patterns\State;

/**
 * Class StateHello
 * @package Patterns\State
 */
class StateHello implements IBotState
{
    /**
     * @return string
     */
    public function getAnswer()
    {
        return 'Hello my dear user!';
    }

    /**
     * @return int
     */
    public function getStateCode()
    {
        return BotStateDictionary::STATE_HELLO;
    }
}
