@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>RRHH</h3>
                    <p class="text-subtitle text-muted">Nuevo Usuario al Sistema</p>
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
                    <h4 class="card-title">Nuevo Usuario</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="POST" action="{{ route('rrhh.store') }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Run</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="run" autocomplete="off"
                                                    placeholder="12345678-8">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Rol</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="rol" autocomplete="off"
                                                    placeholder="Rol">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nombre</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="nombres" autocomplete="off"
                                                    placeholder="Nombres">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Apellido Paterno</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="paterno" autocomplete="off"
                                                    placeholder="A. paterno">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Apellido Materno</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="materno" autocomplete="off"
                                                    placeholder="A. materno">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Fecha Nacimiento</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="date" class="form-control" name="nacimiento" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="email" class="form-control" name="mail" autocomplete="off"
                                                    placeholder="mail@tuemail.cl">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Telefono</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" class="form-control" name="fono" autocomplete="off"
                                                    placeholder="99425874">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-telephone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Direccion</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="direccion" autocomplete="off"
                                                    placeholder="av. la tirana 1234">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-house"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Dotaccion </label>
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
                                        <label>Cargo Institucional </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                           <select class="form-select" name="cargo">
                                            <option value="">-- Seleccione --</option>
                                                @foreach ($cargo as $key => $value )
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Grupo Sanguineo </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                           <select class="form-select" name="sanguineo">
                                            <option value="">-- Seleccione --</option>
                                                @foreach ($sanguineo as $key => $value )
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Fecha Ingreso a la Institucion</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="date" class="form-control" name="fecha_ingreso" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Fecha licencia Conducir</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="date" class="form-control" name="fecha_licencia" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>¿Operativo? </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="radio" class="btn-check" name="operativo" id="operativo-success" autocomplete="off" checked="" value="S">
                                            <label class="btn btn-outline-success" for="operativo-success">Si, es Operativo</label>
                                            <input type="radio" class="btn-check" name="operativo" id="operativo-danger" autocomplete="off" value="N">
                                            <label class="btn btn-outline-danger" for="operativo-danger">No, es operativo</label>
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
