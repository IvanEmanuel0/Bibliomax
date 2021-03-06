@extends('layout')
@section('titulo', 'Eliminar genero')

@section('contenido')
<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Eliminar libro</h1>
            </div>
            <div class="bg-contenido col-sm-12">
                <form  action="{{route("libro.destroy", ["libro"=>$libro->id])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="row">
                        <div class="col-12">
                            <div class="row pt-5 pb-4">
                                <div class="col-12">
                                    <fieldset  disabled="disabled">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="titulo">Titulo: </label>
                                                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{$libro->titulo}}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="isbn">ISBN: </label>
                                                    <input type="text" class="form-control" name="isbn" id="isbn" value="{{$libro->isbn}}">
                                                </div>
                                            </div>
                                            <div class="col-12  col-sm-6">
                                                <div class="form-group">
                                                    <label for="año">Año: </label>
                                                    <input type="text" class="form-control" name="año" id="año" value="{{$libro->año}}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="autor">Autor:</label>
                                                    <select class="form-control" name="autor_id" id="autor">
                                                        <option value="{{$libro->autor_id}}" selected disabled>{{$libro->autor_id}}</option>
                                                        @forelse($autores as $autor)
                                                            <option value="{{$autor->id}}">{{$autor->nombre}} {{$autor->apellido}}</option>
                                                        @empty
                                                            
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="editorial">Editorial:</label>
                                                    <select class="form-control" name="editorial_id" id="editorial">
                                                        <option value="{{$libro->editorial_id}}" selected disabled>{{$libro->editorial_id}}</option>
                                                        @forelse($editoriales as $editorial)
                                                            <option value="{{$editorial->id}}">{{$editorial->nombre}}</option>
                                                        @empty
                                                            
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="genero">Género:</label>
                                                    <select class="form-control" name="genero_id" id="genero">
                                                        <option value="{{$libro->genero_id}}" selected disabled>{{$libro->genero_id}}</option>
                                                        @forelse($generos as $genero)
                                                            <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                                                        @empty
                                                            
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="col-12 d-flex justify-content-center">
                                        <input type="submit" value="Eliminar libro" class="btn btn-success mt-4 btn-registrar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection