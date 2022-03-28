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

}
