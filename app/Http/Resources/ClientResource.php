<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'user_id' => $this->user_id,
            'Surname' => $this->Surname,
            'Name' => $this->Name,
            'MiddleName' => $this->MiddleName,
            'PhoneNumber' => $this->PhoneNumber,
            'Email' => $this->Email,
            'City' => $this->City,
            'Street' => $this->Street,
            'HouseNumber' => $this->HouseNumber,
            'Flat' => $this->Flat,
            'Login' => $this->Login
        ];
    }
}
