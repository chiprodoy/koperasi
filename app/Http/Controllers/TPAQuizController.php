<?php

namespace App\Http\Controllers;

use App\Models\TPAQuiz;
use Illuminate\Http\Request;

class TPAQuizController extends Controller
{
    public function index()
    {
        $questions = TPAQuiz::all();

        return response()->json($questions, 200);
    }
}
