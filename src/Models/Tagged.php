<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Playground\Cms\Models;

use Database\Factories\Playground\Cms\Models\TaggedFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use Playground\Models\User;
use Playground\Models\UuidModel;

/**
 * \Playground\Cms\Models\Tagged
 *
 * @property string $id
 * @property ?scalar $created_by_id
 * @property ?string $tag_id
 * @property ?string $page_id
 * @property ?string $snippet_id
 * @property ?Carbon $created_at
 */
class Tagged extends UuidModel
{
    const UPDATED_AT = null;

    /** @use HasFactory<TaggedFactory> */
    use HasFactory;

    protected $table = 'cms_tagged';

    protected $attributes = [
        'created_by_id' => null,
        'tag_id' => null,
        'page_id' => null,
        'snippet_id' => null,
        'created_at' => null,
    ];

    protected $fillable = [
        'tag_id',
        'page_id',
        'snippet_id',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }

    /**
     * The creator.
     *
     * @return HasOne<User, $this>
     */
    public function creator(): HasOne
    {
        return $this->hasOne(
            User::class,
            'id',
            'created_by_id'
        );
    }

    /**
     * The tag.
     *
     * @return HasOne<Tag, $this>
     */
    public function tag(): HasOne
    {
        return $this->hasOne(
            Tag::class,
            'id',
            'tag_id'
        );
    }
}
