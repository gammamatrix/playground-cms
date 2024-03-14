<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Unit\Playground\Cms\Models\SnippetRevision;

use Tests\Unit\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Cms\Models\SnippetRevision\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Cms\Models\SnippetRevision::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'snippet',
    ];
}
