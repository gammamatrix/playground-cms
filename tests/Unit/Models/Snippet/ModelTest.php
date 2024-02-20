<?php
/**
 * Playground
 */
namespace Tests\Unit\Playground\Cms\Models\Snippet;

use Tests\Unit\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Cms\Models\Snippet\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Cms\Models\Snippet::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];

    public function test_factory_make(): void
    {
        $instance = null;

        $modelClass = $this->getModelClass();
        if (is_callable([$modelClass, 'factory'])) {
            $instance = $modelClass::factory()->make();
        }

        $this->assertNotNull($instance);
        $this->assertInstanceOf($modelClass, $instance);
    }
}
