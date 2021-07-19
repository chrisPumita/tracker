$(document).ready(function () {
    console.log("Lista Proyectos");
    consultaDetailsProyecto();
    consultaEtapasProyecto();

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

});
function constuct_grid_proyectos(obj_proyect) {
    $("#nombre_proyecto").html(obj_proyect.nombre_proyecto);
    let template =

                `<div class="col-md-4">
                    <div class="card p-3">
                        <div class="d-flex flex-row mb-3"><img class="icon-proyecto" src="${obj_proyect.url_imagen}" width="70">
                            <div class="d-flex flex-column ml-2">
                                <span>${obj_proyect.nombre_proyecto}</span>
                                <span class="text-black-50">${obj_proyect.nombre_gt}</span>
                                <span class="ratings">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            50%
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <h5>Fecha de creacion: ${obj_proyect.fecha_creacion}</h5>
                        <div class="d-flex justify-content-between install mt-3">
                            <span>Tiempo: ${obj_proyect.dias} dias</span>
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
            contador++;
            template += `
            <div class="card mb-4">
            <div class="card-header">
                <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                Etapa ${contador}  : ${objProyect.nombre_etapa}
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-10">
                        <div class="progress">
                            <div class="progress-bar  progress-bar-striped bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>
                    <div class="col-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddSubetapa">
                            Agrega Sub-etapa
                        </button>
                    </div>
                </div>
            </div>`;
        }
    );
    return template;  
}