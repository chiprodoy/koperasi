<?php

namespace App\Http\Controllers;

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
    public $titleOfCreatePage='Tambah Konten';
    public $titleOfShowPage='Detail Konten';
    public $titleOfEditPage='Edit Konten';
    public $titleOfIndexPage='Konten';
    public $extData;
    public $modName='comment';

}
