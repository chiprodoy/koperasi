<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public $contentSejarah;
    public $contentBerita;
    public $contentProsedurRegulasi;
    const NEWSCATEGORY=3;
    const REGULASI=2;
    const ABOUT=1;



    public function index(){
        $this->contentSejarah=Post::where('slug','sejarah')->first();
        $this->contentProsedurRegulasi=Post::whereHas('categories',function($query){
            $query->where('id','=',$this::REGULASI);
        })->get();
        $this->contentBerita=Post::whereHas('categories',function($query){
            $query->where('id','=',$this::NEWSCATEGORY);
        })->get();

        return view('welcome',get_object_vars($this));
    }
    //
}
