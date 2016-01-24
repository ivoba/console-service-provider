<?php

namespace Ivoba\Silex\Tests\ConsoleServiceProvider;

use Ivoba\Silex\Provider\ConsoleServiceProvider;
use Silex\Application;

class ConsoleServiceProviderTest extends \PHPUnit_Framework_TestCase
{

    public function testRegister()
    {
        $app = new Application();
        $provider = new ConsoleServiceProvider();

        $app->register($provider, [
            'console.name'              => 'MyApplication',
            'console.version'           => '1.0.0',
            'console.project_directory' => __DIR__.'/..'
        ]);

        $this->assertInstanceOf(\Ivoba\Silex\Console\Application::class, $app['console']);
        $this->assertEquals(__DIR__.'/..', $app['console']->getProjectDirectory());

        echo $app['console']
    }
}
 