<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <img src="./assets/img/logo.png" width="100%" class="rounded mx-auto d-block" alt="">
            <div class="sb-sidenav-menu-heading">INICIO</div>
            <a class="nav-link" href="template/index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                Inicio
            </a>
            <div class="sb-sidenav-menu-heading">PRINCIPAL</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#menuProyectos" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-project-diagram"></i></div>
                Proyectos
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="menuProyectos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="#">Nuevo Proyecto</a>
                    <a class="nav-link" href="#">Ver todos</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#menuUsuarios" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Usuarios
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="menuUsuarios" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="./agrega-usuario.php">Nuevo Usuario</a>
                    <a class="nav-link" href="./usuarios.php">Ver todos</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#menuGpo" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                Grupos de trabajo
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="menuGpo" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="#">Nuevo Grupo</a>
                    <a class="nav-link" href="#">Ver todos</a>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">General</div>
            <a class="nav-link" href="template/charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Configuración
            </a>
            <a class="nav-link" href="template/tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Cuenta
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Estas logeado como:</div>
        PEOPLE_NAME
        <input type="hidden" id="idEmpresaGeneral" value="653561609">
    </div>
</nav>