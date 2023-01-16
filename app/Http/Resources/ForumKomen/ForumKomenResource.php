<?php

namespace App\Http\Resources\ForumKomen;

use Illuminate\Http\Resources\Json\JsonResource;

class ForumKomenResource extends JsonResource
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
            'user' => $this->user->name,
            'komen_forum' => $this->komen_forum,
        ];
    }
}