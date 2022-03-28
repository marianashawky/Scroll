<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_sub_category extends Model
{
    protected $guarded = [];

    public function subCategory()
    {
        return $this->belongsTo(Sub_category::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class,'sub_sub_category_shop');
    }
}
