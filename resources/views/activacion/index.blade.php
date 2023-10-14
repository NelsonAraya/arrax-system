@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Activacion</h3>
                    <p class="text-subtitle text-muted">Activacion de Material Mayor</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Activacion</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row match-height">
                @foreach ($usu->matMayors as $row )
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Simple List Group</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    The most basic list group is simply an unordered list with list
                                    items, and the proper classes. Build upon it with the options that
                                    follow, or your own CSS as needed.
                                </p>
                                <ul class="list-group">
                                    <li class="list-group-item active">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">chocolate cheesecake candy</li>
                                    <li class="list-group-item">Oat cake icing pastry pie carrot</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    @include('layouts.footer')

</div>
@endsection
@section('js')
<script>
$(document).ready(function() {
  $('#tbl_rrhh').DataTable({
    language: {
        url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
    }
  });
});
</script>
@endsection