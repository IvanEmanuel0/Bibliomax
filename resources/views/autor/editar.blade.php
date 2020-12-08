@extends('layout')
@section('titulo', 'Editar autor')

@section('contenido')
<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Editar autor</h1>
            </div>
            <div class="bg-contenido col-sm-12">
                <form  action="{{route("autor.update", ["autor"=>$autor->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row pt-5 pb-4">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre: </label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$autor->nombre}}">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="apellido">Apellido: </label>
                                        <input type="text" class="form-control" name="apellido" id="apellido" value="{{$autor->apellido}}">
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