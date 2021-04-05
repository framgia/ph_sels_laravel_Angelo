<?php

namespace Database\Factories;

use App\Models\Quiz;
use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Word::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->word,
            'quiz_id' => $this->faker->numberBetween(1, Quiz::count()),
        ];
    }
}
