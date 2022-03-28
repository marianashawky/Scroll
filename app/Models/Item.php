<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
