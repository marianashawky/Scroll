<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded = [];

    public function subSubCategories()
    {
        return $this->hasMany(Shop::class,'sub_sub_category_shop');
    }
}
