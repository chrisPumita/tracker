// lo que sejecuta primero
$(document).ready(function () {
    console.log("Agrega Grupo Trabajo");

    //-------------------seleccionando el elemento boton agregar elemento
    $('#frm_add_gt').submit(function (e) {
            //obtenemos los datos de los valores que se enviaran al servidor
            const valoresCajas = {
                nombre: $('#nombreGt').val(),
                idEmpresa: $("#idEmpresaGeneral").val(),
            };
             let url = "./control/grupo_trabajo-add.php";
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas,function (mje) {
                //tratamos los datos y hacemos acciones
                console.log(mje);
                let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                              ${mje}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                $("#mjeAlertaAUGt").html(template);
                $('#frm_add_gt').trigger('reset');
                consultaGruposTrabajo();
            });
        //Cancela las funciones basicas del boton submit y evita regrescar la pagina
        e.preventDefault();
       
    });
    //-------------------seleccionando el elemento boton agregar elemento
  
});

