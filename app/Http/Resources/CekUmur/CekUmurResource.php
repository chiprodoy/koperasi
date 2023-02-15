<?php

namespace App\Http\Resources\CekUmur;

use Illuminate\Http\Resources\Json\JsonResource;

class CekUmurResource extends JsonResource
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
            'jenjang_pendidikan' => $this->jenisSyarat->name,
            'min_tahun' => $this->min_tahun,
            'max_tahun' => $this->max_tahun,
            'min_bulan' => $this->min_bulan,
            'max_bulan' => $this->max_bulan,
            'min_tanggal' => $this->min_tanggal,
            'max_tanggal' => $this->max_tanggal,
            'tahun_sekarang' => $this->tahun_sekarang,
            'bulan_sekarang' => $this->bulan_sekarang,
            'tanggal_sekarang' => $this->tanggal_sekarang,
        ];
    }
}