<?php

namespace Ivoba\Silex\Command;

use Symfony\Component\Console\Command\Command as BaseCommand;

/**
 * Class Command
 * @package Ivoba\Silex\Command
 */
class Command extends BaseCommand
{
    /**
     * @return Application
     */
    public function getSilexApplication()
    {
        return $this->getApplication()->getSilexApplication();
    }

    /**
     * @return string
     */
    public function getProjectDirectory()
    {
        return $this->getApplication()->getProjectDirectory();
    }
}