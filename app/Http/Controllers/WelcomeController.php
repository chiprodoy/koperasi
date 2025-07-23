<?php

namespace App\Http\Controllers;

use App\Models\HargaSawit;
use App\Models\Post;
use App\Models\Statistik;
use Illuminate\Http\Request;

class WelcomeController extends GuestController
{
    public $contentSejarah;
    public $contentBerita;
    public $contentProsedurRegulasi;
    public $hargaKomoditas;
    public $unitUsaha;
    public $visiMisi;
    public $statistikKoperasi;
    public $contentPosts;
    public $kontakKami;

    const NEWSCATEGORY=3;
    const REGULASI=2;
    const ABOUT=1;



    public function index(){
        $this->hargaKomoditas = $this->getHargaKomoditasTerbaru();

        $this->contentSejarah=Post::where('slug','sejarah')->first();

        $this->visiMisi=Post::where('slug','visi-misi')->first();

        $this->kontakKami=Post::where('slug','hubungi-kami')->first();

        $this->statistikKoperasi= Statistik::all();

        $this->unitUsaha=Post::whereHas('categories',function($query){
            $query->where('slugs','=','unit-usaha');
        })->get();

        $this->contentBerita=Post::whereHas('categories',function($query){
            $query->where('id','=',$this::NEWSCATEGORY);
        })->get();

        return view('guest.home.index',get_object_vars($this));
    }

    private function getHargaKomoditasTerbaru(){
        //cari tgl terbaru
        $newestRecord=HargaSawit::orderBy('tgl_update_harga','desc')->first();
        return HargaSawit::where('tgl_update_harga',$newestRecord->tgl_update_harga)->get();
    }

    public function category($slug){
        $this->contentPosts=Post::whereHas('categories',function($query)use($slug){
            $query->where('slugs','=',$slug);
        })->get();
        return view('guest.category',get_object_vars($this));
    }

    public function post($slug){
        $this->Content = Post::where('slug',$slug)->orderBy('id','desc')->first();
        return view('guest.post',get_object_vars($this));

    }
    //
}
