@extends('layout')

@section('titulo', 'Nuevo Libro')

@section('contenido')

<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="get">
                    <label for="tituloLibro">Titulo: 
                        <input type="text" name="tituloLibro" id="tituloLibro">
                    </label>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection