<?php

namespace Ivoba\Silex\Console;

use Symfony\Component\Console\Application as BaseApplication;
use Silex\Application as SilexApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Application
 * @package Ivoba\Silex\Console
 */
class Application extends BaseApplication
{
    /**
     * @var SilexApplication
     */
    private $silexApplication;

    /**
     * @var string
     */
    private $projectDirectory;

    /**
     * @param SilexApplication $application
     * @param string $projectDirectory
     * @param string $name
     * @param string $version
     */
    public function __construct(SilexApplication $application, $projectDirectory, $name = 'UNKNOWN', $version = 'UNKNOWN')
    {
        parent::__construct($name, $version);

        $this->silexApplication = $application;
        $this->projectDirectory = $projectDirectory;
    }

    /**
     * @return SilexApplication
     */
    public function getSilexApplication()
    {
        return $this->silexApplication;
    }

    /**
     * @return string
     */
    public function getProjectDirectory()
    {
        return $this->projectDirectory;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     * @throws \Exception
     */
    public function run(InputInterface $input = null, OutputInterface $output = null)
    {
         $this->silexApplication->boot();
         parent::run($input, $output);
    }

}
