<?php
namespace MzedevWorks\LaravelLogEnhancer\Test;

use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return ['MzedevWorks\LaravelLogEnhancer\LaravelLogEnhancerServiceProvider'];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('logging.channels.stack.tap', [\MzedevWorks\LaravelLogEnhancer\LogEnhancer::class]);
    }
}

