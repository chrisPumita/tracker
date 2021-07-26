$(document).ready(function () {
    console.log("Detalles de equipo");
    detallesGrupo();
    construct_table_GTU();
    
});


function detallesGrupo(){
    $.ajax({
        url: "./control/grupo_trabajo-detalle.php",
        type: 'POST',
        data: {
            idGt: $("#idGpo").val()
        },
        success: function (response) {
             //COnvertimos el string a JSO
           let obj_gt = JSON.parse(response);
           
             //let templateInput=construct_table_GTU();
           $("#nombreGt").val(obj_gt[0].nombre_gt);
           $("#nombreGTitulo").html(obj_gt[0].nombre_gt);
           $("#fechagt").html(obj_gt[0].fecha_creacion);           
        }
        
    });
}


function construct_table_GTU(){
    $.ajax({
        url: "./control/gtu-detalles.php",
        type: 'POST',
        data: {
            idGt: $("#idGpo").val(),
            idEMpresa: $("#idEMpresaGeneral").val()
        },
        success: function (response) {
             //COnvertimos el string a JSO
           let obj_gt = JSON.parse(response);
           let contador=0;
           let template='';
           obj_gt.forEach(
               objGt=>{
                   contador++;
                   let estado= getEstado(objGt.estado);
                   let acceso = getAcceso(objGt.permisos)
                 template+=`
                <tr idUserGTU= ${objGt.id_usuario_fk}>
                   <td>${contador}</td>
                   <td>${objGt.nombre} ${objGt.apaterno} ${objGt.amaterno}</td>
                   <td>${objGt.correo}</td>
                   <td>${objGt.user_name}</td>
                   <td>${acceso}</td>
                   <td>${objGt.fecha_union}</td>
                   <td>${estado}</td>
                   <td>
                       <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                           <button type="button" class="btn btn-warning "><i class="fas fa-pause-circle"></i>
                               <button type="button" class="btn btn-danger btnDeleteUSerGt">
                                   <i class="fas fa-user-minus"></i>
                               </button>

                       </div>
                   </td>
               </tr>
                    `;
                   }
                );
                $("#tbl_usuarios_gt").html(template);
            }

        });
    }

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
    function getAcceso($acceso){
        switch($acceso){
        case "0":
            return "Usuario";
            break;
        case "1":
            return "Lider";
            break;
        }
    }


$('#frm-add-user-gt').submit(function (e) {
    //obtenemos los datos de los valores que se enviaran al servidor
    const valoresCajas = {
        idUser: $("#userGTU").val(),
        idGt: $("#idGpo").val()
    };
     let url = "./control/gtu-add-user.php";
    //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
    $.post(url,valoresCajas,function (mje) {
        //tratamos los datos y hacemos acciones
        let mensaje = JSON.parse(mje);
        let bgstyle = mensaje.mjeType === "0"? "danger" : "success";
        let template = `<div class="alert alert-${bgstyle} alert-dismissible fade show" role="alert">
                      ${mensaje.mensaje}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
        $("#mjeAlertaAUAUGT").html(template);
        $('#frm-add-user-gt').trigger('reset');
        construct_table_GTU();
    });
    construct_table_GTU();
//Cancela las funciones basicas del boton submit y evita regrescar la pagina
e.preventDefault();
});


$('#frm-update-ngt').submit(function (e) {
    //obtenemos los datos de los valores que se enviaran al servidor
    let nombregt= $("#nombreGt").val();
    const valoresCajas = {
        nombreGt: nombregt,
        idGt: $("#idGpo").val()
    };
     let url = "./control/grupo_trabajo-update.php";
    //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
    $.post(url,valoresCajas,function (mje) {
        //tratamos los datos y hacemos acciones
        let mensaje = mje;
        let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                      ${mensaje}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
        $("#mjeAlertaUDNE").html(template); 
        $("#nombreGTitulo").html(nombregt);
    });
    
//Cancela las funciones basicas del boton submit y evita regrescar la pagina
e.preventDefault();
});


//------------------- Eliminar Usuario de Grupo de trabajo ---------------------------//

//-------------------seleccionando el elemento boton Eliminar Usuario GT  ----------//
$(document).on("click", ".btnDeleteUSerGt", function () {
    if (confirm("¿Esta seguro de que desea eliminar Usuario?")){
        let elementUserSelect = $(this)[0].parentElement.parentElement.parentElement;
        let idUserFk = $(elementUserSelect).attr("idusergtu");
        eliminarUsuario(idUserFk);
    }

});

function eliminarUsuario(idUserFk){
    $.ajax({
        url: "./control/gtu-deleteUser.php",
        type: 'POST',
        data: {
            idUserFk: idUserFk,
            idGpo: $("#idGpo").val()
        },
        success: function (mje) {
            alert(mje);
            construct_table_GTU();
        }
    });    
}
