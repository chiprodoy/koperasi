<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenisSyarat\StoreJenisSyaratRequest;
use App\Http\Requests\JenisSyarat\UpdateJenisSyaratRequest;
use App\Models\JenisSyarat;
use Illuminate\Http\Request;
use MF\Controllers\ApiResponse;
use MF\Controllers\BreadCrumb;
use MF\Controllers\DataTable;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;
use MF\Controllers\ResponseCode;

class JenisSyaratController extends Controller
{
    use PageMenu;

    public function __construct()
    {
        $this->menuModel=\App\Models\Menu::class;
        $this->getBackEndMenu();
        $this->BREADCRUMB_ITEM=[
            new Page('Home',route('dashboard'))
        ];

        //$this->modName=$this->modelRecords;

    }
    
    public function index()
    {
        $jenissyarat = JenisSyarat::latest()->paginate(10);
        return view('admin.jenis_syarat.jenis_syarat', array_merge(compact('jenissyarat'),get_object_vars($this)));
    }

    public function edit(JenisSyarat $jenissyarat)
    {
        return view('update', array_merge(compact('jenissyarat'),get_object_vars($this)));
    }
    public function store(StoreJenisSyaratRequest $request)
    {
        $jenissyarat = JenisSyarat::create([
            'name' => $request->name,
        ]);
        return back()->with('success', 'Data JenisSyarat Berhasil Ditambahkan');
    }
    public function update(
        UpdateJenisSyaratRequest $request,
        JenisSyarat $jenissyarat
    ) {
        $jenissyarat->update([
            'name' => $request->name,
        ]);
        return redirect()
            ->route('jenissyarat.index')
            ->with('success', 'Data JenisSyarat Berhasil Diubah');
    }

    public function destroy(JenisSyarat $jenissyarat)
    {
        $jenissyarat->delete();
        return back()->with('success', 'Data JenisSyarat Berhasil Dihapus');
    }
}