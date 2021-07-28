$(document).ready(function () {
    console.log("Perfil usuario");
    detallesUsuario();
});

function detallesUsuario(){
    $.ajax({
        url: "./control/usuario-detalles.php",
        type: 'POST',
        data: {
            idUser : $("#idUser").val()
        },
        success: function (response) {
             //COnvertimos el string a JSO
           let obj_user = JSON.parse(response);  
           let tipo = getTipo(obj_user[0].nivel_acceso);
           $("#nombreuser").val(obj_user[0].nombre)
           $("#apellidos").val(obj_user[0].apaterno+ " "+obj_user[0].amaterno);
           $("#correo").val(obj_user[0].correo);
           $("#username").val(obj_user[0].user_name);
           $("#tipo_cuenta").val(tipo);
        }
        
    });
}

function getTipo($estado){
    switch ($estado){
        case "0":
            return "Administrador";
        break;
        case "1":
            return "Usuario";
        break;
    }
}

$('#frm-pw').submit(function (e) {
    //obtenemos los datos de los valores que se enviaran al servidor
    let pwn= $("#pwn").val();
    let pwa= $("#pwa").val();
    let pwc= $("#pwc").val();
    let mensaje = '';
        if(pwn!='' && pwa!='' && pwc!='')   {
            if(pwn===pwc){
                const valoresCajas = {
                    pwa: pwa,
                    pwn: pwn,
                    pwc: pwc
                };
                let url = "./control/usuario-update-pw.php";
                //funcion propia de jQuery para POST (a doinde enviar, que enviar, resultado devuelto)
                $.post(url,valoresCajas,function (mje) {
                    //tratamos los datos y hacemos acciones
                    console.log(mje);
                    mensaje += mje;
                    let template = `<div class="alert alert-info alert-dismissible fade show" role="alert">
                    ${mensaje}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                        $("#mjeBack").html(template); 
                    $("#frm-pw").trigger('reset');
                });
            } else {
                mensaje= "Las contraseñas nuevas no coinciden";
            }
        } else {
            mensaje= "Los campos no pueden estar vacios";
        }
    //Cancela las funciones basicas del boton submit y evita regrescar la pagina
    e.preventDefault();
});
