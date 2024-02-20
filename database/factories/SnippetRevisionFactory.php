<?php
/**
 * Playground
 */
namespace Database\Factories\Playground\Cms\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Playground\Cms\Models\SnippetRevision;

/**
 * \Database\Factories\Playground\Cms\Models\SnippetRevisionFactory
 *
 * @extends Factory<SnippetRevision>
 */
class SnippetRevisionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<SnippetRevision>
     */
    protected $model = SnippetRevision::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'label' => $this->faker->sentence(3),
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->sentence(3),
            'introduction' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(3),
            'summary' => $this->faker->sentence(3),
        ];
    }

    public function locked(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'locked' => true,
        ]);
    }

    public function published(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'published' => true,
        ]);
    }
}
