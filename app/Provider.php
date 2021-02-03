<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    protected $fillable = [
        'nombre',
    ];

    public function products(){
        return $this->hasMany(Pruduct::class);
    }
}
