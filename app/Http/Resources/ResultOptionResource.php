<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultOptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this-> user_id,
            'discussion_id' => $this-> discussion_id,
            'selected_option' => $this-> selected_option,
            'href' => [
                'discussion' => route('discussions.index',$this->discussion_id)
            ]
        ];

    }
}
