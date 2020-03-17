<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'reference_code' => $this-> reference_code,
            'issues' => $this-> issues,
            'status' => $this-> status,
            'date_resolved' => $this-> date_resolved

        ];

    }
}
