<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function sort(){
        return $this->belongsTo('App\Models\Sort');
    }
}
