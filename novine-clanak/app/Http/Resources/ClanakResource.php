<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClanakResource extends JsonResource
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
            'id' => $this->resource->id,
            'naslov' => $this->resource->naslov,
            'opis' => $this->resource->opis,
            'novine' => $this->resource->novine,
            'user' => new UserResource($this->resource->user)
        ];
    }
}
