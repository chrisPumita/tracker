// lo que sejecuta primero
$(document).ready(function () {
    console.log("Agrega User");

    //-------------------seleccionando el elemento boton agregar elemento
    $('#frm-add-user').submit(function (e) {
        let pw = $('#pw').val();
        let cpw = $('#cpw').val();
        if (cpw===pw && cpw.length>0 && pw.length>0){
            //obtenemos los datos de los valores que se enviaran al servidor
            const valoresCajas = {
                nombre: $('#nombre').val(),
                app: $('#app').val(),
                apm: $('#apm').val(),
                user: $('#user').val(),
                correo: $('#email').val(),
                empresa: $('#empresa').val(),
                pw: pw,
                cpw : cpw
            };
            let url ="./control/crea-cuenta.php"
             
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas,function (mje) {
                //tratamos los datos y hacemos acciones
                console.log(mje);
                let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                              ${mje}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                $("#mjeAlerta").html(template);
                $('#frm-add-user').trigger('reset');

                var count = 2;
                setInterval(function(){
                    count--;
                    if (count == 0) {
                        window.location = './';
                    }
                },1000);
            });
        }
        else {
            alert("Las contraseñas no coinciden o estan vacias");
        }

        //Cancela las funciones basicas del boton submit y evita regrescar la pagina
        e.preventDefault();
    });
    //-------------------seleccionando el elemento boton agregar elemento
});