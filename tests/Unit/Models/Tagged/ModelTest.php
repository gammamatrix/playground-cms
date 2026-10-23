<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Cms\Models\Tagged;

use Playground\Cms\Models\Tagged;
use Tests\Unit\Playground\Cms\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Cms\Models\Tagged\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tagged::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'tag',
    ];
}
