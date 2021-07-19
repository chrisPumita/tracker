<?php $plantilla = "Plantilla"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "./include/header.php"?>
</head>
<body class="sb-nav-fixed">

<?php include_once "./include/navbar.php"?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include_once "./include/sidenav.php"?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- incuir los elementos del la vista para cada cosa-->
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Grupos de trabajo</h1>

                    <div class="container mt-4"> 
                        <div class="row">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Crear nuevo grupo de trabajo
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nuevo grupo de trabajo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>


                                      <div class="modal-body">
                                        <div class="form-floating mb-3">
                                              <input type="text" class="form-control" id="floatingInput" placeholder="Nombre del Proyecto">
                                              <label for="floatingInput">Nombre del proyecto</label>
                                            </div>
                                      </div>


                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Crear</button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Mis grupos de trabajo
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>Jefe de proyecto</th>
                                        <th>Nombre del proyecto</th>
                                        <th>Cantidad de miembros</th>
                                        <th>Fecha de creación</th>
                                        <th>Estatus</th> 
                                         
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Jefe de proyecto</th>
                                        <th>Nombre del proyecto</th>
                                        <th>Cantidad de miembros</th>
                                        <th>Fecha de creación</th>
                                        <th>Estatus</th> 
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>Christian Pioquinto</td>
                                        <td>Proyect Tracker</td>
                                        <td>5</td>
                                        <td>15/05/2021</td>
                                        <td>Activo</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                              <button type="button" class="btn btn-outline-primary">Ver</button>
                                              <button type="button" class="btn btn-outline-primary">Editar</button>
                                              <button type="button" class="btn btn-outline-primary">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fernando Hernández</td>
                                        <td>PC-erdo</td>
                                        <td>9</td>
                                        <td>18/02/2021</td>
                                        <td>Activo</td>
                                    </tr>
                                    <tr>
                                        <td>Dante Escamilla</td>
                                        <td>FisicaP</td>
                                        <td>7</td>
                                        <td>18/05/2021</td>
                                        <td>Activo</td>
                                    </tr>
                                    <tr>
                                        <td>Ricardo Arredondo</td>
                                        <td>ATT_Service</td>
                                        <td>5</td>
                                        <td>22/12/2020</td>
                                        <td>Cancelado</td>
                                    </tr>
                                    <tr>
                                        <td>Christian Pioquinto</td>
                                        <td>Algorit</td>
                                        <td>5</td>
                                        <td>01/02/2021</td>
                                        <td>Terminado</td>
                                    </tr>
                                    <tr>
                                        <td>Felipe Lozano</td>
                                        <td>Web Coresepri</td>
                                        <td>2</td>
                                        <td>13/12/2020</td>
                                        <td>Terminado</td>
                                    </tr>
                                    <tr>
                                        <td>Daniela Acevedo</td>
                                        <td>Digitex</td>
                                        <td>15</td>
                                        <td>18/07/2020</td>
                                        <td>Terminado</td>
                                    </tr>
                                    <tr>
                                        <td>Jorge Pacheco</td>
                                        <td>Astra</td>
                                        <td>5</td>
                                        <td>18/07/2020</td>
                                        <td>Terminado</td>
                                    </tr>
                                    <tr>
                                        <td>Erick Arcos</td>
                                        <td>Astra</td>
                                        <td>4</td>
                                        <td>18/07/2020</td>
                                        <td>Terminado</td>
                                    </tr>
                                    <tr>
                                        <td>Emmanuel Martínez</td>
                                        <td>Casa Luna</td>
                                        <td>3</td>
                                        <td>15/09/2020</td>
                                        <td>Terminado</td>
                                    </tr>
                                    <tr>
                                        <td>Jorge Quintero</td>
                                        <td>Biciclet-As</td>
                                        <td>6</td>
                                        <td>09/11/2020</td>
                                        <td>Cancelado</td>
                                    </tr>
                                    <tr>
                                        <td>Diego Rivera</td>
                                        <td>Epic Store</td>
                                        <td>3</td>
                                        <td>19/07/2021</td>
                                        <td>Activo</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            <!-- incuir los elementos del la vista para cada cosa-->
        </main>
<?php include_once "./include/footer.php"?>
    </div>
</div>

<?php include_once "./include/js.php"?>
</body>
</html>
