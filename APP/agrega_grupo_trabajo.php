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
                                        <th>Acciones</th>
                                         
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
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                  <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                                                  <button type="button" class="btn btn-info"><i class="far fa-edit" data-bs-toggle="modal" data-bs-target="#modaledit"></i></i></button>
                                    <!-- Modal Boton editar-->
                                                    <div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>

                                                                <div class="col">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-xl-8 col-md-8">
                                                                            <h3 class="mb-3 mt-3 pb-4">Informacion del grupo de trabajo</h3>
                                                                            <form class="form-floating pb-0">
                                                                              <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="Proyect Tracker">
                                                                              <label for="floatingInputValue">Nombre del proyecto</label>
                                                                            </form>
                                                                        
                                                                                <<div class="form-floating pb-4">
                                                                                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                                                    <option selected>Activo</option>
                                                                                    <option value="1">Activo</option>
                                                                                    <option value="2">Terminado</option>
                                                                                    <option value="3">Cancelado</option>
                                                                                    <option value="4">Inactivo</option>
                                                                                  </select>
                                                                                  <label for="floatingSelect">Estatus del proyecto</label>
                                                                                </div>

                                                                                <div class="card-header">
                                                                                    Integrantes
                                                                                </div>

                                                                                <div class="dataTable-container pb-3">
                                                                                    <table id="datatablesSimple" class="dataTable-table">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th>Id de usuario</th>
                                                                                            <th>Nombre</th>
                                                                                            <th>Fecha de unión</th>
                                                                                            <th>Estatus de colaborador</th>
                                                                                            <th>Acciones</th>  
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>Christian Pioquinto</td>
                                                                                                <td>15/03/2021</td>
                                                                                                <td>Jefe de proyecto</td>
                                                                                                <td class="text-center">
                                                                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                                                                      
                                                                                                      <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                                                                      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>2</td>
                                                                                                <td>Fernando Herández</td>
                                                                                                <td>17/03/2021</td>
                                                                                                <td>Colaborador</td>
                                                                                                <td class="text-center">
                                                                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                                                                      
                                                                                                      <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                                                                      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>3</td>
                                                                                                <td>Andrea García</td>
                                                                                                <td>20/03/2021</td>
                                                                                                <td>Colaborador</td>
                                                                                                <td class="text-center">
                                                                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                                                                      
                                                                                                      <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                                                                      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>4</td>
                                                                                                <td>Cesar Haziel</td>
                                                                                                <td>20/03/2021</td>
                                                                                                <td>Colaborador</td>
                                                                                                <td class="text-center">
                                                                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                                                                      
                                                                                                      <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                                                                      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>5</td>
                                                                                                <td>Emmanuel Martínez</td>
                                                                                                <td>20/03/2021</td>
                                                                                                <td>Colaborador</td>
                                                                                                <td class="text-center">
                                                                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                                                                     
                                                                                                      <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                                                                      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                                <!-- Button trigger modal -->
                                                                                <div class="pb-4">
                                                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                                                      Agregar nuevo integrante
                                                                                    </button>
                                                                                </div>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                                  <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                      <div class="modal-header">
                                                                                        <h5 class="modal-title" id="staticBackdropLabel">Agregar integrante</h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                      </div>
                                                                                      <div class="modal-body">


                                                                                        Aqui agrego formulario para agregar usuarios




                                                                                        
                                                                                      </div>
                                                                                      <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                                        <button type="button" class="btn btn-primary">Guardar cambios</button>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                <button type="button" class="btn btn-primary">Guardar cambios</button>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fernando Hernández</td>
                                            <td>PC-erdo</td>
                                            <td>9</td>
                                            <td>18/02/2021</td>
                                            <td>Activo</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                  <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                                                  <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dante Escamilla</td>
                                            <td>FisicaP</td>
                                            <td>7</td>
                                            <td>18/05/2021</td>
                                            <td>Activo</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                  <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                                                  <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ricardo Arredondo</td>
                                            <td>ATT_Service</td>
                                            <td>5</td>
                                            <td>22/12/2020</td>
                                            <td>Cancelado</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                  <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                                                  <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Christian Pioquinto</td>
                                            <td>Algorit</td>
                                            <td>5</td>
                                            <td>01/02/2021</td>
                                            <td>Terminado</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                  <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                                                  <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Felipe Lozano</td>
                                            <td>Web Coresepri</td>
                                            <td>2</td>
                                            <td>13/12/2020</td>
                                            <td>Terminado</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example" class="">
                                                  <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                                                  <button type="button" class="btn btn-info"><i class="far fa-edit"></i></i></button>
                                                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </td>
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
