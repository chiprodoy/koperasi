<?php

namespace App\Http\Controllers;

use App\Models\TipsAndTricks;

class TipsAndTricksController extends Controller
{
    public function index()
    {
        $tipsAndTricks = TipsAndTricks::all();

        return response()->json($tipsAndTricks, 200);
    }
}
