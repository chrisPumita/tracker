// lo que sejecuta primero
$(document).ready(function () {
    console.log("Agrega Etapa");

    //-------------------seleccionando el elemento boton agregar elemento
    $('#frm-add-etapa').submit(function (e) {
            //obtenemos los datos de los valores que se enviaran al servidor
            const valoresCajas = {
                nombre: $('#nombreE').val(),
                dias: $('#diasE').val(),
                fecha_inicio: $('#fecha_inicioE').val(),
                idProyecto: $('#idProyectoInsert').val(),
                indice: $("#indiceE").val(),
            };
             let url = "./control/etapa-add.php";
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas,function (mje) {
                //tratamos los datos y hacemos acciones
                console.log(mje);
                let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                              ${mje}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                $("#mjeAlertaAUE").html(template);
                $('#frm-add-etapa').trigger('reset');
                consultaDetailsProyecto();
                consultaEtapasProyecto();
            });
        //Cancela las funciones basicas del boton submit y evita regrescar la pagina
        e.preventDefault();
       
    });
    //-------------------seleccionando el elemento boton agregar elemento
  
});

