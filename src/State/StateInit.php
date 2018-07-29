<?php

namespace Patterns\State;

/**
 * Class StateInit
 * @package Patterns\State
 */
class StateInit implements IBotState
{
    /**
     * @return string
     */
    public function getAnswer()
    {
        return 'I have been created';
    }

    /**
     * @return int
     */
    public function getStateCode()
    {
        return BotStateDictionary::STATE_INIT;
    }
}
