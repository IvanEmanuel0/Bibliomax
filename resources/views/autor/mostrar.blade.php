@extends('layout')
@section('titulo', 'Eliminar autor')

@section('contenido')
<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Eliminar autor</h1>
            </div>
            <div class="bg-contenido col-sm-12">
                <form  action="{{route("autor.destroy", ["autor"=>$autor->id])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row pt-5 pb-4">
                                <div class="col-12">
                                    <fieldset class="d-flex" disabled="disabled">
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
                                    </fieldset>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input type="submit" value="Eliminar autor" class="btn btn-success mt-4 btn-registrar">
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