<?php

namespace App\Http\Controllers;

use App\Models\NumericQuiz;
use Illuminate\Http\Request;

class NumericQuizController extends Controller
{
    public function index()
    {
        $questions = NumericQuiz::all();

        return response()->json($questions, 200);
    }
}
