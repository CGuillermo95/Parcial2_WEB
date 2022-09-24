@extends('inicio')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Nuevo Cliente</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form method="POST" action="{{route('clientes.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="Nombres" class="required">Nombres</label>
                                <input type="text" name="Nombres" id="Nombres"
                                    class="form-control {{$errors->has('Nombres') ? 'is-invalid' : ''}}"
                                    placeholder="Ingrese los nombres del cliente" value="{{old('Nombres', '')}}">
                                @if ($errors->has('Nombres'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('Nombres') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="Apellidos" class="required">Apellidos</label>
                                <input type="text" name="Apellidos" id="Apellidos"
                                    class="form-control {{$errors->has('Apellidos') ? 'is-invalid' : ''}}"
                                    placeholder="Ingrese los apellidos del cliente" value="{{old('Apellidos', '')}}">
                                @if ($errors->has('Apellidos'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('Apellidos') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="Telefono" class="required">Teléfono</label>
                                <input type="text" name="Telefono" id="Telefono"
                                    class="form-control {{$errors->has('Telefono') ? 'is-invalid' : ''}}"
                                    placeholder="Ingrese el teléfono del cliente"
                                    value="{{old('Telefono', '')}}">
                                @if ($errors->has('Telefono'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('Telefono') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="Correo" class="required">Correo Electrónico</label>
                                <input type="email" name="Correo" id="Correo"
                                    class="form-control {{$errors->has('Correo') ? 'is-invalid' : ''}}"
                                    placeholder="Ingrese el email del cliente" value="{{old('Correo', '')}}">
                                @if ($errors->has('Correo'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('Correo') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="Direccion" class="required">Dirección</label>
                                <input type="text" name="Direccion" id="Direccion"
                                    class="form-control {{$errors->has('Direccion') ? 'is-invalid' : ''}}"
                                    placeholder="Ingrese la dirección del cliente"
                                    value="{{old('Direccion', '')}}">
                                @if ($errors->has('Direccion'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('Direccion') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="NIT" class="required">NIT</label>
                                <input type="text" name="NIT" id="NIT"
                                    class="form-control {{$errors->has('NIT') ? 'is-invalid' : ''}}"
                                    placeholder="Ingrese el NIT del cliente"
                                    value="{{old('NIT', '')}}">
                                @if ($errors->has('NIT'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('NIT') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('clientes.index')}}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection