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
        $history = History::all();
        return HistoryResource::collection($history);
    }
}
