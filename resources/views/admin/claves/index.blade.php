@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>ADMIN</h3>
                    <p class="text-subtitle text-muted">Listado de Claves de Emergencia del Sistema</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Claves Emergencia</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    @include('layouts.messages')
                    <a href="{{ route('claves.create') }}" class="btn btn-primary">Nueva Clave</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive"> 
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Clave</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clav as $row )
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->clave }}</td>
                                        <td>{{ $row->descripcion }}</td>
                                        <td>
                                            @if ($row->estado =='A')
                                                <span class="badge bg-success">Activa</span> 
                                            @else
                                                <span class="badge bg-danger">Inactiva</span>  
                                            @endif 
                                        </td>
                                        <td>
                                            @if ($row->tipo =='A')
                                                <span class="badge bg-success">Servicio</span> 
                                            @else
                                                <span class="badge bg-danger">Bono</span>  
                                            @endif 
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
