<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Playground\Cms\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Playground\Models\Model;

/**
 * \Playground\Cms\Models\Snippet
 */
class Snippet extends Model
{
    protected $table = 'cms_snippets';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'snippet_type' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'start_at' => null,
        'planned_start_at' => null,
        'end_at' => null,
        'planned_end_at' => null,
        'canceled_at' => null,
        'closed_at' => null,
        'embargo_at' => null,
        'fixed_at' => null,
        'postponed_at' => null,
        'published_at' => null,
        'released_at' => null,
        'resumed_at' => null,
        'resolved_at' => null,
        'suspended_at' => null,
        'gids' => 0,
        'po' => 0,
        'pg' => 0,
        'pw' => 0,
        'only_admin' => false,
        'only_user' => false,
        'only_guest' => false,
        'allow_public' => false,
        'status' => 0,
        'rank' => 0,
        'size' => 0,
        'revision' => 0,
        'active' => true,
        'canceled' => false,
        'closed' => false,
        'completed' => false,
        'fixed' => false,
        'flagged' => false,
        'internal' => false,
        'locked' => false,
        'pending' => false,
        'planned' => false,
        'problem' => false,
        'published' => false,
        'released' => false,
        'retired' => false,
        'resolved' => false,
        'sitemap' => false,
        'suspended' => false,
        'unknown' => false,
        'label' => '',
        'title' => '',
        'byline' => '',
        'slug' => null,
        'url' => '',
        'description' => '',
        'introduction' => '',
        'content' => null,
        'summary' => null,
        'icon' => '',
        'image' => '',
        'avatar' => '',
        'ui' => '{}',
        'assets' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
        'sources' => '{}',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'start_at' => 'datetime',
        'planned_start_at' => 'datetime',
        'end_at' => 'datetime',
        'planned_end_at' => 'datetime',
        'canceled_at' => 'datetime',
        'closed_at' => 'datetime',
        'embargo_at' => 'datetime',
        'fixed_at' => 'datetime',
        'postponed_at' => 'datetime',
        'published_at' => 'datetime',
        'released_at' => 'datetime',
        'resumed_at' => 'datetime',
        'resolved_at' => 'datetime',
        'suspended_at' => 'datetime',
        'gids' => 'integer',
        'po' => 'integer',
        'pg' => 'integer',
        'pw' => 'integer',
        'only_admin' => 'boolean',
        'only_user' => 'boolean',
        'only_guest' => 'boolean',
        'allow_public' => 'boolean',
        'status' => 'integer',
        'rank' => 'integer',
        'size' => 'integer',
        'revision' => 'integer',
        'active' => 'boolean',
        'canceled' => 'boolean',
        'closed' => 'boolean',
        'completed' => 'boolean',
        'duplicate' => 'boolean',
        'fixed' => 'boolean',
        'flagged' => 'boolean',
        'internal' => 'boolean',
        'locked' => 'boolean',
        'pending' => 'boolean',
        'planned' => 'boolean',
        'problem' => 'boolean',
        'published' => 'boolean',
        'released' => 'boolean',
        'retired' => 'boolean',
        'resolved' => 'boolean',
        'sitemap' => 'boolean',
        'suspended' => 'boolean',
        'unknown' => 'boolean',
        'label' => 'string',
        'title' => 'string',
        'byline' => 'string',
        'slug' => 'string',
        'url' => 'string',
        'description' => 'string',
        'introduction' => 'string',
        'content' => 'string',
        'summary' => 'string',
        'icon' => 'string',
        'image' => 'string',
        'avatar' => 'string',
        'ui' => 'array',
        'assets' => 'array',
        'meta' => 'array',
        'notes' => 'array',
        'options' => 'array',
        'sources' => 'array',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'owned_by_id',
        'parent_id',
        'snippet_type',
        'start_at',
        'planned_start_at',
        'end_at',
        'planned_end_at',
        'canceled_at',
        'closed_at',
        'embargo_at',
        'fixed_at',
        'postponed_at',
        'published_at',
        'released_at',
        'resumed_at',
        'resolved_at',
        'suspended_at',
        'gids',
        'po',
        'pg',
        'pw',
        'only_admin',
        'only_user',
        'only_guest',
        'allow_public',
        'status',
        'rank',
        'size',
        'active',
        'canceled',
        'closed',
        'completed',
        'duplicate',
        'fixed',
        'flagged',
        'internal',
        'locked',
        'pending',
        'planned',
        'problem',
        'published',
        'released',
        'retired',
        'resolved',
        'sitemap',
        'suspended',
        'unknown',
        'label',
        'title',
        'byline',
        'slug',
        'url',
        'description',
        'introduction',
        'content',
        'summary',
        'icon',
        'image',
        'avatar',
        'ui',
        'assets',
        'meta',
        'options',
        'sources',
    ];

    /**
     * Get the revisions of the model.
     */
    public function revisions(): HasMany
    {
        return $this->hasMany(
            SnippetRevision::class,
            'snippet_id',
            'id'
        );
    }
}
