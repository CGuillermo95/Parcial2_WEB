@extends('inicio')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Clientes</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Nuevo Cliente</a>

                        <table class="table table-bordered" id="cliente_table">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Teléfono</th>
                                    <th>Correo Electrónico</th>
                                    <th>Dirección</th>
                                    <th>NIT</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cliente as $Cliente)
                                <tr>
                                    <td>{{$Cliente->Nombres}}</td>
                                    <td>{{$Cliente->Apellidos}}</td>
                                    <td>{{$Cliente->Telefono}}</td>
                                    <td>{{$Cliente->Correo}}</td>
                                    <td>{{$Cliente->Direccion}}</td>
                                    <td>{{$Cliente->NIT}}</td>
                                    <td>

                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <form method="get" action="{{ route('clientes.edit', $Cliente->id) }}">
                                                <button type="submit" class="btn btn-outline-primary btn-xs"></a><i
                                                        class="fas fa-edit"></i></button>
                                            </form>
                                        </div>

                                        <form action="{{ route('clientes.destroy', $Cliente->id) }}" id="delete_form"
                                            method="POST"
                                            onsubmit="return confirm('Esta seguro que desea eliminar el registro?')"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-outline-danger btn-xs"><i
                                                    class="fas solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#cliente_table').DataTable();
    });
</script>
@endsection