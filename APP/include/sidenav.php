<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a href="./home.php">
                <img src="./assets/img/logo.png" width="100%" class="rounded mx-auto d-block" alt="">
            </a>
            <a class="nav-link" href="./perfil_empresa.php">
                <div class="sb-nav-link-icon"><i class="far fa-building"></i></div>
                <?php echo $_SESSION['empresaName']; ?>
            </a>
            <div class="sb-sidenav-menu-heading">INICIO</div>
            <a class="nav-link" href="./home.php">
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
                    <a class="nav-link" href="./agrega-proyecto.php">Nuevo Proyecto</a>
                    <a class="nav-link" href="./proyectos.php">Ver todos</a>
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

                    <a class="nav-link" href="./agrega_grupo_trabajo.php">Grupos de trabajo</a>
                   <!-- <a class="nav-link" href="./grupos_trabajo.php">Ver todos</a> -->
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">General</div>
            <a class="nav-link" href="./tipo_cuenta.php">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Cuenta
            </a>


            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#menuPerfil" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Cuenta
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="menuPerfil" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="./perfil_usuario.php">Perfil de usuario</a>
                    <a class="nav-link" href="./perfil_empresa.php">Perfil de empresa</a>
                </nav>
            </div>





        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Estas logeado como:</div>
        <?php echo $_SESSION['user_name']; ?>
        <input type="hidden" id="idEmpresaGeneral" value="<?php echo $_SESSION['id_empresa']; ?>">
    </div>
</nav>