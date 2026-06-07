<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Cms\Models\Page;

use Playground\Cms\Models\Page;
use Tests\Unit\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Cms\Models\Page\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Page::class;

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
