<?php

namespace Patterns\DI;

/**
 * Class BusinessLogic
 * @package Patterns\DI
 */
class BusinessLogic implements IBusinessLogic
{
    /**
     * @var IBusinessTools
     */
    protected $tools;

    /**
     * BusinessLogic constructor.
     * @param IBusinessTools $tools
     */
    public function __construct(IBusinessTools $tools)
    {
        $this->tools = $tools;
    }

    /**
     * @return string
     */
    public function run()
    {
        return $this->tools->run();
    }
}
