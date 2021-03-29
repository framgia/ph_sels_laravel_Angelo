<?php

namespace App\Http\Controllers;

use App\Models\Quizzes;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function showCategoriesPage()
    {
        return view('categories.categories', [
            'quizzes' => Quizzes::all()
        ]);
    }
}
