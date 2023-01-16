<?php

namespace App\Http\Resources\Forum;

use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ForumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'konten_forum' => $this->konten_forum,
            'user' => $this->user->name,
            'like' => $this->like,
            'show' => $this->show,
            'share' => $this->share,
            'created_at' => $this->created_at->format('d F Y'),
        ];
    }
}