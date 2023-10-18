<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Sistema Arrax</li>
                <li class="sidebar-item active">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>RRHH</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('rrhh.index') }}">Usuarios</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Asistencia</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item ">
                    <a href="{{ route('activacion.index') }}" class='sidebar-link'>
                        <i class="bi bi-hourglass-split"></i>
                        <span>Activacion Unidades</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="{{ route('ficha-medica.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-medical-fill"></i>
                        <span>Ficha Medica</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="{{ route('bitacora.index') }}" class='sidebar-link'>
                        <i class="bi bi-eye-fill"></i>
                        <span>Bitacoras Unidades</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-text-fill"></i>
                        <span>Partes Emergencias</span>
                    </a>
                </li>
                

                <li class="sidebar-title">Acceso Compañias</li>
               
                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Listado de Compañia</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-calendar-plus-fill"></i>
                        <span>Asistencia</span>
                    </a>
                </li>
                <li class="sidebar-title">Administracion</li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-gear-fill"></i>
                        <span>Configuracion Sistemas</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('cias.index') }}">Compañias</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('cargos.index') }}">Cargos</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('grup-sanguineo.index') }}">Grupos Sanguineos</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('mat-mayor.index') }}">Material Mayor</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('claves.index') }}">Claves Radiales</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('especialidad.index') }}">Especialidades</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bar-chart-line-fill"></i>
                        <span>Reportes Sistema</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="ui-icons-fontawesome.html">Fontawesome</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="ui-icons-dripicons.html">Dripicons</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>