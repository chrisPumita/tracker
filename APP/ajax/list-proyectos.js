// lo que sejecuta primero
$(document).ready(function () {
    console.log("Lista Proyectos");
    consultaAllProyectos();
});


    function consultaAllProyectos(){
        $.ajax({
            url: "./control/proyecto-list.php",
            type: 'POST',
            data: {
                idEmpresa: $("#idEmpresaGeneral").val()
            },
            success: function (response) {
                //COnvertimos el string a JSON
               let obj_proyect = JSON.parse(response);
                console.log(obj_proyect);
                if(obj_proyect.length>0)
                {
                    let template = construc_table_proyectos(obj_proyect);
                    let gridTemplate = constuct_grid_proyectos(obj_proyect);
                    $('#tbl-proyectos').html(template);
                    $('#grid_proyectos').html(gridTemplate);
                }
                else {
                    template =`
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">No hay proyectos que mostrar</h4>
                        <p>Aun no ha creado ningun proyecto, le sugerimos crear algún proyecto para llevar 
                        acabo su seguimiento</p>
                        <hr>
                        <a class="btn btn-primary" href="./agrega-proyecto.php" role="button">Crear Proyecto</a>
                        
                  </div>`;
                    $('#containerProyectos').html(template)
                }
            }

        });
    }

/* Obtener una jornada para convertirlo en texto  */
function getTipoJornada($jornada) {
    switch ($jornada) {
        case "1":
            return "Lunes - Viernes";
            break;
        case "2":
            return "Lunes - Sabado";
            break;
        case "3":
            return "Lunes - Domingo";
            break;
        case "4":
            return "Sabado y Domingo";
            break;
    }
}
/* Obtener un estado a través de la base de datos y convertirlo en string */
function getEstado($estado){
    switch($estado){
    case "0":
        return "Inactivo";
        break;
    case "1":
        return "Activo";
        break;
    case "2":
        return "En progreso";
        break;
    case "3":
        return "Finalizado";
        break;
    }
}

function construc_table_proyectos(obj_proyect) {
    let template = '';
    let contador = 0;
    obj_proyect.forEach(
        objProyect=>{
            contador++;
            let jornada = getTipoJornada(objProyect.tipo_jornada);
            template += `
                <tr id=${objProyect.id_proyecto}>
                    <td>${contador}</td>
                    <td>${objProyect.nombre_proyecto} </td>
                    <td>${objProyect.nombre_gt} </td>
                    <td>${objProyect.fecha_creacion}</td>
                    <td>${objProyect.fecha_inicio}</td>
                    <td>${objProyect.dias}</td>
                    <td>${jornada}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="details-proyecto.php?idProyecto=${objProyect.id_proyecto}&key=${objProyect.s_key}">
                              <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                            </a>
                          <button type="button" class="btn btn-danger btnDeleteProyectDef"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>`;
        }
    );
    return template;
}

function constuct_grid_proyectos(obj_proyect) {
    let template = '';
    obj_proyect.forEach(
        objProyect=>{
            let estado = getEstado(objProyect.estado);
            let bar = objProyect.porcent != null ?
                `
                                     <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: ${objProyect.porcent}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            ${parseInt(objProyect.porcent)}%
                                        </div>
                                    </div>
                `: `
                                     <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        No ha iniciado
                                        </div>
                                    </div>
                `;
            template +=
                `<div class="col-md-4">
                    <div class="card p-3">
                        <div class="d-flex flex-row mb-3"><img class="icon-proyecto" src="${objProyect.url_imagen}" width="70">
                            <div class="d-flex flex-column ml-2">
                                <span>${objProyect.nombre_proyecto}</span>
                                <span class="text-black-50">${objProyect.nombre_gt}</span>
                            </div>
                        </div>
                        <h6>Estado: ${estado}</h6>
                              <span class="ratings">
                                    ${bar}
                                </span>
                        <div class="d-flex justify-content-between install mt-3">
                            <span>Tiempo: ${objProyect.dias} dias</span>
                            <span class="text-primary">
                                <a href="details-proyecto.php?idProyecto=${objProyect.id_proyecto}&key=${objProyect.s_key}"><button type="button" class="btn btn-primary">Ver estatus</button></a>
                            </span>
                        </div>
                    </div>
                </div>`;
        }
    );
    return template;
}

//------------------- Eliminar Proyecto Definitivamente ---------------------------//

//-------------------seleccionando el elemento boton Eliminar subetapa  ----------//
$(document).on("click", ".btnDeleteProyectDef", function () {
    if (confirm("¿Esta seguro de que desea eliminar esta Etapa? Esta acción no se podrá revertir")){
        let elementProyecto = $(this)[0].parentElement.parentElement.parentElement;
        let idProyecto = $(elementProyecto).attr("id");
        eliminaProyecto(idProyecto);
        
    }

});

//----------------Funcion elimina Proyecto --------------//
function eliminaProyecto(idProyecto){
    $.ajax({
        url: "./control/proyecto-delete.php",
        type: 'POST',
        data: {
            idProyecto: idProyecto
        },
        success: function (mje) {
            console.log(mje)
            consultaAllProyectos();
        }
    });

}