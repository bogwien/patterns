<?php

namespace Patterns\State;

/**
 * Class StateActionProductList
 * @package Patterns\State
 */
class StateActionProductList implements IBotState
{
    /**
     * @return string
     */
    public function getAnswer()
    {
        return 'Ok, now select product from the list';
    }

    /**
     * @return int
     */
    public function getStateCode()
    {
        return BotStateDictionary::STATE_ACTION_PRODUCT_LIST;
    }
}
