

@extends('adminlte::page')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Añadir Plugins</div>

                    <form action="home" method="post">
                        @csrf
                        <label>     url</label>
                        <input type="text" name = "url">
                        <button type="submit" class = "btn btn-success"> New Plugin </button>
                    </form>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Ingresar correo</div>

                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Elija un comprobante</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>

                <form action="home" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Direccion de correo </label>
                        <input type="email" name = "correo">
                        <button type="submit" class = "btn btn-primary"> Enviar Comprobante </button>
                    </div>
                    
                </form>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
