<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class may09Controller extends Controller
{
    public function may09(Request $request){
    	$nombre = $request->nombre;
    	$edad = $request->edad;
    	$edad1 = 2018-$edad;

    	return view('may09res',['nombre'=>$nombre,'nacimiento'=>$edad1]);

    }
}
