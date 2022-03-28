<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded = [];

    public function subSubCategory()
    {
        return $this->belongsTo(Sub_sub_category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

}
