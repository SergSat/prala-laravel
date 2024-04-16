<?php

namespace Database\Factories;

use App\Models\Poll;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poll>
 */
class PollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->catchPhrase(),
            'finished' => false,
        ];
    }

    /**
     * Configure the factory.
     */
    public function configure(): static
    {
        return $this->afterCreating(function (Poll $poll) {

            $poll->options()->createMany([
                ['name' => fake()->catchPhrase()],
                ['name' => fake()->catchPhrase()],
                ['name' => fake()->catchPhrase()],
                ['name' => fake()->catchPhrase()],
            ]);
        });
    }
}
