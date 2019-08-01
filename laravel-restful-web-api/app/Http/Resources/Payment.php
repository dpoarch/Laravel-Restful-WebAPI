<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Payment extends JsonResource
{
    public function toArray($request)
    {
        //Returns everything by default
        //return parent::toArray($request);

        //Returns specified DB column fields
        return [
            'id' => $this->id,
            'account_id' => $this->account_id,
            'card_number' => $this->card_number,
            'card_expiration' => $this->card_expiration,
            'card_type' => $this->card_type,
            'card_holder_name' => $this->card_holder_name
        ];
    }

    public function with($request){
        return[
            'version' => '1.0.0',
            'author' => 'David Poarch', 
        ];
    }
}
