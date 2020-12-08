@extends('layout')
@section('titulo', 'Autores')

@section('contenido')
<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Lista de autores</h1>
            </div>
            <div class="col-12 bg-contenido">
                <a class="mt-4 btn btn-success" href="{{route('autor.create')}}"><i class="fas fa-plus"></i>Agregar Autor</a>
                <table class="my-4 table table-sm">
                    <thead>
                        <tr>
                          <th scope="col">Nombre</th>
                          <th>Apellido</th>
                          <th class="acciones" scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($autores as $autor)
                          <tr>
                            <td>{{$autor->nombre}}</td>
                            <td>{{$autor->apellido}}</td>
                            <td>
                              <a href="{{route('autor.edit', ['autor'=>$autor->id])}}"><i class="far fa-edit"></i></a>
                              <a href="{{route('autor.show', ['autor'=>$autor->id])}}"><i class="far fa-trash-alt"></i></a>
                            </td>
                          </tr>
                        @empty
                          <div class="mt-3 alert alert-info alert-dismissible fade show" role="alert">
                            Todavía no hay autores cargados.
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