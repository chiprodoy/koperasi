<?php

namespace App\Http\Controllers;

use App\Models\TWKQuiz;
use Illuminate\Http\Request;

class TWKQuizController extends Controller
{
    public function index()
    {
        $questions = TWKQuiz::all();

        return response()->json($questions, 200);
    }
}
