//Star Session
$(document).ready(function(){
    if (search){
        consultaSeguimientoPage($("#noSeguimiento").val());
    }
    //-------------------Star Sessions
    $('#frm-consulta').submit(function (e)
    {
        //se ejecuta el elemento submit
        // console.log('enviado');
        var noSeguimiento = $("#noSeguimiento").val();
        if (noSeguimiento == "")
        {
            //cr4amos una plantilla
            var template = `
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>Intenta con un dato </strong> Ingresa un número de seguimiento, este te es propoircionado por la empresa que esta realizazndo tu proyecto
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
            `;
            $("#mensaje").html(template);
        }
        else
        {
            //obtenemos los datos de los valores que se enviaran al servidor
            const valoresCajas = {
                noSeguimiento: noSeguimiento
            };
            let url = '../APP/control/consulta_no_seguimiento.php';
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas, function (response) {
                //tratamos los datos y hacemos acciones
                console.log(response);
                let obj_mje = JSON.parse(response);
                console.log(obj_mje);
                if (obj_mje.mjeType == "0")
                {
                    var template = `<div class="alert alert-danger" role="alert">${obj_mje.Mensaje}</div>`;
                    //Domde quiero mostrar los elementos y lo llenamos con la plantilla hecha
                    var mensaje = document.getElementById("mensaje");
                    mensaje.innerHTML = template;
                    //limpiar
                    $('#tarea_form').trigger('reset');
                }
                else
                {
                    location.href ="public-view-proyecto/"+obj_mje.Mensaje;
                }
            });
        }
        //console.log(postData);
        //Cancela las funciones basicas del boton submit y evita regrescar la pagina
        e.preventDefault();
    })
    //-------------------End StarSesion
});

/*
--------------------------- Consulta todos los detalles del proyecto en general
**/


function consultaSeguimientoPage(noSeguimiento) {
    consultaDetailsProyectoPublico(noSeguimiento);
}

//Contruye el Grid para el proyecto en especifico
function consultaDetailsProyectoPublico(noSeguimiento){
    $.ajax({
        url: "../../APP/control/consulta_no_seguimiento_details.php",
        type: 'POST',
        data: {
            noSeguimiento: noSeguimiento
        },
        success: function (response) {
            //COnvertimos el string a JSON
            let obj_proyect = JSON.parse(response);
            if(obj_proyect.length>0){
                let proyecto = obj_proyect[0];
                constuct_data_html(proyecto);
                consultaEtapasProyecto(proyecto.id_proyecto);
            } else location.href="../";
        }

    });
}

//Construye la tabla con las etapas y subetapas de cada proyecto
function consultaEtapasProyecto(idProyecto){
    $.ajax({
        url: "../../APP/control/etapa-detalles.php",
        type: 'POST',
        data: {
            idProyecto: idProyecto
        },
        success: function (response) {
            //COnvertimos el string a JSON
            let obj_proyect = JSON.parse(response);
            console.log("_______________________________");
            console.log(obj_proyect);
            console.log("_______________________________");
            let etapas = constructEtapasconstructEtapas(obj_proyect);
            $("#timeLineEtapas").html(etapas);

        }
    });
}

/*----------------------------- CONSTRUCTORES DE DATOS DEL PROYECTO---------------------------------------*/
function constuct_data_html(proyecto) {
    $("#nombreProyecto").html(proyecto.nombre_proyecto + " ("+proyecto.categoriaName+")");
    $("#empresaName").html(proyecto.empresaName);
    $("#cardNameEmpresa").html(proyecto.empresaName);
    $("#fInicio").html(proyecto.fecha_inicio);
    $("#fCreate").html(proyecto.fecha_creacion);
    $("#porcentaje").html(parseInt(proyecto.porcent)+"%");
    let templateLine ="";
    let mjeAvance ="";
    if(proyecto.porcent>0){
        let mje =  (proyecto.porcent<100) ? parseInt(proyecto.porcent)+"%" : `Proyecto terminado `;
        let colorBg =  (proyecto.porcent>=100) ? "success" : "info";
        templateLine = `
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-${colorBg}" role="progressbar" style="width: ${proyecto.porcent}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            ${mje}
                        </div>
                    </div>
            `;

        mjeAvance = `Este propyecto lleva un ${proyecto.porcent}% de avance`;

    }
    else{
        templateLine = `
        <div className="progress">
            <div className="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%"
                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                 Este proyecto aun no inicia
            </div>
        </div>`;
    }
    $("#bar").html(templateLine);
}


// FUNCION PARA CREAR LAS TABLAS DE ETAPA DE EL PROYECTO SELECCIONADO
/*----------------------------- CONSTRUCTORES DE ETAPAS DEL PROYECTO---------------------------------------*/
function constructEtapasconstructEtapas(obj_proyect){
    let template='';
    let cont = 0;
    obj_proyect.forEach(
        objProyect=>{
            cont++;
            let subetapas = objProyect[0];
            let anuncio =  objProyect[1][0].porc!= null ? `Sub etapas completadas: ${objProyect[1][0].terminado} de ${objProyect[1][0].suma}`: "";
            let barraShow =  objProyect[1][0].porc!= null ? `   <div class="progress my-3">
                                                                    <div class="progress-bar  progress-bar-striped bg-info" role="progressbar" style="width: ${objProyect[1][0].porc}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">${parseInt(objProyect[1][0].porc)}%</div>
                                                                </div>`
                :`<h3>Aqui se vera el avance de la etapa</h3>`;
            let iconState = objProyect[1][0].porc <100 ? `fas fa-hourglass-half` :`fas fa-check-circle`;
            template += `
            <!-- start  card lista etapa generate --->
                    <div class="timeline">
                        <span class="icon ${iconState}"></span>
                        <a href="#" class="timeline-content">
                            <h3 class="title"> <i class="${iconState}"></i> Etapa ${cont}  : ${objProyect.nombre_etapa}</h3>
                            <h6>${anuncio}</h6>
                            ${barraShow}
`;
            //REALIZAMOS UNA CONDICION DE QUE SI UN CONTEO ES MAYOR A 0, TRAIGA HE IMPRIMA LAS SUB ETAPAS DE LA ETAPA
            if (subetapas.length>0){
                template += construyeSubetapaPublica(subetapas);
            }
            else{
                template +=`<div class="alert alert-warning" role="alert">
                  <h4 class="alert-heading">Esta etapa no tiene subetapas que mostrar</h4>
                </div>`;
            }
            template += `
                                                       
                        </a>
                    </div>
                <!-- fin lista etapa --->
            `;
        }
    );
    return template;
}


// FUNCION PARA CREAR LAS SUBETAPAS DE UNA ETAPA
function construyeSubetapaPublica(etapasLista) {
// console.log(subetapas);
    let templateSubetapa = `<ul class="list-group text-dark">`;
    etapasLista.forEach(
        sub=>{
            let textCustom = sub.estado === "1" ? `success`:`warning`;
            let iconEstate = sub.estado === "0" ? `fas fa-hourglass-half`:`fas fa-check-circle`;
            templateSubetapa += `
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ${sub.nombre_subetapa}
                                    <span class="badge  badge-pill text-${textCustom}"><i class="${iconEstate}"></i></span>
                                </li>
                                `;
        }
    );
    templateSubetapa += `</ul>`;
    return templateSubetapa;
}
