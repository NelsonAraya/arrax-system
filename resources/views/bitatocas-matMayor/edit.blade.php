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
                    <h4 class="card-title">Nueva Bitacora</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">   
                        <form class="form form-horizontal" method="POST" action="">
                            @csrf
                            <div class="form-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="fecha_salida">F/Salida</label>
                                                <input type="date" id="fecha_salida" class="form-control" name="fecha_salida">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="hora_salida">H/Salida</label>
                                                <input type="time" id="hora_salida" class="form-control" name="hora_salida">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="km_salida">KM/Salida</label>
                                                <input type="number" id="km_salida" class="form-control" name="km_salida">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="fecha_llegada">F/LLegada</label>
                                                <input type="date" id="fecha_llegada" class="form-control" name="fecha_llegada">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="hora_llegada">H/Llegada</label>
                                                <input type="time" id="hora_llegada" class="form-control" name="hora_llegada">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="km_llegada">KM/LLegada</label>
                                                <input type="number" id="km_llegada" class="form-control" name="km_llegada">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="direccion">Direccion</label>
                                                <input type="text" id="direccion" class="form-control" name="direccion" placeholder=" av. pedro prado 1432" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="conductor">Conductor</label>
                                                <select class="choices form-select" name="conductor" id="conductor">
                                                        <option  value="">--Seleccione--</option>  
                                                    @foreach ($usu as $row )
                                                        <option value="{{ $row->id }}"> {{ $row->soloNombre() }}</option>
                                                    @endforeach
                                                </select>
                                            </div>    
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="obac">Obac</label>
                                                <select class="choices form-select" name="obac" id="obac">
                                                        <option  value="">--Seleccione--</option>  
                                                    @foreach ($usu as $row )
                                                        <option value="{{ $row->id }}"> {{ $row->soloNombre() }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="servicio">Servicio</label>
                                                <input type="text" id="servicio" class="form-control" name="servicio" placeholder="10-0-1" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
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
