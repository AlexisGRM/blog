<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planta extends Model
{
    //
    protected $fillable = [
        'temperatura',
        'humedadAire',
        'humedadTierra',
        'fechaDato',
        'caja_id',
    ];
    
}
