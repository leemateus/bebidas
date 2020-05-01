<?php

namespace App\Http\Controllers;

use App\Bebida;
use Illuminate\Http\Request;

class BebidaController extends Controller
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
        $bebida = Bebida::create([
            'ml' => $request->ml,
            'quantidade' => $request->quantidade,
            'preco_venda' => $request->preco_venda,
            'marca_id' => $request->marca_id,
        ]);

        return Response()->json($bebida);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function show(Bebida $bebida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function edit(Bebida $bebida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bebida $bebida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bebida $bebida)
    {
        //
    }
}
