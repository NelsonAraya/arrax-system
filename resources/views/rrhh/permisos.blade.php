@extends('layouts.app')

@section('css')
<style>
/* CSS personalizado para aumentar el tamaño del checkbox */
.form-check-input[type="checkbox"] {
    width: 50px; /* Establece el ancho del checkbox */
    height: 30px; /* Establece la altura del checkbox */
}

/* Aumenta el tamaño de la etiqueta del checkbox */
.form-check-label {
    font-size: 20px; /* Establece el tamaño de fuente de la etiqueta */
    margin-left: 10px; /* Ajusta el margen izquierdo para separar el checkbox de la etiqueta */
}

</style>
@endsection

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>RRHH</h3>
                    <p class="text-subtitle text-muted">Permisos de Sistema</p>
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
                    <h4 class="card-title">Permisos Asistema Asignado a : {{ $usu->soloNombre() }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="POST" action="{{ route('rrhh.permisos-update',$usu->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                   @foreach ($rol as $row )
                                        @php   $flag=false;  @endphp
                                    @foreach($usu->roles as $rr)
                                        @if($row->id == $rr->id)
                                            @php 
                                                $flag=true;
                                                break;
                                            @endphp
                                        @else 
                                            @php 
                                                $flag=false;
                                            @endphp   
                                        @endif
                                    @endforeach 
                                   <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="roles[]" id="_{{ $row->id }}" value="{{ $row->id }}" @if($flag) checked="checked" @endif>
                                        <label class="form-check-label" for="_{{ $row->id }}">{{ $row->descripcion }}</label>
                                    </div>
                                   @endforeach
                                    
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Guardar</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')

</div>
@endsection
