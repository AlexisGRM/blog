<?php

namespace App\Http\Controllers;

use App\Planta;
use App\caja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$plantas = planta::all();
        $plantas = DB::table('plantas')
        ->join('cajas','plantas.id','=','cajas.id')
        ->select('plantas.*','cajas.description as cdesc')
        ->get();
        return view('plantas.index',['plantas'=>$plantas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $caja = caja::pluck('description','id');

        return view('plantas.create',['caja'=>$caja]);
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
        planta::create($data);

        return redirect('plantas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function show(Planta $planta)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function edit(Planta $planta)
    {
        //
        $caja = caja::pluck('description','id');
        $planta = planta::find($planta->id);
        return view('plantas.edit',['planta' => $planta,'caja'=>$caja]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planta $planta)
    {
        //
        $vplanta = planta::find($planta->id);
        $data = $request->all();
        $vplanta->update($data);
        return redirect('plantas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planta $planta)
    {
        //
        $vplanta = planta::find($planta->id);
        $vplanta->destroy($planta->id);
        return redirect('plantas');
    }
}
