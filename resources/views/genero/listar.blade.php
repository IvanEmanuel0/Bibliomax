@extends('layout')
@section('titulo', 'Géneros')

@section('contenido')
<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Lista de géneros</h1>
            </div>
            
            <div class="col-12 bg-contenido">
                <a class="mt-4 btn btn-success" href="{{route('genero.create')}}"><i class="fas fa-plus"></i>Agregar Género</a>
                <table class="my-4 table table-sm">
                    <thead>
                        <tr>
                          <th scope="col">Nombre</th>
                          <th class="acciones" scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($generos as $genero)
                          <tr>
                            <td>{{$genero->nombre}}</td>

                            <td>
                              <a href="{{route('genero.edit', ['genero'=>$genero->id])}}"><i class="far fa-edit"></i></a>
                              <a href="{{route('genero.show', ['genero'=>$genero->id])}}"><i class="far fa-trash-alt"></i></a>
                            </td>
                          </tr>
                        @empty
                          <div class="mt-3 alert alert-info alert-dismissible fade show" role="alert">
                            Todavía no hay generos cargados.
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