/** Carga documento para consultar las etapas y los detalles de un proyecto**/

$(document).ready(function () {
    console.log("Lista Proyectos");
    consultaDetailsProyecto();
    consultaEtapasProyecto();
});
//Contruye el Grid para el proyecto en especifico
function consultaDetailsProyecto(){
    $.ajax({
        url: "./control/proyecto-detalles.php",
        type: 'POST',
        data: {
            idProyecto: $("#idProyecto").val(),
            key: $("#key").val(),
            idEmpresa: $("#idEmpresaGeneral").val(),
        },
        success: function (response) {
            //COnvertimos el string a JSON
            console.log(response);
            let obj_proyect = JSON.parse(response);
            if(obj_proyect.length>0){
            console.log(obj_proyect);
            let proyecto = obj_proyect[0];
            let templateBoton =`
                                <a href="../consulta/public-view-proyecto/?noSeguimiento=${proyecto.no_seguimiento}">
                                <button type="button" class="btn btn-primary">
                                    Ver
                                </button></a>`;
            $("#btnVistaPublica").html(templateBoton);
            constuct_grid_proyectos(proyecto);
            } else location.href="./proyectos.php";
        }

    });
}
//Construye la tabla con las etapas y subetapas de cada proyecto
function consultaEtapasProyecto(){
    $.ajax({
        url: "./control/etapa-detalles.php",
        type: 'POST',
        data: {
            idProyecto: $("#idProyecto").val()
        },
        success: function (response) {
            //COnvertimos el string a JSON
            let obj_proyect = JSON.parse(response);
            console.log(obj_proyect);
                let etapas=constructEtapas(obj_proyect);
                $("#tbl-etapa").html(etapas);


        }

    });
}


// FUNCION PARA CREAR EL GRID DEL PROYECTO
function constuct_grid_proyectos(obj_proyect) {
    $("#nombre_proyecto").html(obj_proyect.nombre_proyecto);
    $("#idProyectoInsert").val(obj_proyect.id_proyecto);
    let template =
                `<div class="col">
                    <div class="card p-3">
                        <div class="row justify-content-center align-items-center proyecto-perfil">
                            <div class="col-2 text-center">
                                <div class="d-flex flex-row mb-3"><img class="icon-proyecto" src="${obj_proyect.url_imagen}" height="150">
                                    <div class="d-flex flex-column ml-2">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-10">
                                <span>${obj_proyect.nombre_proyecto}</span> (
                                <span class="text-black-50">${obj_proyect.categoriaName}</span>)<br>
                                <span class="text-black-50">Equipo: ${obj_proyect.nombre_gt}</span> 
                                <span class="ratings">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: ${parseInt(obj_proyect.porcent)}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            ${parseInt(obj_proyect.porcent)}%
                                        </div>
                                    </div>
                                </span>
                                <h6>Fecha de creacion: ${obj_proyect.fecha_creacion}</h6>
                                <h5>No. Seguimiento: ${obj_proyect.no_seguimiento}</h5>
                                <div class="d-flex justify-content-between install mt-3">
                                    <span>Tiempo: ${obj_proyect.dias} dias</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
                $("#grd-proyecto").html(template);
}

// FUNCION PARA CREAR LAS TABLAS DE ETAPA DE EL PROYECTO SELECCIONADO
function constructEtapas(obj_proyect){
    let template='';
    obj_proyect.forEach(
        objProyect=>{
            let subetapas = objProyect[0];
            let anuncio =  objProyect[1][0].porc!= null ? `Sub etapas completadas: ${objProyect[1][0].terminado} de ${objProyect[1][0].suma}`: "";
            let barraShow =  objProyect[1][0].porc!= null ? `   <div class="progress">
                                                                    <div class="progress-bar  progress-bar-striped bg-info" role="progressbar" style="width: ${objProyect[1][0].porc}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">${parseInt(objProyect[1][0].porc)}%</div>
                                                                </div>`
                                                                :`<h3>Aqui se vera el avance de la etapa</h3>`;

            template += `
            <!-- start  card lista etapa --->
                <div class="card my-3">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        Etapa ${objProyect.indice}  : ${objProyect.nombre_etapa}
                        <p class="text-success"><strong>${anuncio}</strong></p>
                        <div class="row d-block justify-content-center align-items-center">
                            <div class="col">
                                ${barraShow}
                            </div>
                            <div class="col py-3" idEtapa="${objProyect.id_etapa}">
                   
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddSubetapa" data-bs-whatever="${objProyect.id_etapa}">
                                    Agrega Sub-etapa
                                </button>
                                 <button type="button" class="btn btn-danger btnDeleteE">
                                   Eliminar Etapa
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-container">
`;
            //REALIZAMOS UNA CONDICION DE QUE SI UN CONTEO ES MAYOR A 0, TRAIGA HE IMPRIMA LAS SUB ETAPAS DE LA ETAPA
            if (subetapas.length>0){
                template += construyeSubetapa(subetapas);
            }
            else{
                template +=`<div class="alert alert-warning" role="alert">
                  <h4 class="alert-heading">Esta etapa no tiene subetapas que mostrar</h4>
                  <p>Le sugerimos crear subetapas para llevar una mejor administración de su proyecto.</p>
                  <hr>
                  <p class="mb-0">Haga click en el boton "Agregar subestapa" para poder mostrar algo.</p>

                </div>`;
            }
            template += `
                           </div>
                        </div>
                    </div>
                </div>
                <!-- card lista etapa --->
            `;
        }
    );
    return template;  
}
// FUNCION PARA CREAR LAS SUBETAPAS DE UNA ETAPA
function construyeSubetapa(etapasLista) {
// console.log(subetapas);
    let templateSubetapa = `
                        <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                        <tr>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">#</a></th>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">Estatus</a></th>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">Nombre</a></th>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">Fecha de Creacion</a></th>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">Dias</a></th>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">Acciones</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        `;
    etapasLista.forEach(
        sub=>{
            let boton = sub.estado === "1" ? `<i class="fas fa-check-circle"></i>`:`<i class="fas fa-clock"></i>`;
            let textCustom = sub.estado === "1" ? `success`:`warning`;
            let btnCheck = sub.estado === "0" ? `<button type="button" class="btn btn-success btnEndSubE">
                <i class="fas fa-clipboard-check"></i></button>`:``;

            templateSubetapa += `
                            <tr idSubEtapa ="${sub.id_subetapa}">
                                <td>${sub.indice}</td>
                                <td class="text-${textCustom}"><h2>${boton}</h2></td>
                                <td>${sub.nombre_subetapa}</td>
                                <td>${sub.fecha_inicio}</td>
                                <td>${sub.dias}</td>
                                <td>
                                <div class="btn-group text-light" role="group" aria-label="Basic example">
                                  <button type="button" class="btn btn-danger btnDeleteSE"><i class="far fa-trash-alt"></i></button>
                                  <!-- 
                                  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalAddSubetapa"><i class="far fa-edit"><a class="text-light" href=""></i></a></button>
                                  -->
                                  ${btnCheck}
                                </div>
                                </td>
                            </tr>
                        `;
        }
    );
    templateSubetapa += `</tbody>
                        </table>`;
    return templateSubetapa;
}


////// ------------------ ACCIONES CON ETAPAS Y SUB ETAPAS ---------///

//-------------------seleccionando el elemento boton agregar elemento
$(document).on("click", ".btnEndSubE", function () {
    if (confirm("Porfavor confirme por teminada la Sub-Etapa ¿Desea continuar?")){
        let elementoSubEtapaSelect = $(this)[0].parentElement.parentElement.parentElement;
        let idSubEtapa = $(elementoSubEtapaSelect).attr("idSubEtapa");
        finalizaSubEtapa(idSubEtapa);
    }

});

//------------------- Eliminar sub etapa ---------------------------//

//-------------------seleccionando el elemento boton Eliminar subetapa  ----------//
$(document).on("click", ".btnDeleteSE", function () {
    if (confirm("¿Esta seguro de que desea eliminar esta Sub-Etapa? Esta acción no se podrá revertir")){
        let elementoSubEtapaSelect = $(this)[0].parentElement.parentElement.parentElement;
        let idSubEtapa = $(elementoSubEtapaSelect).attr("idSubEtapa");
        eliminaSubEtapa(idSubEtapa);
    }

});

//------------------- Eliminar etapa ---------------------------//

//-------------------seleccionando el elemento boton Eliminar subetapa  ----------//
$(document).on("click", ".btnDeleteE", function () {
    if (confirm("¿Esta seguro de que desea eliminar esta Etapa? Esta acción no se podrá revertir")){
        let elementEtapaSelect = $(this)[0].parentElement;
        let idEtapa = $(elementEtapaSelect).attr("idetapa");
        eliminaEtapa(idEtapa);
    }

});


//------------------- Eliminar Proyecto Definitivamente ---------------------------//

//-------------------seleccionando el elemento boton Eliminar subetapa  ----------//
$(document).on("click", ".btnDeleteProyectDef", function () {
    if (confirm("¿Esta seguro de que desea eliminar esta Etapa? Esta acción no se podrá revertir")){
        let elementProyecto = $("#idProyecto").val();
        eliminaProyecto(elementProyecto);
        
    }

});

//------------------- Finaliza la sub etapa seleccionada  ---------------------------//
function finalizaSubEtapa(idSubEtapa){
    $.ajax({
        url: "./control/subetapa-concluida.php",
        type: 'POST',
        data: {
            idSEtapa: idSubEtapa
        },
        success: function (mje) {
            consultaDetailsProyecto();
            consultaEtapasProyecto();
        }
    });

}
//------------------- FUNCION ELIMINA SUBETAPA ---------------------------//
function eliminaSubEtapa(idSubEtapa){
    $.ajax({
        url: "./control/subetapa-eliminada.php",
        type: 'POST',
        data: {
            idSEtapa: idSubEtapa
        },
        success: function (mje) {
            consultaDetailsProyecto();
            consultaEtapasProyecto();
        }
    });

}
//----------------Funcion elimina Proyecto --------------//
function eliminaProyecto(elementProyecto){
    $.ajax({
        url: "./control/proyecto-delete.php",
        type: 'POST',
        data: {
            idProyecto: elementProyecto
        },
        success: function (mje) {
            console.log(mje)
            consultaDetailsProyecto();
            consultaEtapasProyecto();
        }
    });

}

//----------------Funcion elimina etapa --------------//
function eliminaEtapa(idEtapa){
    $.ajax({
        url: "./control/etapa-eliminada.php",
        type: 'POST',
        data: {
            idEtapa: idEtapa
        },
        success: function (mje) {
            console.log(mje)
            consultaDetailsProyecto();
            consultaEtapasProyecto();
        }
    });

}