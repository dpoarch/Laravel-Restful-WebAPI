<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    public function toArray($request)
    {
        //Returns everything by default
        //return parent::toArray($request);

        //Returns specified DB column fields
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }

    public function with($request){
        return[
            'version' => '1.0.0',
            'author' => 'David Poarch', 
        ];
    }
}
