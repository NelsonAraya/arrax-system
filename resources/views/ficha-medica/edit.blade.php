@extends('layouts.app')

@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Ficha Medica</h3>
                    <p class="text-subtitle text-muted">Listado Usuario</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ficha Medica</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ficha Medica </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">   
                        <form class="form form-horizontal" method="POST" action="{{ route('ficha-medica.update',$usu->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="km_salida">NOMBRE</label>
                                                <p class="form-control-static">  {{ $usu->soloNombre() }} </P>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="fecha_salida">RUT</label>
                                                <p class="form-control-static">  {{ $usu->runCompleto() }} </P>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="fecha_llegada">NACIMIENTO</label>
                                                <p class="form-control-static">  {{ $usu->fecha_nacimiento }} </P>
                                            </div>        
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="">EDAD</label>
                                                <p class="form-control-static">  {{ $usu->edad() }} </P>
                                            </div>        
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="hora_llegada">DOTACION</label>
                                                <p class="form-control-static">  {{ $usu->cia->nombreCompleto() }} </P>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="direccion">DIRECCION</label>
                                                <p class="form-control-static">  {{ $usu->direccion }} </P>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="conductor">TELEFONO</label>
                                                <p class="form-control-static">  {{ $usu->telefono }} </P>
                                            </div>    
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="obac">TIPO SANGRE</label>
                                                <p class="form-control-static">  {{ $usu->sanguineo->nombre }} </P>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="servicio">CRONICO</label>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="cronico" id="cronico" value="S">
                                                    <label class="form-check-label" for="cronico">SI</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="hora_salida">ROL</label>
                                                <p class="form-control-static">  {{ $usu->rol }} </P>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="km_llegada">CARGO</label>
                                                <p class="form-control-static">  {{ $usu->cargo->nombre }} </P>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-12">
                                            <div class="form-group">
                                                <label for="peso">PESO</label>
                                                <input type="text" id="peso" class="form-control" name="peso" 
                                                value="@if($usu->ficha != null ) {{ $usu->ficha->peso }}  @endif"
                                                autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-12">
                                            <div class="form-group">
                                                <label for="talla">TALLA</label>
                                                <input type="text" id="talla" class="form-control" name="talla" 
                                                value="@if($usu->ficha != null ) {{ $usu->ficha->talla }}  @endif"
                                                autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-12">
                                            <div class="form-group">
                                                <label for="imc">IMC</label>
                                                <input type="text" id="imc" class="form-control" name="imc"
                                                value="@if($usu->ficha != null ) {{ $usu->ficha->imc }}  @endif"
                                                autocomplete="off">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="contacto_1">CONTACTO 1</label>
                                                <input type="text" id="contacto_1" class="form-control" name="contacto_1" 
                                                value="@if($usu->ficha != null ) {{ $usu->ficha->contacto1 }}  @endif"
                                                autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="fono_1">FONO 1</label>
                                                <input type="text" id="fono_1" class="form-control" name="fono_1" 
                                                value="@if($usu->ficha != null ) {{ $usu->ficha->fono1 }}  @endif"
                                                autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="contacto_2">CONTACTO 2</label>
                                                <input type="text" id="contacto_2" class="form-control" name="contacto_2" 
                                                value="@if($usu->ficha != null ) {{ $usu->ficha->contacto2 }}  @endif"
                                                autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <div class="form-group">
                                                <label for="fono_2">FONO 2</label>
                                                <input type="text" id="fono_2" class="form-control" name="fono_2" 
                                                value="@if($usu->ficha != null ) {{ $usu->ficha->fono2 }}  @endif"
                                                autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="enfermedades">ENFERMEDADES</label>
                                                <textarea class="form-control" id="enfermedades" name="enfermedades" rows="3" style="overflow:auto;resize:none">@if($usu->ficha != null ) {{ $usu->ficha->enfermedades }}  @endif</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="alergias">ALERGIA</label>
                                                <textarea class="form-control" id="alergias" name="alergias" rows="3" style="overflow:auto;resize:none">@if($usu->ficha != null ) {{ $usu->ficha->alergias }}  @endif</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="tratamientos">TRATAMIENTOS</label>
                                                <textarea class="form-control" id="tratamientos" name="tratamientos" rows="3" style="overflow:auto;resize:none">@if($usu->ficha != null ) {{ $usu->ficha->tratamientos }}  @endif</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="quirurgicos">ANTECEDENTES QUIRURGICO</label>
                                                <textarea class="form-control" id="quirurgicos" name="quirurgicos" rows="3" style="overflow:auto;resize:none">@if($usu->ficha != null ) {{ $usu->ficha->quirurgicos }} @endif</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
