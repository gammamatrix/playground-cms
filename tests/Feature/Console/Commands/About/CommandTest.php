<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Cms\Console\Commands\About;

use PHPUnit\Framework\Attributes\CoversClass;
use Playground\Cms\ServiceProvider;
use Tests\Feature\Playground\Cms\TestCase;

/**
 * \Tests\Feature\Playground\Cms\Console\Commands\About\CommandTest
 */
#[CoversClass(ServiceProvider::class)]
class CommandTest extends TestCase
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function defineEnvironment($app)
    {
        parent::defineEnvironment($app);

        $app['config']->set('playground-cms.load.migrations', true);
    }

    public function test_command_about_displays_package_information_and_succeed_with_code_0(): void
    {
        /**
         * @var \Illuminate\Testing\PendingCommand $result
         */
        $result = $this->artisan('about');
        $result->assertExitCode(0);
        $result->expectsOutputToContain('Playground: CMS');
    }
}
