<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhonesResource extends JsonResource
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
            'id' => $this->id,
            'phoneName' => $this->phoneName,
			'phoneBrand' => $this->phoneBrand,
			'phonePrice' => $this->phonePrice,
        ];
    }
}
