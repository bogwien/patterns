<?php

namespace Patterns\State;

/**
 * Class StateStop
 * @package Patterns\State
 */
class StateStop implements IBotState
{
    /**
     * @return string
     */
    public function getAnswer()
    {
        return 'I\'m bot and I say good bye to you!';
    }

    /**
     * @return int
     */
    public function getStateCode()
    {
        return BotStateDictionary::STATE_STOP;
    }
}
