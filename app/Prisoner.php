<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
    protected $fillable= ['firstname','lastname'];
//    protected $guarded =[''];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
