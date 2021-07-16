// lo que sejecuta primero
$(document).ready(function () {
    console.log("Lista Usuarios");
    consultaAllUsuarios();

    function consultaAllUsuarios() {
        //Funcion, Carga
            //-------------- AJAX pedira la info de los datos se ejecuta cuando entra inicio
            $.ajax({
                url: "./control/usuario-list.php",
                type: 'POST',
                data: {
                    idUser: 0,
                    idEmpresa: $("#idEmpresaGeneral").val()
                },
                success: function (response) {
                    //COnvertimos el string a JSON
                   let obj_users = JSON.parse(response);
                    console.log(obj_users);
                    let template ='';
                    let contador = 0;
                    obj_users.forEach(
                        objUser=>{
                            contador++;
                            let nivelAcceso = getNivelAcceso(objUser.nivel_acceso);
                            template += `<tr>
                                        <td>${contador}</td>
                                        <td>${objUser.nombre} ${objUser.apaterno} ${objUser.amaterno}</td>
                                        <td>${objUser.correo}</td>
                                        <td>${objUser.user_name}</td>
                                        <td>${nivelAcceso}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                              <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                                              <button type="button" class="btn btn-warning"><i class="fas fa-user-clock"></i></button>
                                              <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </td>
                                        </tr>`;
                        }
                    );
                    $('#tbl-usuarios').html(template);
                }
            });
    }
});


function getNivelAcceso($nivel) {
    switch ($nivel) {
        case "0":
            return "ADMINISTRADOR";
            break;
        case "1":
            return "EDITOR";
            break;
        case "2":
            return "LECTOR";
            break;
       
    }
}
/*




                    //Utilizamos los objetos a y los tratamos en una plantilla en tbody
                    let template ='';
                    let template_page = '';
                    let cont = 0;
                    obj_users.forEach(
                        obj_users => {
                            cont ++;
                            template += `
                    <tr user_id="${obj_users.no_empleado}">
                        <td>${cont}</td>
                        <td>${obj_users.no_empleado}</td>
                        <td>${obj_users.nombre + ' ' + obj_users.apaterno + ' ' + obj_users.amaterno}</td>
                        <td>${obj_users.telefono}</td>
                        <td>${obj_users.correo_user}</td>
                        <td>${obj_users.puesto}</td>
                        <td><div class="spinner-grow text-${obj_users.estatus == 1 ? "success":"secondary"}" role="status"><span class="sr-only"></span></div>${obj_users.estatus == 1 ? " Activa":" Inactiva"}</td>
                        <td>
                        <div class="dropdown" value_estatus="${obj_users.estatus}">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Opciones
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a href="user-edit.php?id=${obj_users.no_empleado}"><button id="btn-edit${obj_users.no_empleado} "class="user-edit  dropdown-item" type="button">Editar</button></a>
                                <button id="btn-reset${obj_users.no_empleado} "class="user-reset dropdown-item" type="button">Retablecer Contraseña</button>
                                <button id="btn-block${obj_users.no_empleado} "class="user-dell dropdown-item" type="button btn btn-danger">${obj_users.estatus == 1 ? "Bloquear":"Activar"}</button>
                                <button id="btn-delete${obj_users.no_empleado} "class="user-delete dropdown-item bg-alert" type="button">Eliminar</button>
                            </div>
                          </div>
                        </td>
                    </tr>
                    `
                        }
                    );
                    if (obj_users.length <10) {
                        if (obj_users.length>0) {
                            template_page += `
                    <nav aria-label="Page navigation example">
                    <ul  class="pagination justify-content-center">

                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item disabled">
                    <a class="page-link" href="#">Siguiente</a>
                    </li>
                  </ul>
                  </nav>
                    `;

                        }
                        else{
                            template_page += `
                    <div class="container py-3">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Oops! Sin usuarios</strong> Aun no hay Usuarios, agrega uno.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                  </div>
                    `;
                        }
                        $('#paginator').html(template_page);
                    }
                    //Selecciono el elemento donde voy a pintar el template
                    $('#contador-rows').html("Encontramos "+obj_users.length+" usuarios en el sistema");
                    $('#users').html(template);
**/