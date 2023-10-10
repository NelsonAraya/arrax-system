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

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-cash-stack"></i>
                        <span>Finanzas</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="extra-component-avatar.html">Avatar</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-sweetalert.html">Sweet Alert</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-toastify.html">Toastify</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-rating.html">Rating</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-divider.html">Divider</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Acceso Compañias</li>
                
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-cash-coin"></i>
                        <span>Boletas Electronicas</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="form-element-input.html">Input</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-input-group.html">Input Group</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-select.html">Select</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-radio.html">Radio</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-checkbox.html">Checkbox</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-textarea.html">Textarea</a>
                        </li>
                    </ul>
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

                <li class="sidebar-title">Soporte Tecnico</li>

                <li class="sidebar-item  ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-ticket-fill"></i>
                        <span>Generar Ticket</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-headset"></i>
                        <span>Chat Soporte</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>