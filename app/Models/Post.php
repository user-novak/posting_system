<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function service(){
        return $this->belongsTo('App\Models\Service');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }

    //relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }
}
