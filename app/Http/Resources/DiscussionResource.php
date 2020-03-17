<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscussionResource extends JsonResource
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
            'user_id' => $this->user_id,
            'discussion_id' => $this->discussion_id,
            'option_a' => $this->option_a,
            'option_b' => $this->option_b,
            'option_c' => $this->option_c,
            'option_d' => $this->option_d,
            'status' => $this->status,
            'winner_id' => $this-> winner_id,
            'amount' => $this->amount,
            'href' => [
                'comments' => route('comments.index',$this->id)
            ]
        ];
    }
}
