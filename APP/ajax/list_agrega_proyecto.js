// lo que sejecuta primero
let json_cat;
$(document).ready(function () {
    cargaListaCategorias();
    if (!cargaListGrupos()){
        $("#cardProyectos").html("");
        let template = `<div class="alert alert-warning " role="alert">
                          <h4 class="alert-heading">No tienes grupos de trabajo</h4>
                          <p>Necesitas un grupo</p>
                          <hr>
                          <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                           <a href="./"><button type="button" class="btn btn-primary">Crear grupo de trabajo</button></a> 
                        </div>`;

        $('#cardProyectos').html(template);
    }
});


function  cargaListGrupos(){
    let boolLista = false;
    $.ajax({
        url: "./control/list-categorias.php",
        success: function (response) {
            //COnvertimos el string a JSON
            let obj_cat = JSON.parse(response);
            if (obj_cat.count>0){
                boolLista = true;
                let template = construct_list_Desp_Cat(obj_cat);
                $('#categoria').html(template);
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
            let obj_cat = JSON.parse(response);
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

/// Funcion que busca en un json y coloca en un input el valor del dela propíedad objeto
$("#categoria").change(function ()
{
    console.log(json_cat);
    let idObj = $("#categoria").val();
    json_cat.forEach(
        cat=>{
            if (cat.id_categoria === idObj)
                $("#imgCat").val(cat.imagen_url);
        }
    );
});