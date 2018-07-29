<?php

namespace Patterns\Observer;

/**
 * Interface Observable
 * @package Patterns\Scenario
 *
 * Интерфейс, определяющий методы для добавления, удаления и оповещения наблюдателей
 */
interface IObservable
{
    public function addObserver(IObserver $observer);

    public function removeObserver(IObserver $observer);

    public function notifyObservers();
}
