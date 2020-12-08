@extends('layout')
@section('titulo', 'Lista de Libros')

@section('contenido')

<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Lista de libros</h1>
            </div>
            <div class="col-12 bg-contenido">
                <table class="my-4 table table-sm">
                    <thead>
                        <tr>
                          <th scope="col">Titulo</th>
                          <th scope="col">ISBN</th>
                          <th scope="col">Autor</th>
                          <th scope="col">Editorial</th>
                          <th scope="col">Genero</th>
                          <th scope="col">Año</th>
                          <th class="acciones">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($libros as $libro)
                          <tr>
                            <td>{{$libro->titulo}}</td>
                            <td>{{$libro->isbn}}</td>
                            <td>{{$libro->autor_id}}</td>
                            <td>{{$libro->editorial_id}}</td>
                            <td>{{$libro->genero_id}}</td>
                            <td>{{$libro->año}}</td>
                            <td>
                              <a href="{{route('libro.edit', ['libro'=>$libro->id])}}"><i class="far fa-edit"></i></a>
                              <a href="{{route('libro.show', ['libro'=>$libro->id])}}"><i class="far fa-trash-alt"></i></a>
                            </td>
                          </tr>
                        @empty
                          <div class="mt-3 alert alert-info alert-dismissible fade show" role="alert">
                            Todavía no hay libros cargados.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endforelse
                      </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
    
@endsection