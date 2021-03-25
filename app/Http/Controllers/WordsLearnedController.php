<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordsLearnedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function showWordsLearnedPage()
    {
        return view('dashboard.words-learned');
    }
}
