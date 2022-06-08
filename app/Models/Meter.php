<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    use HasFactory;

    protected $table = "meters";

    
    // public function history()
    // {
    //     return $this->hasMany(History::class);
    // }
}
