<?php

declare(strict_types=1);
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

    protected array $hasMany = [
        'revisions',
    ];

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
