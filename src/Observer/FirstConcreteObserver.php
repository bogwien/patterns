<?php

namespace Patterns\Observer;

/**
 * Class FirstConcreteObserver
 * @package Patterns\Scenario
 */
class FirstConcreteObserver implements IObserver
{
    /**
     * FirstConcreteObserver constructor.
     * @param IObservable $observable
     */
    public function __construct(IObservable $observable)
    {
        $observable->addObserver($this);
    }

    /**
     * @param IObservable $observable
     */
    public function handleEvent(IObservable $observable)
    {
        echo 'Observer #1', PHP_EOL;
    }
}
