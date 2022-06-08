<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class History extends Model
{
    use HasFactory;

    protected $table = "history";
    public $timestamps = false;

    public function meter()
    {
        return $this->belongsTo(Meter::class);
    }

     protected static function booted()
    {
        static::addGlobalScope('confirmed', function (Builder $builder) {
            $builder->where('confirmed', 1);
        });
    }

}
