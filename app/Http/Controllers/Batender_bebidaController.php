<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batender_bebida;
use App\Bebida;
use App\Trabajador;

class Batender_bebidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batender = Batender_bebida::orderBy('id', 'DESC')->paginate();
        return view('batender.lista', compact('batender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bebida = Bebida::all();
        $trabajador = Trabajador::all();

        return view('batender.crear',[
            'bebida' => $bebida,
            'trabajadores' => $trabajador
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batender = new Batender_bebida;
        $batender->bebida_id = $request->get('id_bebi');
        $batender->trabajador_id = $request->get('id_traba');

        $batender->save();
        return redirect()->to('batender');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batender = Batender_bebida::find($id);
        $bebida = Bebida::all();
        $trabajador = Trabajador::all();
        return view('batender.editar', compact('batender'),[
            'bebidas' => $bebida,
            'trabajadores' => $trabajador
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $batender = Batender_bebida::find($id);
        $batender->bebida_id = $request->id_bebi;
        $batender->trabajador_id = $request->id_traba;

        $batender->save();
        return redirect()->to('batender');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Batender = Batender_bebida::find($id);
        $batender->delete();
        return back()-with('info', 'El Atendedor se elimino');
    }
}
