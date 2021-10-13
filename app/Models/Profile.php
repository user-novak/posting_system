<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    //relacion uno a uno a la inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }
}
