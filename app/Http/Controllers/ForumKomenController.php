<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForumKomen\StoreForumKomenRequest;
use App\Http\Requests\ForumKomen\UpdateForumKomenRequest;
use App\Http\Resources\ForumKomen\ForumKomenResource;
use App\Models\Forum;
use App\Models\ForumKomen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumKomenController extends Controller
{
    public function index(Forum $forum)
    {
        $forumKomen = ForumKomen::where('forum_id', $forum->id)
            ->latest()
            ->paginate(10);
        return ForumKomenResource::collection($forumKomen);
    }
    public function show(Forum $forum, ForumKomen $forumKomen)
    {
        return response()->success(true, new ForumKomenResource($forumKomen));
    }
    public function store(StoreForumKomenRequest $request, Forum $forum)
    {
        $forumKomen = ForumKomen::create([
            'user_id' => Auth::user()->id,
            'komen_forum' => $request->komen_forum,
            'forum_id' => $forum->id,
        ]);
        return response()->success(
            'Data Forum Komen Berhasil Ditambah',
            new ForumKomenResource($forumKomen)
        );
    }
    public function update(
        UpdateForumKomenRequest $request,
        Forum $forum,
        ForumKomen $forumKomen
    ) {
        $forumKomen->update([
            'user_id' => Auth::user()->id,
            'komen_forum' => $request->komen_forum,
            'forum_id' => $forum->id,
        ]);
        return response()->success(
            'Data Forum Komen Berhasil Dirubah',
            new ForumKomenResource($forumKomen)
        );
    }
    public function destroy(ForumKomen $forumKomen)
    {
        $old = $forumKomen;
        $forumKomen->delete();
        return response()->success(
            'Data  Forum Berhasil Dihapus',
            new ForumKomenResource($forumKomen)
        );
    }
}