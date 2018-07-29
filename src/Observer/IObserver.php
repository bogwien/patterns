<?php

namespace Patterns\Observer;

/**
 * Interface IObserver
 * @package Patterns\Scenario
 *
 * Интерфейс, с помощью которого наблюдатель получает оповещение
 */
interface IObserver
{
    public function handleEvent(IObservable $observable);
}
