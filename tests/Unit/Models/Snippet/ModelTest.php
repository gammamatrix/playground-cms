<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Cms\Models\Snippet;

use Playground\Cms\Models\Snippet;
use Tests\Unit\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Cms\Models\Snippet\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Snippet::class;

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
