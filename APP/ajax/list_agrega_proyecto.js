// lo que sejecuta primero
let json_cat;
$(document).ready(function () {
    cargaListaCategorias();
    
});


function  cargaListGrupos(){

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
    json_cat= obj_cat;
    obj_cat.forEach(
        objCat=>{
            template += `
                    <option value="${objCat.id_categoria}">${objCat.nombre_categoria}</option>
                     `;
        }
    );
    console.log(json_cat);
    return template;
}