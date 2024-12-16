<?php

namespace App\Http\Controllers;

use App\Models\EnglishQuiz;
use Illuminate\Http\Request;

class EnglishQuizController extends Controller
{
    public function index()
    {
        $questions = EnglishQuiz::all();

        return response()->json($questions, 200);
    }
}
