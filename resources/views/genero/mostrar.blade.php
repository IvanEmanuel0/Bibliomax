@extends('layout')
@section('titulo', 'Eliminar genero')

@section('contenido')
<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Eliminar genero</h1>
            </div>
            <div class="bg-contenido col-sm-12">
                <form  action="{{route("genero.destroy", ["genero"=>$genero->id])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row pt-5 pb-4">
                                <fieldset disabled="disabled">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="nombre">Nombre: </label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{$genero->nombre}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="col-12 d-flex justify-content-center">
                                    <input type="submit" value="Eliminar genero" class="btn btn-success mt-4 btn-registrar">
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