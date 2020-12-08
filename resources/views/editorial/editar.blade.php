@extends('layout')
@section('titulo', 'Editar editorial')

@section('contenido')
<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Editar editorial</h1>
            </div>
            <div class="bg-contenido col-sm-12">
                <form  action="{{route("editorial.update", ["editorial"=>$editorial->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row pt-5 pb-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre: </label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$editorial->nombre}}">
                                    </div>
                                </div>
                                
                                <div class="col-12 d-flex justify-content-center">
                                    <input type="submit" value="Guardar cambios" class="btn btn-success mt-4 btn-registrar">
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