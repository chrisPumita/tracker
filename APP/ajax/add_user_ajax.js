// lo que sejecuta primero
$(document).ready(function () {
    console.log("Agrega Usuario");

    //-------------------seleccionando el elemento boton agregar elemento
    $('#frm-add-new-user').submit(function (e) {
            //obtenemos los datos de los valores que se enviaran al servidor
            const valoresCajas = {
                nombre: $('#nombre').val(),
                app: $('#app').val(),
                apm: $('#apm').val(),
                user: $('#user').val(),
                correo: $('#email').val(),
                nivelacceso:$('#nivelAcceso').val(),
                idEmpresa: $('#idEmpresaGeneral').val(),
            };
             let url = "./control/usuario-add.php";
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas,function (mje) {
                //tratamos los datos y hacemos acciones
                console.log(mje);
                let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                              ${mje}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                $("#mjeAlertaAU").html(template);
                $('#frm-add-new-user').trigger('reset');
            });
        //Cancela las funciones basicas del boton submit y evita regrescar la pagina
        e.preventDefault();
    });
    //-------------------seleccionando el elemento boton agregar elemento

});
