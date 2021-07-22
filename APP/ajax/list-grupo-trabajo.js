// lo que sejecuta primero
$(document).ready(function () {
    console.log("Lista Grupos Trabajo");
    consultaGruposTrabajo();
});

function consultaGruposTrabajo(){
    $.ajax({
        url: "./control/grupo_trabajo-detalles.php",
        type: 'POST',
        data: {
            idEmpresa: $("#idEmpresaGeneral").val()
        },
        success: function (response) {
            //COnvertimos el string a JSON
           let obj_gt = JSON.parse(response);
            console.log(obj_gt);
            let template = construc_table_gt(obj_gt);
            $('#tbl-grupo-trabajo').html(template);
        }

    });
}

function construc_table_gt(obj_gt) {
    let template = '';
    let contador = 0;
    obj_gt.forEach(
        objGt=>{
            contador++;
             
             let estado = getEstado(objGt.status);
            template += `
                <tr idgt="${objGt.id_gt}">
                    <td>${contador}</td>
                    <td>${objGt.nombre_gt} </td>
                    <td>${objGt.fecha_creacion} </td>
                    <td>COUNT</td>
                    <td>${estado}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="./detalles-equipo.php?idGpo=${objGt.id_gt}"><button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button></a>
                            <button type="button" class="btn btn-warning"><i class="fas fa-pause-circle"></i></button>
                            <button type="button" class="btn btn-danger btnDeleteGt"><i class="fas fa-trash-alt"></i></button>    
                        </div>
                    </td>
                </tr>`;
        }
    );
    return template;
}
/* Obtener una jornada para convertirlo en texto  */
function getEstado($estado){
    switch($estado){
    case "0":
        return "Inactivo";
        break;
    case "1":
        return "Activo";
        break;
    case "2":
        return "En Proyectos";
        break;
    }
}
//---------------- Escucha eliminar Grupo de trabajo -----------------//
$(document).on("click", ".btnDeleteGt", function () {
    if (confirm("¿Esta seguro de que desea eliminar este grupo de trabajo? Esta acción no se podrá revertir")){
        let elementoGt = $(this)[0].parentElement.parentElement.parentElement;
        let idGt = $(elementoGt).attr("idgt");
        eliminaGrupoTrabajo(idGt);
    }

});

//------------------- FUNCION ELIMINA GRUPO TRABAJO ---------------------------//
function eliminaGrupoTrabajo(idGt){
    $.ajax({
        url: "./control/grupo_trabajo-delete.php",
        type: 'POST',
        data: {
            idGt: idGt
        },
        success: function (mje) {
            alert("Eliminado con exito");
            consultaGruposTrabajo();
        }
    });

}