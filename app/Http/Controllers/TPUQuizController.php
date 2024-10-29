<?php

namespace App\Http\Controllers;

use App\Models\TPUQuiz;
use Illuminate\Http\Request;

class TPUQuizController extends Controller
{
    public function index()
    {
        $questions = TPUQuiz::all();

        return response()->json($questions, 200);
    }
}
