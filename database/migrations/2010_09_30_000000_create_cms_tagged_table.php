<?php

/**
 * Playground
 */

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Playground\Cms\Models\Tagged;

/**
 * @see Tagged
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cms_tagged', function (Blueprint $table) {

            // Primary key

            $table->uuid('id')->primary();

            // IDs

            $table->uuid('created_by_id')->nullable()->index();
            $table->uuid('tag_id')->nullable()->index();
            $table->uuid('page_id')->nullable()->index();
            $table->uuid('snippet_id')->nullable()->index();

            // Dates

            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_tagged');
    }
};
