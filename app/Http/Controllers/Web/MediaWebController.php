<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Media\StoreMediaRequest;
use App\Http\Requests\Media\UpdateMediaRequest;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;

class MediaWebController extends Controller
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
        $media = Media::latest()->paginate(10);
        return view('admin.media.media', array_merge(compact('media'), get_object_vars($this)));
    }

    public function edit(Media $media)
    {
        return view('admin.media.update', array_merge(get_object_vars($this), compact('media')));
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => ['required', 'string', 'unique:media,title'],
            'image' => ['required', 'mimes:png,jpg'],
            'link' => ['string', 'required'],
            'color' => ['string', 'required'],
        ]);

        if ($validate->fails()) {
            return back()->with('success', $validate->messages()->first());
        } else {
            $file = $request->file('image');
            $fileUrl = Storage::disk('public')->putFile('Media', $file);
            $media = Media::create([
                'title' => $request->title,
                'image' => $fileUrl,
                'link' => $request->link,
                'color' => $request->color,
            ]);
            return back()->with('success', 'Data Media Berhasil Ditambahkan');
        }
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
        return redirect()
            ->route('media.index')
            ->with('success', 'Data Media Berhasil Diubah');
    }

    public function destroy(Media $media)
    {
        Storage::disk('public')->delete('Media', $media->image);
        $media->delete();
        return back()->with('success', 'Data Media Berhasil Dihapus');
    }
}