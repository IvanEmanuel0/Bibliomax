<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autor;
use App\Models\Genero;
use App\Models\Editorial;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        $editoriales = Editorial::all();
        $generos = Genero::all();
        $autores = Autor::all();

        return view('libro.listar',
        [
            "libros"=>$libros,
            "editoriales"=>$editoriales,
            "generos"=>$generos,
            "autores"=>$autores
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
        $autores = Autor::all();
        $generos = Genero::all();
        $editoriales = Editorial::all();
        return view('libro.nuevo', 
        [
            "autores" => $autores,
            "generos"=> $generos,
            "editoriales"=> $editoriales
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
        $libro = new Libro();

        $libro->titulo = $request->titulo;
        $libro->isbn = $request->isbn;
        $libro->año = $request->año;
        $libro->autor_id = $request->autor_id;
        $libro->genero_id = $request->genero_id;
        $libro->editorial_id = $request->editorial_id;

        $libro->save();

        return redirect()->route("libro.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        $autores = Autor::all();
        $generos = Genero::all();
        $editoriales = Editorial::all();

        return view('libro.mostrar', 
        [
            "libro" => $libro,
            "autores" => $autores,
            "generos"=> $generos,
            "editoriales"=> $editoriales
        ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        $autores = Autor::all();
        $generos = Genero::all();
        $editoriales = Editorial::all();

        return view('libro.editar', 
        [
            "libro" => $libro,
            "autores" => $autores,
            "generos"=> $generos,
            "editoriales"=> $editoriales
        ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $libro->titulo = $request->titulo;
        $libro->isbn = $request->isbn;
        $libro->año = $request->año;
        $libro->autor_id = $request->autor_id;
        $libro->genero_id = $request->genero_id;
        $libro->editorial_id = $request->editorial_id;

        $libro->save();
        
        return redirect()->route("libro.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();

        return view("libro.index");
    }
}
