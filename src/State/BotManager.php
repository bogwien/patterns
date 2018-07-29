<?php

namespace Patterns\State;

/**
 * Class BotManager
 * @package Patterns\State
 */
class BotManager
{
    /**
     * @var int
     */
    protected $stateCode;

    /**
     * @var IBotState
     */
    protected $state;

    /**
     * @var BotStateDictionary
     */
    protected $dictionary;

    /**
     * BotManager constructor.
     * @param int $stateCode
     */
    public function __construct($stateCode = BotStateDictionary::STATE_INIT)
    {
        $this->stateCode = $stateCode;
        $this->dictionary = new BotStateDictionary();
    }

    /**
     * Change Bot state
     *
     * @param int $stateCode
     */
    public function setState($stateCode)
    {
        $this->stateCode = $stateCode;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        $this->initState();

        return $this->state->getAnswer();
    }

    /**
     * Check state object and create it if we needed
     */
    protected function initState()
    {
        if ($this->state && $this->state->getStateCode() === $this->stateCode) {
            return;
        }

        $this->state = $this->dictionary->getStateByCode($this->stateCode);
    }
}
