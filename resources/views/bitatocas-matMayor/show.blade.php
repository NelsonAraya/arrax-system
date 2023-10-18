@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Bitacoras</h3>
                    <p class="text-subtitle text-muted">Bitacoras de Material Mayor</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bitacoras</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Historial Bitacora</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">   
                        <div class="table-responsive"> 
                            <table class="table table-striped" id="tbl_bitacora">
                                <thead>
                                    <tr>
                                        <th>F/Salida</th>
                                        <th>F/Llegada</th>
                                        <th>H/Salida</th>
                                        <th>H/Llegada</th>
                                        <th>KM/Salida</th>
                                        <th>KM/Llegada</th>
                                        <th>Conductor</th>
                                        <th>Obac</th>
                                        <th>Direccion</th>
                                        <th>Servicio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($mat->bitacoras as $row)
                                    <tr>
                                        <td> {{ $row->fecha_salida }} </td>
                                        <td> {{ $row->fecha_llegada }} </td>
                                        <td> {{ $row->hora_salida }} </td>
                                        <td> {{ $row->hora_llegada }} </td>
                                        <td> {{ $row->kmsalida }} </td>
                                        <td> {{ $row->kmllegada }} </td>
                                        <td> {{ $row->conductor->soloNombre() }} </td>
                                        <td> {{ $row->obac->soloNombre() }} </td>
                                        <td> {{ $row->direccion }} </td>
                                        <td> {{ $row->servicio }} </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')

</div>
@endsection
@section('js')
<script>
$(document).ready(function() {
  $('#tbl_bitacora').DataTable({
    language: {
        url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
    },
    ordering: false,
    paging: false,
    searching: false
  });
});
</script>
@endsection