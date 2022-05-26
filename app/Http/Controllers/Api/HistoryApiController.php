<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Client;
use App\Http\Resources\HistoryResource;
use Illuminate\Support\Facades\Auth;

class HistoryApiController extends Controller
{
    function __construct()
    {
        $this->middleware("auth");
    }

    public function send()
    {
        $client = Client::firstWhere("user_id",  Auth::id());
        $items = History::query()->where("client_id", $client->id)->orderBy("date")->get();
        $last_value = 0;
        foreach($items as $item) {
            $item->delta = $item->indication - $last_value;
            $last_value = $item->indication;
        }

        return HistoryResource::collection($items);
    }
}
