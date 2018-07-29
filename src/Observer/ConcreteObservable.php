<?php

namespace Patterns\Observer;

use SplObjectStorage;

/**
 * Class ConcreteObservable
 * @package Patterns\Scenario
 */
class ConcreteObservable implements IObservable
{
    /**
     * @var SplObjectStorage|IObserver[]
     */
    protected $observers;

    /**
     * ConcreteObservable constructor.
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param IObserver $observer
     */
    public function addObserver(IObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @param IObserver $observer
     */
    public function removeObserver(IObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * Вызывает handleEvent у всех наблюдателей
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->handleEvent($this);
        }
    }
}
