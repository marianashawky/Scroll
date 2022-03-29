<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $guarded = [];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
