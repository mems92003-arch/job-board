<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid() -> toString(), 
            'title' => $this->faker->sentence,
            'body' => $this ->faker->paragraph(3,true),
            'published' => $this ->faker->boolean()
        ];
    }
}
