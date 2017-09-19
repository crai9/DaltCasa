<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function writer() {
        return $this->belongsTo('App\User', 'author', 'id');
    }
}
