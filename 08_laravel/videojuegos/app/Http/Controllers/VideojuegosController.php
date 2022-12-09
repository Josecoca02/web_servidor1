<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use App\Models\Compania;
use DB; //PARA PODER HACER CONSULTAS EN LARVEL

class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $videojuegos = [
        //     ["Call of Duty", 60, 18, "Este es el call of duty"],
        //     ["Pokemon Purpura", 50, 3, "Este es el Pokemon Purpura"]
        // ];

        $videojuegos = Videojuego::all();
        $mensaje= "Aqui tenemos un listado de games";
        return view('videojuegos/index', 
        [
            "videojuegos" => $videojuegos,
            "mensaje" => $mensaje
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companias = Compania::all();  //para sacar las companias que haya en lac base de datos y se muestre para eliegira la hora de crear y se pone arriab use App\Models\Compania;
         return view('videojuegos/create',
        [
            'companias' => $companias
        ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // lo que hace guarda los datados
    {
        $videojuego = new Videojuego;
        $videojuego -> titulo = $request-> input ('titulo');
        $videojuego -> precio = $request-> input ('precio');
        $videojuego -> pegi = $request-> input ('pegi');
        $videojuego -> descripcion = $request-> input ('descripcion');
        $videojuego -> compania_id = $request-> input ('compania_id');

        $videojuego ->save();

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
        $companias = Compania::find($id);
        $videojuego = Videojuego::find($id); // ESTO ES COMO select * from videojuego para ver todos los videojuegos que esten en la bases de datos
        return view('videojuegos/show',
        [
            'videojuego' => $videojuego,
            'companias' => $companias
        ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $videojuego = Videojuego::find($id);
        return view('videojuegos/edit',
            [
                'videojuego' => $videojuego,
                
                
            ]
        );
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
        $videojuego = Videojuego::find($id);
        
        $videojuego -> titulo = $request -> input('titulo');
        $videojuego -> precio = $request -> input('precio');
        $videojuego -> pegi = $request -> input('pegi');
        $videojuego -> descripcion = $request -> input('descripcion');

        $videojuego -> save();

        return redirect('videojuegos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //METODO PARA BORRAR
    {
        DB::table('videojuegos')->where('id','=',$id)->delete();

        return redirect('videojuegos');
    }
    /**
     *  BUSCAR TODOS LOS VIDEOJUEGOS QUE CONTENGAN 
     * LA PALABRA introcudida en el bucador
     * @param string $titulo
     * @return \Illuminate\Http\Response
     * 
     */
    public function search(Request $request) {

        $titulo = $request -> input('titulo');
        
        $videojuegos = DB::table('videojuegos')
            ->where('titulo', 'like', '%' . $titulo . '%')
            ->get();

        return view('videojuegos/search',
            [
                'videojuegos' => $videojuegos
            ]
        );
    }
}
