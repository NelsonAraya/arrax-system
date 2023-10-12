@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>ADMIN</h3>
                    <p class="text-subtitle text-muted">Nueva Clave de Emergencia al Sistema</p>
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
                    <h4 class="card-title">Nueva Clave Emergencia</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">   
                        <form class="form form-horizontal" method="POST" action="{{ route('claves.store') }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Clave Radial</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="clave"
                                                    placeholder="10-0-1" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-geo-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Descripcion</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="descripcion"
                                                    placeholder="Fuego Estructural" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-globe2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>¿Estado Clave? </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="radio" class="btn-check" name="estado" id="estado-success" autocomplete="off" checked value="A">
                                            <label class="btn btn-outline-success" for="estado-success">Clave Activa</label>
                                            <input type="radio" class="btn-check" name="estado" id="estado-danger" autocomplete="off" value="I">
                                            <label class="btn btn-outline-danger" for="estado-danger">Clave Inactiva</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>¿Tipo Clave? </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="radio" class="btn-check" name="tipo" id="tipo-success" autocomplete="off" checked value="A">
                                            <label class="btn btn-outline-success" for="tipo-success">Acto de Servicio</label>
                                            <input type="radio" class="btn-check" name="tipo" id="tipo-danger" autocomplete="off" value="B">
                                            <label class="btn btn-outline-danger" for="tipo-danger">Bono</label>
                                        </div>
                                    </div>
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
