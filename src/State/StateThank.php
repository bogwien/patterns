<?php

namespace Patterns\State;

/**
 * Class StateThank
 * @package Patterns\State
 */
class StateThank implements IBotState
{
    /**
     * @return string
     */
    public function getAnswer()
    {
        return 'Thank you for buying';
    }

    /**
     * @return int
     */
    public function getStateCode()
    {
        return BotStateDictionary::STATE_THANK;
    }
}
