@extends('layout')

@section('titulo', 'Nuevo Libro')

@section('contenido')

<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h1>Registro de nuevo libro</h1>
            </div>
            <div class="bg-contenido col-sm-12">
                <form  action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row pt-5 pb-4">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="txtTitulo">Titulo: </label>
                                        <input type="text" class="form-control" name="txtTitulo" id="txtTitulo" value="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="txtIsbn">ISBN: </label>
                                        <input type="text" class="form-control" name="txtIsbn" id="txtIsbn" placeholder="Ingresar ISBN sin guiones" value="">
                                    </div>
                                </div>
                                <div class="col-12  col-sm-6">
                                    <div class="form-group">
                                        <label for="txtAño">Año: </label>
                                        <input type="text" class="form-control" name="txtAño" id="txtAño" value="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="sltAutor">Autor:</label>
                                        <select class="form-control" name="sltAutor" id="sltAutor">
                                            <option value="" selected disabled>Elegir</option>
                                            <option value="">Goerge R. R. Martin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Editorial:</label>
                                        <select class="form-control" name="" id="">
                                            <option value="" selected disabled>Elegir</option>
                                            <option value="">Debols!llo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Género:</label>
                                        <select class="form-control" name="" id="">
                                            <option value="" selected disabled>Elegir</option>
                                            <option value="">Novela</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input type="submit" value="Registar nuevo libro" class="btn btn-success mt-4 btn-registrar">
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