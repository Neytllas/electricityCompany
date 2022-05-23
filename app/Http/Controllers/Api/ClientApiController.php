<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Resources\ClientResource;

class ClientApiController extends Controller
{
    public function send()
    {
        $client =  Client::query()->where("user_id", 2)->first();
        return ClientResource::collection($client);
    }
}
