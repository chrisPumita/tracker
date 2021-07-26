//Star Session
$(document).ready(function(){
        console.log("Escuchando para enviar correo");
    //-------------------End StarSesion
});


$('#frm-consulta').submit(function (e)
{
    //se ejecuta el elemento submit
    // console.log('enviado');
    var noSeguimiento = $("#noSeguimiento").val();
    if (noSeguimiento == "")
    {
        //cr4amos una plantilla
        var template = `
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>Intenta con un dato </strong> Ingresa un número de seguimiento, este te es propoircionado por la empresa que esta realizazndo tu proyecto
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
            `;
        $("#mensaje").html(template);
    }
    else
    {
        //obtenemos los datos de los valores que se enviaran al servidor
        const valoresCajas = {
            noSeguimiento: noSeguimiento
        };
        let url = '../APP/control/consulta_no_seguimiento.php';
        //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
        $.post(url,valoresCajas, function (response) {
            //tratamos los datos y hacemos acciones
            console.log(response);
            let obj_mje = JSON.parse(response);
            console.log(obj_mje);
            if (obj_mje.mjeType == "0")
            {
                var template = `<div class="alert alert-danger" role="alert">${obj_mje.Mensaje}</div>`;
                //Domde quiero mostrar los elementos y lo llenamos con la plantilla hecha
                var mensaje = document.getElementById("mensaje");
                mensaje.innerHTML = template;
                //limpiar
                $('#tarea_form').trigger('reset');
            }
            else
            {
                location.href ="public-view-proyecto/"+obj_mje.Mensaje;
            }
        });
    }
    //console.log(postData);
    //Cancela las funciones basicas del boton submit y evita regrescar la pagina
    e.preventDefault();
});


$('#frm-share').submit(function (e)
{
    //se ejecuta el elemento submit
    // console.log('enviado');
    var correo = $("#email-share").val();
    if (correo == "")
    {
        //cr4amos una plantilla
        var template = `
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Correo no válido</strong> ${mje} <br>
                          Puedes compartirlo con alguien mas.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
            `;
        $("#mensaje").html(template);
    }
    else
    {
        //obtenemos los datos de los valores que se enviaran al servidor
        const valoresCajas = {
            correo: correo,
            noSeguimiento: $("#noSeguimiento").val(),
            proyectName: $("#proyectoName").val()
        };
        let url = '../APP/control/send-public-view.php';
        //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
        $.post(url,valoresCajas, function (mje) {
            //tratamos los datos y hacemos acciones
            console.log(mje);
                var template = `
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Gracias por compartir!</strong> ${mje} <br>
                          Puedes compartirlo con alguien mas.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      `;
                $('#mjeShare').html(template);
                $('#frm-share').trigger('reset');
        });
    }
    //console.log(postData);
    //Cancela las funciones basicas del boton submit y evita regrescar la pagina
    e.preventDefault();
});