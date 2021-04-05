<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function showQuizPage()
    {
        return view('quizzes.quizzes');
    }
}
