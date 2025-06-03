<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ejercicio') ? 'active' : '' }}"
                        href="{{ route('ejercicio') }}">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        Sobre Nosotros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('proyecto') ? 'active' : '' }}"
                        href="{{ route('proyecto') }}">
                        Proyecto
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>