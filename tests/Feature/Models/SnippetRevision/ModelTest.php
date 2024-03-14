<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Feature\Playground\Cms\Models\SnippetRevision;

use Tests\Feature\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Cms\Models\SnippetRevision\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Cms\Models\SnippetRevision::class;

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
            'modelClass' => \Playground\Cms\Models\Snippet::class,
        ],
        'snippet' => [
            'key' => 'snippet_id',
            'rule' => 'create',
            'modelClass' => \Playground\Cms\Models\Snippet::class,
        ],
    ];
}
