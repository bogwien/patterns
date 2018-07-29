<?php

namespace Patterns\Observer;

/**
 * Class SecondConcreteObserver
 * @package Patterns\Scenario
 */
class SecondConcreteObserver implements IObserver
{
    /**
     * @param IObservable $observable
     */
    public function handleEvent(IObservable $observable)
    {
        echo 'Observer #2', PHP_EOL;
    }
}
