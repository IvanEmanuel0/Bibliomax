@extends('layout')
@section('titulo', 'Crear genero')

@section('contenido')
<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Registrar nuevo género</h1>
            </div>
            <div class="bg-contenido col-sm-12">
                <form  action="{{route("genero.store")}}" method="POST">
                    @csrf
                    
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row pt-5 pb-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre: </label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" value="">
                                    </div>
                                </div>
                                
                                <div class="col-12 d-flex justify-content-center">
                                    <input type="submit" value="Registar nueva editorial" class="btn btn-success mt-4 btn-registrar">
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