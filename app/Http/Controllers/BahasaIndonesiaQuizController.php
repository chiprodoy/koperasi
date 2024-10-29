<?php

namespace App\Http\Controllers;

use App\Models\BahasaIndonesiaQuiz;
use Illuminate\Http\Request;

class BahasaIndonesiaQuizController extends Controller
{
    public function index()
    {
        $questions = BahasaIndonesiaQuiz::all();

        return response()->json($questions, 200);
    }
}
