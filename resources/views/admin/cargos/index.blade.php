@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>ADMIN</h3>
                    <p class="text-subtitle text-muted">Listado de Cargos del Sistema</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cargo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    @include('layouts.messages')
                    <a href="{{ route('cargos.create') }}" class="btn btn-primary">Nuevo Cargo</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive"> 
                        <table class="table table-striped" id="tbl_cargos">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cargo as $row )
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->nombre }}</td>
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
@section('js')
<script>
$(document).ready(function() {
  $('#tbl_cargos').DataTable({
    language: {
        url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
    }
  });
});
</script>
@endsection