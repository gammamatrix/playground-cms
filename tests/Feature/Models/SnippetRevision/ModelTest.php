<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Cms\Models\SnippetRevision;

use Playground\Cms\Models\Snippet;
use Playground\Cms\Models\SnippetRevision;
use Playground\Models\User;
use Tests\Feature\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Cms\Models\SnippetRevision\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = SnippetRevision::class;

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
            'modelClass' => SnippetRevision::class,
        ],
        'snippet' => [
            'key' => 'snippet_id',
            'rule' => 'create',
            'modelClass' => Snippet::class,
        ],
    ];
}
