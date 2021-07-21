$(document).ready(function () {
    console.log("Lista Proyectos");
    consultaDetailsProyecto();
    consultaEtapasProyecto();
});

function consultaDetailsProyecto(){
    $.ajax({
        url: "./control/proyecto-detalles.php",
        type: 'POST',
        data: {
            idProyecto: $("#idProyecto").val()
        },
        success: function (response) {
            //COnvertimos el string a JSON
            let obj_proyect = JSON.parse(response);
            console.log(obj_proyect);
            let proyecto = obj_proyect[0];
            constuct_grid_proyectos(proyecto);
        }

    });
}

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

function constuct_grid_proyectos(obj_proyect) {
    $("#nombre_proyecto").html(obj_proyect.nombre_proyecto);
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
                                <span>${obj_proyect.nombre_proyecto}</span>
                                <span class="text-black-50">${obj_proyect.nombre_gt}</span>
                                <span class="ratings">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            50%
                                        </div>
                                    </div>
                                </span>
                                <h5>Fecha de creacion: ${obj_proyect.fecha_creacion}</h5>
                                <div class="d-flex justify-content-between install mt-3">
                                    <span>Tiempo: ${obj_proyect.dias} dias</span>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>`;
                $("#grd-proyecto").html(template);
}

function constructEtapas(obj_proyect){
    let contador=0;
    let template='';
    obj_proyect.forEach(
        objProyect=>{
            let subetapas = objProyect[0];
            contador++;
            template += `
            <!-- start  card lista etapa --->
                <div class="card">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        Etapa ${contador}  : ${objProyect.nombre_etapa}
                        <div class="row d-block justify-content-center align-items-center">
                            <div class="col">

                                <div class="progress">
                                    <div class="progress-bar  progress-bar-striped bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </div>
                            <div class="col py-3">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddSubetapa">
                                    Agrega Sub-etapa
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-container">
`;
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

function construyeSubetapa(etapasLista) {
// console.log(subetapas);
    let templateSubetapa = `
                        <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                        <tr>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">#</a></th>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">Subetapa</a></th>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">Inicio</a></th>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">Dias</a></th>
                            <th data-sortable="" ><a href="#" class="dataTable-sorter">Estatus</a></th>
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
                                <td>20 ago 21</td>
                                <td>61</td>
                                <td>
                                <div class="btn-group text-light" role="group" aria-label="Basic example">
                                  <button type="button" class="btn btn-danger"><a class="text-light" href=""><i class="far fa-trash-alt"></i> </a></button>
                                  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalAddSubetapa"><i class="far fa-edit"><a class="text-light" href=""></i></a></button>                                  
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

function finalizaSubEtapa(idSubEtapa){
    $.ajax({
        url: "./control/subetapa-concluida.php",
        type: 'POST',
        data: {
            idSEtapa: idSubEtapa
        },
        success: function (mje) {
        }
    });
    consultaDetailsProyecto();
    consultaEtapasProyecto();
}