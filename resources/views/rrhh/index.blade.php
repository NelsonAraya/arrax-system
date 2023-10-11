@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>RRHH</h3>
                    <p class="text-subtitle text-muted">Listado de Usuarios Sistema</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">rrhh</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    @include('layouts.messages')
                    <a href="{{ route('rrhh.create') }}" class="btn btn-primary">Nuevo Usuario</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive"> 
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Run</th>
                                    <th>Nombre</th>
                                    <th>Dotacion</th>
                                    <th>Cargo</th>
                                    <th>Estado</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($usu as $row)
                                <tr>
                                    <td> {{ $row->runCompleto() }} </td>
                                    <td> {{ $row->soloNombre() }} </td>
                                    <td> {{ $row->cia->nombreCompleto() }} </td>
                                    <td> {{ $row->cargo->nombre }} </td>
                                    <td>
                                        @if ($row->estado =='A')
                                        <span class="badge bg-success">Activo</span> 
                                        @else
                                        <span class="badge bg-danger">Inactivo</span>  
                                        @endif 
                                    </td>
                                    <td>
                                        <a href="{{ route('rrhh.edit',$row->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

        </section>
    </div>

    @include('layouts.footer')

</div>
@endsection
