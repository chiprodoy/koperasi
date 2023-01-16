<?php

namespace App\Http\Resources\Galeri;

use Illuminate\Http\Resources\Json\JsonResource;

class GaleriResource extends JsonResource
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
            'title' => $this->title,
            'image' => asset('/storage/' . $this->image),
            'type' => $this->type,
            'link' => $this->link,
            'deskripsi' => $this->deskripsi,
            'date' => $this->created_at->format('d F Y'),
        ];
    }
}