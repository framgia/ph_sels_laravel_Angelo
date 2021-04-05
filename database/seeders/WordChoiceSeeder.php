<?php

namespace Database\Seeders;

use App\Models\Word;
use App\Models\Choice;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class WordChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizzes = Quiz::factory()
        ->count(5)
        ->create();

        foreach ($quizzes as $quiz) {
            $words = Word::factory()
            ->count(20)
            ->for($quiz)
            ->hasChoices(4)
            ->create();
        }
    }
}
