<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends BackendController
{
    public $modelRecords=Comment::class;
    public $indexURL='comment.index';
    public $editURL='comment.edit';
    public $deleteURL='comment.destroy';
    public $createURL='comment.create';
    public $storeURL='comment.store';
    public $showURL='comment.show';
    public $updateURL='comment.update';
    public $titleOfCreatePage='Tambah Komentar';
    public $titleOfShowPage='Detail Komentar';
    public $titleOfEditPage='Edit Komentar';
    public $titleOfIndexPage='Komentar';
    public $extData;
    public $modName='comment';

    public function store(CommentRequest $request){

        parent::insertRecord($request);
        if($request->wantsJson()){
            if($this->errorMsg){
                return $this->output('error',$request,'Data Gagal Disimpan'.$this->errorMsg,$this->createURL);
            }else{
                return $this->output('success',$request,'Data Berhasil Disimpan',$this->createURL);
            }
        }
        if($this->errorMsg){
            return back()->with('error', 'Data Gagal Disimpan'.$this->errorMsg);
        }else{
            return back()->with('success', 'Data Berhasil Disimpan');
        }
    }

}
