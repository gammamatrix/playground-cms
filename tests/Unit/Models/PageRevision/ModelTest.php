<?php
/**
 * Playground
 */
namespace Tests\Unit\Playground\Cms\Models\PageRevision;

use Tests\Unit\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Cms\Models\PageRevision\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Cms\Models\PageRevision::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'page',
    ];
}
