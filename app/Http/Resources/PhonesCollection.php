<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PhonesCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
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
