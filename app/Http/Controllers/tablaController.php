<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablaController extends Controller
{
    public function tabla(Request $request){
    	$a = $request->a;
    	$b = $request->b;
    	$c = $request->c;

    	return view('tablares',['a'=>$a,'b'=>$b,'c'=>$c]);
    }
}
