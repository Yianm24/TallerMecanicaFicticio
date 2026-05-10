<header class="mobile-topbar">
    <div class="brand">
        <div class="brand__logo">
            <img class="brand__logo-img"
                src="https://images.unsplash.com/photo-1621747085159-6a69cfca0c19?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjdXRlJTIwc2t1bGwlMjBjYXJ0b29uJTIwaWNvbiUyMGxvZ298ZW58MXx8fHwxNzc4Mjg3MjA4fDA&ixlib=rb-4.1.0&q=80&w=1080"
                alt="Logo Las Roscas" />
        </div>
        <div class="brand__text">
            <div class="brand__name">Las Roscas</div>
            <div class="brand__tag">Taller Mecánico</div>
        </div>
    </div>

    <label class="icon-btn" for="nav-toggle" aria-label="Abrir/Cerrar menú">
        <!-- menu icon -->
        <svg class="icon icon--menu" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
        <!-- close icon -->
        <svg class="icon icon--close" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M18 6 6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
    </label>
</header>

<!-- Mobile overlay -->
<label class="overlay" for="nav-toggle" aria-hidden="true"></label>

<!-- Sidebar -->
<aside class="sidebar" aria-label="Navegación principal">
    <div class="sidebar__brand">
        <div class="brand">
            <div class="brand__logo brand__logo--lg">
                <img class="brand__logo-img"
                    src="https://images.unsplash.com/photo-1621747085159-6a69cfca0c19?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjdXRlJTIwc2t1bGwlMjBjYXJ0b29uJTIwaWNvbiUyMGxvZ298ZW58MXx8fHwxNzc4Mjg3MjA4fDA&ixlib=rb-4.1.0&q=80&w=1080"
                    alt="Logo Las Roscas" />
            </div>
            <div class="brand__text">
                <div class="brand__name brand__name--lg">Las Roscas</div>
                <div class="brand__tag">Taller Mecánico</div>
            </div>
        </div>
    </div>

    <div class="sidebar__mobile-title">Menú Principal</div>

    <?php $paginaActual = basename($_SERVER['PHP_SELF']); ?>
    <nav class="nav">
        <a class="nav__item" href="?url=dashboard">
            <span class="nav__icon" aria-hidden="true">
                <!-- layout-dashboard -->
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M3 3h7v9H3V3Zm11 0h7v5h-7V3ZM14 12h7v9h-7v-9ZM3 16h7v5H3v-5Z" stroke="currentColor"
                        stroke-width="2" stroke-linejoin="round" />
                </svg>
            </span>
            <span class="nav__label">Inicio</span>
        </a>
        <a class="nav__item" href="?url=clientes">
            <span class="nav__icon" aria-hidden="true">
                <!-- users -->
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                    <path d="M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" stroke="currentColor" stroke-width="2" />
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </span>
            <span class="nav__label">Clientes</span>
        </a>
        <a class="nav__item" href="?url=repuesto">
            <span class="nav__icon" aria-hidden="true">
                <!-- wrench -->
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M14.7 6.3a4 4 0 0 0-5.66 5.66L3 18l3 3 6.04-6.04a4 4 0 0 0 5.66-5.66l-3 3-3-3 3-3Z"
                        stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                </svg>
            </span>
            <span class="nav__label">Repuestos</span>
        </a>
        <a class="nav__item" href="?url=vehiculo">
            <span class="nav__icon" aria-hidden="true">
                <!-- car -->
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M3 13l2-5a2 2 0 0 1 2-1h10a2 2 0 0 1 2 1l2 5" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                    <path d="M5 13v6M19 13v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M7 19h10" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M7.5 16.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM16.5 16.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"
                        fill="currentColor" />
                </svg>
            </span>
            <span class="nav__label">Vehículos</span>
        </a>
       
    </nav>

    <div class="sidebar__footer">
        <div class="user">
            <div class="user__avatar">AD</div>
            <div class="user__meta">
                <div class="user__name">Admin Principal</div>
                <div class="user__email">admin@lasroscas.com</div>
            </div>
        </div>

        <a class="logout" href="?url=logout">
            <span class="logout__icon" aria-hidden="true">
                <!-- log-out -->
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                    <path d="M16 17l5-5-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M21 12H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </span>
            <span class="logout__label">Cerrar Sesión</span>
        </a>
    </div>
</aside>