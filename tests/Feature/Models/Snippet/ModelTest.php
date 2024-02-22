<?php
/**
 * Playground
 */
namespace Tests\Feature\Playground\Cms\Models\Snippet;

use Tests\Feature\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Cms\Models\Snippet\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Cms\Models\Snippet::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<string, array<string, mixed>> Test hasMany relationships.
     */
    protected array $hasMany = [
        'revisions' => ['key' => 'snippet_id', 'modelClass' => \Playground\Cms\Models\SnippetRevision::class],
    ];

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
    ];
}
