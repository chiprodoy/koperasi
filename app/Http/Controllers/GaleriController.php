<?php

namespace App\Http\Controllers;

use App\Http\Requests\Galeri\StoreGaleriRequest;
use App\Http\Requests\Galeri\UpdateGaleriRequest;
use App\Http\Resources\Galeri\GaleriResource;
use App\Models\Counter;
use App\Models\Galeri;
use App\Models\PostCounter;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::withCount([
            'counters as like_count'=>function(Builder $q){
                    $q->where('activity',Counter::like);
            },
            'counters as view_count'=>function(Builder $q){
                $q->where('activity',Counter::view);
            },
            'counters as share_count'=>function(Builder $q){
                $q->where('activity',Counter::share);
            },
        ])->latest()->paginate(10);
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

    public function updateCounterActivity($id,$activity,Request $request){
        $post=Galeri::find($id)->first();
        $pc=$this->setActivityCounter($post,constant(Counter::class.'::'.$activity),$request->region,$request->deviceid,$request);
        if(!$pc) return abort(500);
    }
        /**
     * update post view counter .
     *
     * @return \Illuminate\Http\Response
     */
    private function setActivityCounter(Galeri $post,$activity,$region,$deviceid,Request $request)
    {
        try {
            $post->counters()->create([
                'region'=>$region,
                'deviceid'=>$deviceid,
                'activity'=>$activity, // like,view,share

            ]);
            return true;

        } catch (Exception $e) {
            if(env('APP_DEBUG')) echo $e->getMessage();
            report($e);
            Log::error($e);
            return false;
        }

    }

}
