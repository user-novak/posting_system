<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //relacion uno a muchos
     public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    //relacion uno a muchos inversa
    public function type(){
        return $this->belongsTo('App\Models\Type');
    }
}
