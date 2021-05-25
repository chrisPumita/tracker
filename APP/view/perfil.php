<?php
$tittle = "Mi perfil";
$lugar = "Plantilla";
$nombre="";
$user_name="";
include_once "./include/header.php";
?>

    <body>
    <div class="wrapper">
        <?php include_once "./include/sidebar.php";?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include_once "./include/navbar.php";?>
            <div class="content">
                <div class="container-fluid">
                    <!-- Inicia contendo dinamico -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Mi Perfil</h4>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>ID. Usuario</label>
                                                            <input type="text" class="form-control" disabled=""  placeholder="Id_User" value="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 px-1">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control" placeholder="Username" value="michael23" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" placeholder="Company" value="Mike" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label>Apellido Paterno</label>
                                                            <input type="text" class="form-control"  placeholder="Apellido Paterno" value="Andrew">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label>Apellido Materno</label>
                                                            <input type="text" class="form-control" placeholder="Apellido Materno" value="Anderson" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-10 pl-1">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control" placeholder="Email" value="fernandohlqwe@gmail.com" >
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-md-5 pr-1">
                                                        <div class="form-group">
                                                            <label>Nueva contraseña</label>
                                                            <input type="text" class="form-control" placeholder="Nueva contraseña" value="" >
                                                        </div>
                                                    </div>
                                                    <div class=col-md-1 ></div>
                                                    <div class="col-md-5 px-1">
                                                        <div class="form-group">
                                                            <label>Confirmar Conttraseña</label>
                                                            <input type="text" class="form-control" placeholder="Confirmar Contraseña" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="card-header">
                                                    <h4 class="card-title">Redes Sociales</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Facebook</label> <input type="text" class="form-control" placeholder="https://facebook.com/" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Twitter</label> <input type="text" class="form-control" placeholder="https://twitter.com/" value="" >
                                                        </div>
                                                    </div>
                                                </div>      -->
                                                <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar Perfil</button>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-image">
                                            <img src="https://fondosmil.com/fondo/31121.jpg" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <div class="author">
                                                <a href="#">
                                                    <img class="avatar border-gray" src="./assets/img/faces/face-3.jpg">
                                                    <h5 class="title"><?php echo $nombre ?></h5>
                                                </a>
                                                <p class="description">
                                                    <?php echo $user_name ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Termina contendo dinamico -->
                </div>
            </div>
            <?php include_once "./include/footer.php"?>
        </div>
    </div>
    </body>

<?php include_once "./include/js.php"?>