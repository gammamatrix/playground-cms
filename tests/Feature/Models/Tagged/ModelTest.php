<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Cms\Models\Tagged;

use Playground\Cms\Models\Tag;
use Playground\Cms\Models\Tagged;
use Playground\Models\User;
use Tests\Feature\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Cms\Models\Tagged\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tagged::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => User::class,
        ],
        'tag' => [
            'key' => 'tag_id',
            'rule' => 'create',
            'modelClass' => Tag::class,
        ],
    ];
}
