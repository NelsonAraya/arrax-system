@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>ADMIN</h3>
                    <p class="text-subtitle text-muted">Nuevo Material Mayor al Sistema</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Material Mayor</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nuevo Material Mayor</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">   
                        <form class="form form-horizontal" method="POST" action="{{ route('mat-mayor.store') }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>patente</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="patente"
                                                    placeholder="LDDT-76" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-key"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Clave</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="clave"
                                                    placeholder="B5" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-shield-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Marca</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="marca"
                                                    placeholder="kia" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-gear-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Modelo</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="modelo"
                                                    placeholder="sportage" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-megaphone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Año</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" class="form-control" name="anio"
                                                    placeholder="2023" autocomplete="off" min="1900" max="3000" step="1">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-patch-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Compañia</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                           <select class="form-select" name="cia">
                                            <option value="">-- Seleccione --</option>
                                                @foreach ($cia as $key => $value )
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Orden Listado</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                           <select class="form-select" name="orden">
                                            <option value="">-- Seleccione --</option>
                                            <option value="1">PRIMERO</option>
                                            <option value="2">SEGUNDO</option>
                                            <option value="3">TERCERO</option>
                                            <option value="4">CUARTO</option>
                                           </select>
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
