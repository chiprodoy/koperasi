<?php

namespace App\Http\Controllers;

use App\Http\Requests\Forum\StoreForumRequest;
use App\Http\Requests\Forum\UpdateForumRequest;
use App\Http\Resources\Forum\ForumResource;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $forum = Forum::latest()->paginate(10);
        return ForumResource::collection($forum);
    }
    public function show(Forum $forum)
    {
        return response()->success(true, new ForumResource($forum));
    }
    public function store(StoreForumRequest $request)
    {
        $forum = Forum::create([
            'user_id' => Auth::user()->id,
            'konten_forum' => $request->konten_forum,
            'like' => 0,
            'show' => 0,
            'share' => 0,
        ]);
        return response()->success(
            'Data Forum Telah Ditambahkan',
            new ForumResource($forum)
        );
    }
    public function update(UpdateForumRequest $request, Forum $forum)
    {
        $forum->update([
            'user_id' => Auth::user()->id,
            'konten_forum' => $request->konten_forum,
        ]);
        return response()->success(
            'Data Forum Telah Dirubah',
            new ForumResource($forum)
        );
    }

    public function destroy(Forum $forum)
    {
        $old = $forum;
        $forum->delete();
        return response()->success(
            'Data Forum Telah Dihapus',
            new ForumResource($old)
        );
    }
}