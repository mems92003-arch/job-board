<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{

    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(), 
            'content' => $this->faker->sentence,
            'author' => $this ->faker->boolean()
        ];
    }
}
