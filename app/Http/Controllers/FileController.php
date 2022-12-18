<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //
    public function show($slug){
        $pc=Post::where('slug',$slug)->latest()->first();

        if (strpos($pc->multimedia,"http") === 0 ||  strpos($pc->multimedia, "https") === 0){
            return file_get_contents($pc->multimedia);
        }else{
            return Storage::disk('local')->get($pc->multimedia);
            if(Storage::exists($pc->multimedia)){
                return Storage::download($pc->multimedia);
            }

        }
        return response()->noContent();
    }
}
