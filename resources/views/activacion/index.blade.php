@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Activacion Material Mayor</h3>
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
            @include('layouts.messages')
            <div class="row match-height">
                @foreach ($usu->matMayors as $row )
                    @if ($row->isActive())
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Unidad {{ $row->clave }}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label >PPU:</label>
                                            <p class="form-control-static">{{ $row->patente }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label >Conductor:</label>
                                            @if($row->lastActivacion()!== null )
                                                @if($row->lastActivacion()->estado=='A') 
                                                    <p class="form-control-static">  {{ $row->lastActivacion()->usuario->soloNombre() }} </P>
                                                @endif 
                                            @endif                        
                                        </div>
                                        <div class="buttons">

                                            @if($row->lastActivacion()!== null )
                                                @if($row->lastActivacion()->estado=='A') 
                                                    <form style="display: inline;">
                                                        <button type="button" class="btn btn-success" name="activar" disabled>Activar Unidad</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('activacion.update',$row->id)}}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-success" name="activar">Activar Unidad</button>
                                                    </form>
                                                @endif 
                                            @else
                                                <form action="{{ route('activacion.update',$row->id)}}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-success" name="activar">Activar Unidad</button>
                                                </form>
                                            @endif     
                                                
                                            @if($row->lastActivacion()!== null )
                                                @if($row->lastActivacion()->estado=='I') 
                                                    <form style="display: inline;">
                                                        <button type="button" class="btn btn-danger" name="desactivar" disabled>Desactivar Unidad</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('activacion.update',$row->id)}}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-danger" name="desactivar">Desactivar Unidad</button>
                                                    </form>
                                                @endif 
                                            @else
                                                <form style="display: inline;">
                                                    <button type="button" class="btn btn-danger" name="desactivar" disabled>Desactivar Unidad</button>
                                                </form>
                                            @endif 

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                @endforeach
            </div>
        </section>
    </div>

    @include('layouts.footer')

</div>
@endsection
