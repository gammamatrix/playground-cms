<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Cms\Models\PageRevision;

use Playground\Cms\Models\Page;
use Playground\Cms\Models\PageRevision;
use Playground\Models\User;
use Tests\Feature\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Cms\Models\PageRevision\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = PageRevision::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => PageRevision::class,
        ],
        'page' => [
            'key' => 'page_id',
            'rule' => 'create',
            'modelClass' => Page::class,
        ],
    ];
}
