// lo que sejecuta primero
let json_cat;
$(document).ready(function () {
    cargaListaCategorias();
    let boolLista= cargaListGrupos();
    if (boolLista){
        $("#cardProyectos").html("");
        let template = `<div class="alert alert-warning " role="alert">
                          <h4 class="alert-heading">No tienes grupos de trabajo</h4>
                          <p>Necesitas un grupo para crear un proyecto</p>
                          <hr>
                          <p class="mb-0">Porfavor cree primero un grupo de trabajo, asigne sus usuarios y podrá crear proyectos</p>
                           <a href="./"><button type="button" class="btn btn-primary">Crear grupo de trabajo</button></a> 
                        </div>`;

        $('#cardProyectos').html(template);
    }
});


function  cargaListGrupos(){
    let boolLista = false;
    $.ajax({
        type: 'POST',
        data: {
            idEmpresa: $("#idEmpresaGeneral").val()
        },
        url: "./control/list-grupo-trabajo.php",
        success: function (response) {
            //COnvertimos el string a JSON
            console.log("Cargando Grupos");
            console.log(response);
            let obj_gt = JSON.parse(response);
            console.log(obj_gt);
            if (obj_gt.length>0){
                boolLista = true;
                let template = construct_list_Desp_Gt(obj_gt);
                $('#grupot').html(template);
            }
        }
    });
    return boolLista;
}

function cargaListaCategorias(){
    $.ajax({
        url: "./control/list-categorias.php",
        success: function (response) {
            //COnvertimos el string a JSON
            console.log("Cargando Categorias");
            let obj_cat = JSON.parse(response);
            console.log(obj_cat)
            let template = construct_list_Desp_Cat(obj_cat);
            //let gridTemplate = constuct_grid_proyectos(obj_proyect);
            $('#categoria').html(template);
            //$('#grid_proyectos').html(gridTemplate);*/
        }

    });
}

function construct_list_Desp_Cat(obj_cat){
    let template= '';
    json_cat = obj_cat;
    obj_cat.forEach(
        objCat=>{
            template += `
                    <option value="${objCat.id_categoria}">${objCat.nombre_categoria}</option>
                     `;
        }
    );
    return template;
}

function construct_list_Desp_Gt(obj_gt){
    let template= '';
    obj_gt.forEach(
        objGt=>{
            template += `
                    <option value="${objGt.id_gt}">${objGt.nombre_gt}</option>
                     `;
        }
    );
    return template;
}

/// Funcion que busca en un json y coloca en un input el valor del dela propíedad objeto
$("#categoria").change(function ()
{
    let idObj = $("#categoria").val();
    json_cat.forEach(
        cat=>{
            if (cat.id_categoria === idObj)
                $("#imgCat").val(cat.imagen_url);
        }
    );
});