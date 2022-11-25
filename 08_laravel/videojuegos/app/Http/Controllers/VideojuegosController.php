<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;

class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $videojuegos = [
            ["call of Duty", 60, 18, "Este es el call of duty"],
            ["pokemon Purpura", 50, 7, "Este es el Pokemon españita"]
        ]; */

        $videojuegos = Videojuego::all();

        $mensaje = "AQUI TENEMOS UN LISTADO DE VIDEOJUEGOS";

        return view('videojuegos/index',
        [
             "videojuegos" => $videojuegos,
            "mensaje" => $mensaje
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videojuegos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videojuego = new Videojuego;
        $videojuego -> titulo = $request-> input('titulo');
        $videojuego -> precio = $request-> input('precio');
        $videojuego -> pegi = $request-> input('pegi');
        $videojuego -> descripcion = $request-> input('descripcion');

        $videojuego -> save();

        return redirect('videojuegos');
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
    }
}
