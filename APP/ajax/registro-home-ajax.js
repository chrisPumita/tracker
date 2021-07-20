// lo que sejecuta primero
$(document).ready(function () {
    console.log("Home add user");

    $('#frm-registro-home').submit(function (e) {
        //Cancela las funciones basicas del boton submit y evita regrescar la pagina
        let pw = $('#pw').val();
        let cpw = $('#cpw').val();
        let idp =$('#idPage').val();
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


            let url ="./APP/control/crea-cuenta.php";
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas,function (mje) {
                //tratamos los datos y hacemos acciones
                console.log(mje);
                let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                              ${mje}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                $("#mjeAlerta").html(template);
                $('#frm-registro-home').trigger('reset');
            });
        }
        else {
            alert("Las contraseñas no coinciden o estan vacias");
        }
        e.preventDefault();
    });
});


/*
let pw = $('#pw').val();
        let cpw = $('#cpw').val();
        let idp =$('#idPage').val();
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


            let url ="./APP/control/crea-cuenta.php";
            //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
            $.post(url,valoresCajas,function (mje) {
                //tratamos los datos y hacemos acciones
                console.log(mje);
                let template = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                              ${mje}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                $("#mjeAlerta").html(template);
                $('#frm-add-user-h').trigger('reset');
            });
        }
        else {
            alert("Las contraseñas no coinciden o estan vacias");
        }
*/