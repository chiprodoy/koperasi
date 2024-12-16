<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipsAndTricksRequest;
use App\Models\TipsAndTricks;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;

class TipsAndTricksWebController extends Controller
{
    use PageMenu;

    public function __construct()
    {
        $this->menuModel = \App\Models\Menu::class;
        $this->getBackEndMenu();
        $this->BREADCRUMB_ITEM = [
            new Page('Home', route('dashboard'))
        ];

        //$this->modName=$this->modelRecords;
    }

    public function index()
    {
        $tipsAndTricks = TipsAndTricks::first();
        return view('admin.tips-and-tricks.index', array_merge(compact('tipsAndTricks'), get_object_vars($this)));
    }

    public function edit(TipsAndTricks $tipsAndTricks)
    {
        return view('admin.tips-and-tricks.edit', array_merge(compact('tipsAndTricks'), get_object_vars($this)));
    }

    public function create()
    {
        return view('admin.tips-and-tricks.create', get_object_vars($this));
    }

    public function store(TipsAndTricksRequest $request)
    {
        $tipsAndTricks = TipsAndTricks::create([
            'content' => $request->content,
        ]);

        return redirect()->route('admin.tips-and-tricks.index')->with('success', 'Pertanyaan baru berhasil ditambahkan');
    }

    public function update(TipsAndTricksRequest $request, TipsAndTricks $tipsAndTricks)
    {
        $tipsAndTricks->update([
            'content' => $request->content,
        ]);

        return redirect()->route('admin.tips-and-tricks.index')->with('success', 'Pertanyaan berhasil diperbarui');
    }
}
