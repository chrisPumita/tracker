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
                                            <button type="button" class="btn btn-danger btnDeleteUser"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                        </tr>`;
                        }
                    );
                    let templateInput = construct_input_GTU(obj_users);
                    $('#tbl-usuarios').html(template);
                    $("#userGTU").html(templateInput);
                }
            });
    }
});
function construct_input_GTU(obj_users){
    template='';
    obj_users.forEach(
        objUser=>{
                template +=`
                <option value="${objUser.id_usuario}">${objUser.nombre} ${objUser.apaterno} ${objUser.amaterno} </option>
                `;
        }
    );
    return template;
    }

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
//-------------------seleccionando el elemento boton Eliminar usuario  ----------//
$(document).on("click", ".btnDeleteUser", function () {
    if (confirm("¿Esta seguro de que desea eliminar esta subetapa? Esta acción no se podrá revertir")){
        let elementoUserSelect = $(this)[0].parentElement.parentElement.parentElement;
/*        let idSubEtapa = $(elementoSubEtapaSelect).attr("idSubEtapa");
        eliminaSubEtapa(idSubEtapa);*/
    }
});

