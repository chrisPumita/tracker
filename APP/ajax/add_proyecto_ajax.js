// lo que sejecuta primero
$(document).ready(function () {
    console.log("Agrega Proyecto");

    //-------------------seleccionando el elemento boton agregar elemento
    $('#frm-add-new-proyect').submit(function (e) {
            //obtenemos los datos de los valores que se enviaran al servidor
            const valoresCajas = {
                nombrep: $('#nombrep').val(),
                gt: $('#grupot').val(),
                categoria: $('#categoria').val(),
                dias: $('#dias').val(),
                fecha_inicio: $('#fecha_inicio').val(),
                urlImg: $('#imgCat').val(),
            };
             let url = "./control/proyecto-add.php";
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas,function (mje) {
                //tratamos los datos y hacemos acciones
                console.log(mje);
                let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                              ${mje}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                $("#mjeAlertaAU").html(template);
                $('#frm-add-new-proyect').trigger('reset');
            });
        //Cancela las funciones basicas del boton submit y evita regrescar la pagina
        e.preventDefault();
    });
    //-------------------seleccionando el elemento boton agregar elemento

});
