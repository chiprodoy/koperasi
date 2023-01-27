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

    public function ckeditorupload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            /* upload file */
            //old one
            //$request->file('upload')->move(public_path('images'), $fileName);
            $request->file('upload')->storeAs('images', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/images/'.$fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
