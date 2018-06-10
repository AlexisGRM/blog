<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caja extends Model
{
    //
    protected $fillable = [
        'description',
        'cliente_id',
    ]; 
}
