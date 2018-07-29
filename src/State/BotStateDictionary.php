<?php

namespace Patterns\State;

use InvalidArgumentException;

/**
 * Class BotStateDictionary
 * @package Patterns\State
 */
class BotStateDictionary
{
    const STATE_STOP = 0;
    const STATE_INIT = 1;
    const STATE_START = 2;
    const STATE_HELLO = 3;
    const STATE_ACTIONS = 4;
    const STATE_ACTION_PRODUCT_LIST = 5;
    const STATE_ACTION_BUY = 6;
    const STATE_THANK = 7;

    protected $map = [
        self::STATE_STOP => 'Patterns\State\StateStop',
        self::STATE_INIT => 'Patterns\State\StateInit',
        self::STATE_START => 'Patterns\State\StateStart',
        self::STATE_HELLO => 'Patterns\State\StateHello',
        self::STATE_ACTIONS => 'Patterns\State\StateActions',
        self::STATE_ACTION_PRODUCT_LIST => 'Patterns\State\StateActionProductList',
        self::STATE_ACTION_BUY => 'Patterns\State\StateBuy',
        self::STATE_THANK => 'Patterns\State\StateThank',
    ];

    /**
     * @param int $code
     * @return IBotState
     */
    public function getStateByCode($code)
    {
        if (!isset($this->map[$code])) {
            throw new InvalidArgumentException('Unknown State');
        }

        return new $this->map[$code];
    }
}
