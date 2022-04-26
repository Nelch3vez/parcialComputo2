<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tienda;
use App\Http\Resources\Tienda as TiendaResource;

class TiendaController extends Controller
    
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tienda = Tienda::all();
        return TiendaResource::collection($tienda);
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
        //
        $tienda = $request->isMethod('put') ? Tienda::findOrFail($request->id): new Tienda;
        $tienda-> id = $request->input('id'); 
        $tienda-> articulo = $request->input('articulo'); 
        $tienda-> marca = $request->input('marca');
        $tienda-> sexo = $request->input('sexo');
        $tienda-> color = $request->input('color');
        $tienda-> talla = $request->input('talla');
        $tienda-> precio = $request->input('precio');
        
        if($tienda->save()){
            return new TiendaResource($tienda);
        }

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
        $tienda = Tienda::findOrFail($id);
        return new TiendaResource($tienda);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tienda = Tienda::findOrFail($id);
        if ($tienda->delete()){
            return new TiendaResource($tienda);

        }

    }
}    

