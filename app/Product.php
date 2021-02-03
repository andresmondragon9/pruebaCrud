<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'precio', 'cantidad', 'provider_id',
    ];

    public function provider(){
        return $this->belongsTo(Provider::class);
    }
}
