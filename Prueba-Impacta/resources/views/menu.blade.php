<div class="header">
    <div class="image">
        <a href="/"><img src="{{ asset('/img/logos/impacta.svg') }}" alt="Descripción de la imagen"></a>
    </div>
    <nav class="menu-header">
        <ul>
            <li><a href="/nosotros">Nosotros</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#">Proyectos</a></li>
            <li><a href="#footer">Contacto</a></li>
            <!-- Cambiado de "Usuarios Registrados" a "Dashboard" -->
            <li><a href="{{ route('dashboard') }}">Usuarios Registrados</a></li>
        </ul>
    </nav>
    <div class="redes">
        <img src="{{ asset('/img/logos/instagram.svg') }}" alt="Descripción de la imagen" class="menu-icon">
        <img src="{{ asset('/img/logos/facebook.svg') }}" alt="Descripción de la imagen" class="menu-icon">
    </div>
</div>
