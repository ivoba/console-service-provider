<?php

namespace Ivoba\Silex\Console;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class ConsoleEvent
 * @package Ivoba\Silex\Console
 */
class ConsoleEvent extends Event
{
    /**
     * @var Application
     */
    private $application;

    /**
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->application;
    }
}