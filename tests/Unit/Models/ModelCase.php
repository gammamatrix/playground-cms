<?php
/**
 * Playground
 */
namespace Tests\Unit\Playground\Cms\Models;

use Playground\Cms\ServiceProvider;
use Playground\ServiceProvider as PlaygroundServiceProvider;
use Playground\Test\Unit\Models\ModelCase as BaseModelCase;

/**
 * \Tests\Unit\Playground\Cms\Models\ModelCase
 */
class ModelCase extends BaseModelCase
{
    protected function getPackageProviders($app)
    {
        return [
            PlaygroundServiceProvider::class,
            ServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('auth.providers.users.model', 'Playground\\Models\\User');
        $app['config']->set('playground-auth.verify', 'user');

        $app['config']->set('playground-cms.load.migrations', true);
    }
}
