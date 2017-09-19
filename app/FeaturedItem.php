<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedItem extends Model
{
    public function isActive(){
        return true;
    }
}
