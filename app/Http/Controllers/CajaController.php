<?php

namespace App\Http\Controllers;

use App\caja;
use App\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cajas = DB::table('cajas')
      ->join('clientes','cajas.cliente_id','=','clientes.id')
      ->select('cajas.*','clientes.nombre as cdesc','clientes.apeMaterno as cdescc')
      ->get();

        return view('cajas.index',['cajas'=>$cajas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes = cliente::pluck('nombre','id');
        return view('cajas.create',['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $data = $request->all();
        caja::create($data);

        return redirect('cajas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\caja  $caja
     * @return \Illuminate\Http\Response
     */
    public function show(caja $caja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\caja  $caja
     * @return \Illuminate\Http\Response
     */
    public function edit(caja $caja)
    {
        //
        $clientes = cliente::pluck('nombre','id');
        $caja = caja::find($caja->id);
        return view('cajas.edit',['caja' => $caja,'clientes'=>$clientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\caja  $caja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, caja $caja)
    {
        //
        $vcaja = caja::find($caja->id);
        $data = $request->all();
        $vcaja->update($data);
        return redirect('cajas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\caja  $caja
     * @return \Illuminate\Http\Response
     */
    public function destroy(caja $caja)
    {
        //
        $vcaja = caja::find($caja->id);
        $vcaja->destroy($caja->id);
        return redirect('cajas');
    }
}
