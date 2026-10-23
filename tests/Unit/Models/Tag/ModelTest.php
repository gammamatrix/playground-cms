<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Cms\Models\Tag;

use Playground\Cms\Models\Tag;
use Tests\Unit\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Cms\Models\Tag\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tag::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
