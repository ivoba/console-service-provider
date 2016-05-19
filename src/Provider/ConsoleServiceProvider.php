<?php

namespace Ivoba\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Application;
use Ivoba\Silex\Console\Application as ConsoleApplication;
use Ivoba\Silex\Console\ConsoleEvents;
use Ivoba\Silex\Console\ConsoleEvent;

/**
 * Class ConsoleServiceProvider
 * @package Ivoba\Silex
 */
class ConsoleServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Application $app
     */
    public function register(Container $app)
    {
        $app['console'] = $app->factory(function() use ($app) {
            $application = new ConsoleApplication(
                $app,
                $app['console.project_directory'],
                $app['console.name'],
                $app['console.version']
            );

            $app['dispatcher']->dispatch(ConsoleEvents::INIT, new ConsoleEvent($application));

            return $application;
        });
    }

    /**
     * @param Application $app
     */
    public function boot(Application $app)
    {
    }
}
