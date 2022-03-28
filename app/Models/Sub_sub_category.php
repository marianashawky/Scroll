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

}
