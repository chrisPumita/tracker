$(document).ready(function () {
    console.log("Detalles de equipo");
    detallesGrupo();
    construct_table_GTU();
    
});


function detallesGrupo(){
    $.ajax({
        url: "./control/grupo_trabajo-detalle.php",
        type: 'POST',
        data: {
            idGt: $("#idGpo").val()
        },
        success: function (response) {
             //COnvertimos el string a JSO
           let obj_gt = JSON.parse(response);
           console.log(obj_gt);
           template=`
        <h1 class="mt-4">
           <span>${obj_gt[0].nombre_gt}</span>
       </h1>
       
       <ol class="breadcrumb mb-4">
           <li class="breadcrumb-item active">Este grupo se creó el día: <br> </li>
           <li>${obj_gt[0].fecha_creacion}</li>
       </ol>
           `;

             //let templateInput=construct_table_GTU();
           $("#infoGroup").html(template);

        }

    });
}


function construct_table_GTU(){
    $.ajax({
        url: "./control/gtu-detalles.php",
        type: 'POST',
        data: {
            idGt: $("#idGpo").val()
        },
        success: function (response) {
             //COnvertimos el string a JSO
           let obj_gt = JSON.parse(response);
           console.log(obj_gt);
           let contador=0;
           let template='';
           obj_gt.forEach(
               objGt=>{
                   contador++;
                   let estado= getEstado(objGt.estado);
                   let acceso = getAcceso(objGt.permisos)
                 template+=`
                <tr idUserGTU= ${objGt.id_usuario_fk}>
                   <td>${contador}</td>
                   <td>${objGt.nombre} ${objGt.apaterno} ${objGt.amaterno}</td>
                   <td>${objGt.correo}</td>
                   <td>${objGt.user_name}</td>
                   <td>${acceso}</td>
                   <td>${objGt.fecha_union}</td>
                   <td>${estado}</td>
                   <td>
                       <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                           <button type="button" class="btn btn-warning"><i class="fas fa-pause-circle"></i>
                               <button type="button" class="btn btn-danger">
                                   <i class="fas fa-user-minus"></i>
                               </button>

                       </div>
                   </td>
               </tr>
                    `;
                   }
                );
                let templateInputUsers = construct_input_GTU(obj_gt);
                $("#tbl_usuarios_gt").html(template);
                $("#userGTU").html(templateInputUsers);

           
            }

        });
    }

    function getEstado($estado){
        switch($estado){
        case "0":
            return "Inactivo";
            break;
        case "1":
            return "Activo";
            break;
        case "2":
            return "En progreso";
            break;
        case "3":
            return "Finalizado";
            break;
        }
    }
    function getAcceso($acceso){
        switch($acceso){
        case "0":
            return "Usuario";
            break;
        case "1":
            return "Lider";
            break;
        }
    }

    function construct_input_GTU(obj_gt){
        let template='';
           obj_gt.forEach(
               objGt=>{
                 template+=`
                
                 <option value="${objGt.id_usuario_fk}">${objGt.nombre} ${objGt.apaterno} ${objGt.amaterno}</option>

                
                    `;
               }
           );
           return template;
    }