// lo que sejecuta primero
$(document).ready(function () {
    console.log("Agrega SubEtapa");

    //-------------------seleccionando el elemento boton agregar elemento
    $('#frm-add-sub-etapa').submit(function (e) {
            //obtenemos los datos de los valores que se enviaran al servidor
            const valoresCajas = {
                nombre: $('#nombreSE').val(),
                dias: $('#diasSE').val(),
                fecha_inicio: $('#fecha_inicioSE').val(),
                idEtapa: $('#recipient-name').val(),
                indice: $("#indiceSE").val(),
            };
             let url = "./control/subetapa-add.php";
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas,function (mje) {
                //tratamos los datos y hacemos acciones
                console.log(mje);
                let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                              ${mje}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                $("#mjeAlertaAUSE").html(template);
                $('#frm-add-sub-etapa').trigger('reset');
                consultaDetailsProyecto();
                consultaEtapasProyecto();
            });
        //Cancela las funciones basicas del boton submit y evita regrescar la pagina
        e.preventDefault();
       
    });
    //-------------------seleccionando el elemento boton agregar elemento
  
});

