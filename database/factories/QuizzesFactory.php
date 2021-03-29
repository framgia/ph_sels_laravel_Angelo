<?php

namespace Database\Factories;

use App\Models\Quizzes;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizzesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quizzes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];
    }
}
