<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Feature\Playground\Cms\Models\PageRevision;

use Tests\Feature\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Cms\Models\PageRevision\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Cms\Models\PageRevision::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => \Playground\Cms\Models\Page::class,
        ],
        'page' => [
            'key' => 'page_id',
            'rule' => 'create',
            'modelClass' => \Playground\Cms\Models\Page::class,
        ],
    ];
}
