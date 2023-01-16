<?php

namespace App\Http\Controllers;

use App\Http\Requests\Galeri\StoreGaleriRequest;
use App\Http\Requests\Galeri\UpdateGaleriRequest;
use App\Http\Resources\Galeri\GaleriResource;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->paginate(10);
        return GaleriResource::collection($galeri);
    }
    public function show(Galeri $galeri)
    {
        return response()->success(true, new GaleriResource($galeri));
    }
    public function store(StoreGaleriRequest $request)
    {
        $file = $request->file('image');
        $fileUrl = Storage::disk('public')->putFile('galeri', $file);
        $galeri = Galeri::create([
            'title' => $request->title,
            'image' => $fileUrl,
            'type' => $request->type,
            'link' => $request->link,
            'deskripsi' => $request->deskripsi,
        ]);
        return response()->success(
            'Data Galeri Telah Ditambahkan',
            new GaleriResource($galeri)
        );
    }
    public function update(UpdateGaleriRequest $request, Galeri $galeri)
    {
        if ($request->file('image')) {
            Storage::disk('public')->delete('galeri', $galeri->image);

            $image = $request->file('image');
            $imageUrl = Storage::disk('public')->putFile('galeri', $image);
        } else {
            $imageUrl = $galeri->image;
        }
        $galeri->update([
            'title' => $request->title,
            'image' => $imageUrl,
            'type' => $request->type,
            'link' => $request->link,
            'deskripsi' => $request->deskripsi,
        ]);
        return response()->success(
            'Data Galeri Telah Dirubah',
            new GaleriResource($galeri)
        );
    }

    public function destroy(Galeri $galeri)
    {
        $old = $galeri;
        $galeri->delete();
        return response()->success(
            'Data Galeri Telah Dihapus',
            new GaleriResource($old)
        );
    }
}