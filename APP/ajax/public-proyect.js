//Star Session
$(document).ready(function(){

    console.log("Escuchando acciones");

    //-------------------Star Sessions
    $('#frm-login').submit(function (e)
    {
        //se ejecuta el elemento submit
        // console.log('enviado');
        var email = $("#email").val();
        var pw =  $("#pw").val();
        if (email == "" || pw  == "")
        {
            //cr4amos una plantilla
            var template = `<div class="alert alert-warning" role="alert">Porfavor escriba su cuenta y la contraseña.</div>`;
            $("#mensaje").html(template);
        }
        else
        {
            //obtenemos los datos de los valores que se enviaran al servidor
            const valoresCajas = {
                correo: email,
                pw : pw
            };
            let url = './control/c_verifica_usuario.php';
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas, function (response) {
                //tratamos los datos y hacemos acciones
                let obj_mje = JSON.parse(response);

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
                    var template = `
                        <div class="alert alert-success" role="alert">
                            <div class="d-flex align-items-center">
                                ${obj_mje.Mensaje}
                                <strong>Iniciando sesión...</strong>
                                <div class="spinner-border ml-auto" role="status" aria-hidden="true">
                                </div>
                            </div>
                        </div>`;
                    //Domde quiero mostrar los elementos y lo llenamos con la plantilla hecha
                    var mensaje = document.getElementById("mensaje");
                    mensaje.innerHTML = template;
                    location.reload();
                }
            });
        }
        //console.log(postData);
        //Cancela las funciones basicas del boton submit y evita regrescar la pagina
        e.preventDefault();
    })
    //-------------------End StarSesion
});

/*

**/