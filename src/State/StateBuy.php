<?php

namespace Patterns\State;

/**
 * Class StateBuy
 * @package Patterns\State
 */
class StateBuy implements IBotState
{
    /**
     * @return string
     */
    public function getAnswer()
    {
        return 'You have bought it successfully!';
    }

    /**
     * @return int
     */
    public function getStateCode()
    {
        return BotStateDictionary::STATE_ACTION_BUY;
    }
}
