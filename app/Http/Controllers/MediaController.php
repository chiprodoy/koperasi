<?php

namespace App\Http\Controllers;

use App\Http\Requests\Media\StoreMediaRequest;
use App\Http\Requests\Media\UpdateMediaRequest;
use App\Http\Resources\Media\MediaResource;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::latest()->paginate(10);
        return MediaResource::collection($media);
    }
    public function show(Media $media)
    {
        return response()->success(true, new MediaResource($media));
    }
    public function store(StoreMediaRequest $request)
    {
        $file = $request->file('image');
        $fileUrl = Storage::disk('public')->putFile('Media', $file);
        $media = Media::create([
            'title' => $request->title,
            'image' => $fileUrl,
            'link' => $request->link,
            'color' => $request->color,
        ]);
        return response()->success(
            'Data Media Telah Ditambahkan',
            new MediaResource($media)
        );
    }
    public function update(UpdateMediaRequest $request, Media $media)
    {
        if ($request->file('image')) {
            Storage::disk('public')->delete('Media', $media->image);

            $image = $request->file('image');
            $imageUrl = Storage::disk('public')->putFile('Media', $image);
        } else {
            $imageUrl = $media->image;
        }
        $media->update([
            'title' => $request->title,
            'image' => $imageUrl,
            'link' => $request->link,
            'color' => $request->color,
        ]);
        return response()->success(
            'Data Media Telah Dirubah',
            new MediaResource($media)
        );
    }

    public function destroy(Media $media)
    {
        $old = $media;
        Storage::disk('public')->delete('Media', $media->image);
        $media->delete();
        return response()->success(
            'Data Media Telah Dihapus',
            new MediaResource($old)
        );
    }
}