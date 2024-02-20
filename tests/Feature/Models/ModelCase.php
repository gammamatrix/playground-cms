<?php
/**
 * Playground
 */
namespace Tests\Feature\Playground\Cms\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Playground\Cms\ServiceProvider;
use Playground\ServiceProvider as PlaygroundServiceProvider;
use Playground\Test\Feature\Models\ModelCase as BaseModelCase;

/**
 * \Tests\Feature\Playground\Cms\Models\ModelCase
 */
class ModelCase extends BaseModelCase
{
    use DatabaseTransactions;

    protected function getPackageProviders($app)
    {
        return [
            PlaygroundServiceProvider::class,
            ServiceProvider::class,
        ];
    }

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        if (! empty(env('TEST_DB_MIGRATIONS'))) {
            $this->loadMigrationsFrom(dirname(dirname(__DIR__)).'/database/migrations-laravel');
            $this->loadMigrationsFrom(dirname(dirname(__DIR__)).'/database/migrations');
        }
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
