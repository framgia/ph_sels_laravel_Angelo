<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Word;
use App\Models\Choice;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showQuiz(Quiz $quiz)
    {
        return view('quizzes.quiz', [
            'words' => $quiz->words()->paginate(1) ,
            'quiz' => $quiz,
        ]);
    }

    public function showResult(Quiz $quiz)
    {
        return view('quizzes.result', [
            'quiz' => $quiz,
            'choices' => Choice::where('is_correct', true)->get(),
        ]);
    }
}
