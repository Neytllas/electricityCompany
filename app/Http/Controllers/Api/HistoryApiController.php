<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Http\Resources\HistoryResource;

class HistoryApiController extends Controller
{
    public function send()
    {
        $history = History::query()->where("client_id", 4)->first();
        return HistoryResource::collection($history);
    }
}
