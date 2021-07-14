// lo que sejecuta primero
$(document).ready(function () {
    console.log("funcionana");
    consultaAllProyectos();


        function consultaAllProyectos(){
            $.ajax({
                url: "./control/proyecto-list.php",
                type: 'POST',
                data: {
                    idEmpresa: $("#idEmpresaGeneral").val()
                },
                success: function (response) {
                    //COnvertimos el string a JSON
                   let obj_proyect = JSON.parse(response);
                    console.log(obj_proyect);
                    let template ='';
                    let contador = 0;
                    obj_proyect.forEach(
                        objProyect=>{
                            contador++;
                            let jornada = getTipoJornada(objProyect.tipo_jornada);
                            template += `<tr>
                                        <td>${contador}</td>
                                        <td>${objProyect.nombre_proyecto} </td>
                                        <td>${objProyect.nombre_gt} </td>
                                        <td>${objProyect.fecha_creacion}</td>
                                        <td>${objProyect.dias}</td>
                                        <td>${jornada}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                              <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                                              <button type="button" class="btn btn-warning"><i class="fas fa-user-clock"></i></button>
                                              <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                                            </div>
                                        </td>
                                        </tr>`;
                        }
                    );
                    $('#tbl-proyectos').html(template);
                }
                
            });
            
        }
        
});
function getTipoJornada($jornada) {
    switch ($jornada) {
        case "0":
            return "Normal";
            break;
        case "1":
            return "6 dias";
            break;
        case "2":
            return "7 DIAS";
            break;
    }
}