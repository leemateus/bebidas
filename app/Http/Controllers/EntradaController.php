<?php

namespace App\Http\Controllers;

use App\Entrada;
use App\Bebida;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bebida = Entrada::create();

        $bebida->entradaBebida()->create([
            'quantidade_entrada' => $request->quantidade_entrada,
            'preco_entrada' => $request->preco_entrada,
            'bebida_id' => $request->bebida_id,
        ]);

        $bebida_atual = Bebida::where('id', '=', $request->bebida_id)->first();

        $obj_bebida = new Bebida();

        $atualiza_quantidade_bebida = $obj_bebida->where('id', '=', $request->bebida_id)->update([
            'quantidade' => $bebida_atual->quantidade + $request->quantidade_entrada,
        ]);

        return Response()->json($bebida_atual->quantidade + $request->quantidade_entrada);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function show(Entrada $entrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrada $entrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrada $entrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrada $entrada)
    {
        //
    }
}
