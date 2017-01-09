<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function atsort(){
        return $this->belongsTo('App\Models\Atsort');
    }
}
