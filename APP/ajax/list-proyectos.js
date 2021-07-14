// lo que sejecuta primero
$(document).ready(function () {
    console.log("funcionana");
    consultaAllProyectos();

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
                let template = construc_table_proyectos(obj_proyect);
                let gridTemplate = constuct_grid_proyectos(obj_proyect);
                $('#tbl-proyectos').html(template);
                $('#grid_proyectos').html(gridTemplate);
            }

        });
    }

});



function getTipoJornada($jornada) {
    switch ($jornada) {
        case "0":
            return "Normal";
            break;
        case "1":
            return "6 dias";
            break;
        case "2":
            return "7 DIAS";
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
                <tr>
                    <td>${contador}</td>
                    <td>${objProyect.nombre_proyecto} </td>
                    <td>${objProyect.nombre_gt} </td>
                    <td>${objProyect.fecha_creacion}</td>
                    <td>${objProyect.dias}</td>
                    <td>${jornada}</td>
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
    return template;
}

function constuct_grid_proyectos(obj_proyect) {
    let template = '';
    obj_proyect.forEach(
        objProyect=>{
            let jornada = getTipoJornada(objProyect.tipo_jornada);
            template +=
                `<div class="col-md-4">
                    <div class="card p-3">
                        <div class="d-flex flex-row mb-3"><img class="icon-proyecto" src="${objProyect.url_imagen}" width="70">
                            <div class="d-flex flex-column ml-2">
                                <span>Stripe</span>
                                <span class="text-black-50">Payment Services</span>
                                <span class="ratings">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            50%
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <h6>Get more context on your users with stripe data inside our platform.</h6>
                        <div class="d-flex justify-content-between install mt-3">
                            <span>Installed 172 times</span>
                            <span class="text-primary">
                                <button type="button" class="btn btn-primary">Ver estatus</button>
                            </span>
                        </div>
                    </div>
                </div>`;
        }
    );
    return template;
}