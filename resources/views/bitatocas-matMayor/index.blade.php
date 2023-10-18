@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Bitacoras</h3>
                    <p class="text-subtitle text-muted">Bitacoras Material Mayor</p>
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
                    @include('layouts.messages')
                </div>
                <div class="card-body">
                    <div class="table-responsive"> 
                        <table class="table table-striped" id="tbl_materialMayor">
                            <thead>
                                <tr>
                                    <th>Patente</th>
                                    <th>Clave</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Cia Asignada</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $resultados = $cia->matMayor->merge($usu->matMayors);
                                @endphp
                                @foreach ($resultados->unique('id') as $row)
                                    @if ($row->isActive())
                                    <tr>
                                        <td> {{ $row->patente }} </td>
                                        <td> {{ $row->clave }} </td>
                                        <td> {{ $row->modelo }} </td>
                                        <td> {{ $row->marca }} </td>
                                        <td> {{ $row->cia->nombreCompleto() }} </td>
                                        <td>
                                            <a href="{{ route('bitacora.edit',$row->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="{{ route('bitacora.show',$row->id) }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                        </td>
                                        </td>
                                    </tr>
                                    @endif
                                    
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
@section('js')
<script>
$(document).ready(function() {
  $('#tbl_materialMayor').DataTable({
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