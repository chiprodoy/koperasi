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
    public $titleOfCreatePage='Tambah Komentar';
    public $titleOfShowPage='Detail Komentar';
    public $titleOfEditPage='Edit Komentar';
    public $titleOfIndexPage='Komentar';
    public $extData;
    public $modName='comment';



}
