<?php

namespace App\Http\Controllers;

use App\Http\Resources\CekUmur\CekUmurResource;
use App\Models\CekUmur;
use Illuminate\Http\Request;

class CekUmurController extends Controller
{
    public function index(Request $request)
    {
        $cekumur = CekUmur::where('title', $request->jenis)->get();
        return CekUmurResource::collection($cekumur);
    }

    public function show(CekUmur $cekumur)
    {
        return response()->success(true, new CekUmurResource($cekumur));
    }
}