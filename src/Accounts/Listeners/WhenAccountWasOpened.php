<?php namespace KBC\Accounts\Listeners;

use KBC\EventSourcing\Events\DomainEvent;
use KBC\EventSourcing\Events\Listener;

final class WhenAccountWasOpened implements Listener {

    public function handle(DomainEvent $event)
    {
        var_dump("An account has been opened for {$event->name->getFullName()} with a balance of {$event->balance} EUR.");
    }
}