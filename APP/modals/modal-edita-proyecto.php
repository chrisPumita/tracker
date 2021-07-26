<!-- Modal Edita proyecto-->
<div class="modal fade" id="modalEditaProyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Editar detalles del proyecto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        Edite la informacion basica del proyecto que selecciono
                    </div>
                    <div class="card-body" id="cardProyectos">
                        <form id="frm-add-new-proyect">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nombrep" name="nombre" type="text" placeholder="Enter your first name" required="">
                                <label for="nombre">Nombre proyecto</label>
                            </div>
                            <!--Put a select Item this row like GT, Categoria -->
                            <label for="gt">Grupo de Trabajo</label>
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm" id="grupot" name="grupot" type="text" required="" aria-label=".form-select-sm example">
                                </select>
                            </div>
                            <label for="categoria">Categoria</label>
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm" id="categoria" name="categoria" type="text" required="" aria-label=".form-select-sm example">
                                </select>
                                <input id="imgCat" name="imgCat" type="hidden" required="" value="https://wiki.guildwars2.com/images/thumb/a/a0/Elementalist_tango_icon_200px.png/128px-Elementalist_tango_icon_200px.png">
                            </div>
                            <div class="row">
                                <div class="form-floating mb-3 col-md-2 pr-1">
                                    <input class="form-control" id="dias" name="dias" type="number" placeholder="Ingrese tiempo en dias" required="">
                                    <label for="dias">Dias</label>
                                </div>
                                <div class="form-floating mb-3 col-md-5 pr-1">
                                    <input class="form-control" id="fecha_inicio" name="fecha_inicio" type="date" placeholder="Ingrese tiempo en dias" required="">
                                    <label for="fecha_inicio">Fecha Inicio</label>
                                </div>
                                <label for="categoria">Tipo Jornada</label>
                                <div class="form-floating mb-3 col-md-3 pr-3">
                                    <select class="form-select form-select-sm" id="jornada" name="jornada" type="text" required="" aria-label=".form-select-sm example">
                                        <option>--- SELECCIONA ---</option>
                                        <option value="1">Lunes - Viernes</option>
                                        <option value="2">Lunes - Sabado</option>
                                        <option value="3">Lunes - Domingo</option>
                                        <option value="4">Fines de semana (S-D)</option>
                                    </select>
                                </div>
                            </div>

                            <!--Hacer select Menu -->
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" id="btnEnviar" name="btnEnviar" value="Registrar" class="btn btn-primary btn-user btn-block">
                                </div>
                            </div>
                        </form>
                        <span id="mjeAlertaAU">
                            <!-- Mje ajax-->
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal AGREGA ETAPA -->
<div class="modal fade" id="modalAddEtapa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Agregar Etapa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frm-add-etapa">
                    <div class="card mb-4">
                        <div class="card-header">
                            <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                            Agregar etapas al proyecto
                        </div>
                        <div class="form-floating col-mb-3 py-2">
                            <input class="form-control" id="nombreE" name="nombreE" type="text" placeholder="Enter your first name" required="">
                            <label for="nombre">Nombre de la etapa</label>
                            <input type="hidden" id="idProyectoInsert">
                        </div>
                        <div class ="row"> 
                            <div class="form-floating mb-3 col-md-2 pr-1">
                                <input class="form-control" id="diasE" name="diasE" type="number" placeholder="Ingrese tiempo en dias" required="">
                                <label for="dias">Dias</label>
                            </div>
                            <div class="form-floating mb-3 col-md-5 pr-1">
                                <input class="form-control" id="fecha_inicioE" name="fecha_inicio" type="date" placeholder="Ingrese tiempo en dias" required="">
                                <label for="fecha_inicio">Fecha Inicio</label>
                            </div>
                            <div class="form-floating mb-3 col-md-2 pr-1">
                                <input class="form-control" id="indiceE" name="indiceE" min="1" type="number" placeholder="Numero de etapa" required="" value="1">
                                <label for="dias">Numero de etapa</label>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input type="submit" id="btnEnviar" name="btnEnviar" value="Crear Etapa" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div>
                        <span id="mjeAlertaAUE">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal  ENVIAR EMAIL -->
<div class="modal fade" id="modalSendMail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Envia un link con quien quieras compartir el avance de <strong><span id="nameProyectModal"></span></strong> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="frm-share">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="email-share" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="email-share" placeholder="name@example.com" required="">
                        <input type="hidden" id="proyectoName"  required>
                        <input type="hidden" id="noSeguimiento"  required>
                    </div>
                    <span id="mensaje"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" id="btnEnviar" name="btnEnviar"  value="Enviar Link" class="btn btn-primary btn-user btn-block">
                </div>
            </form>
            <span id="mjeShare"></span>
        </div>
    </div>
</div>
  
<!-- Modal ELIMINA PROYECTO-->
<div class="modal fade" id="modalDeleteProyect" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Proyecto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6> <p>¿Esta seguro de que desea eliminar el proyecto? </p></h6>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <div>
                        No podra recuperarlo una vez eliminado
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-danger btnDeleteProyectDef">Si, eliminalo</button>
            </div>
        </div>
    </div>
</div>


<!--Modal CREAR GRUPO DE TRABAJO -->
<div class="modal fade" id="modalAddGt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Crear grupo de trabajo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frm_add_gt">
                    <div class="card mb-4">
                        <div class="card-header">
                            <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                            Crea un nuevo grupo de trabajo
                        </div>
                        <div class="form-floating col-mb-3 py-2">
                            <input class="form-control" id="nombreGt" name="nombreE" type="text" placeholder="Enter your first name" required="">
                            <label for="nombre">Nombre del grupo de trabajo</label>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input type="submit" id="btnEnviar" name="btnEnviar" value="Crear grupo" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div>
                        <span id="mjeAlertaAUGt">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal AGREGAR SUB ETAPA -->
<div class="modal fade" id="modalAddSubetapa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar/Agregar subetapa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frm-add-sub-etapa">
                    <div class="card mb-4">
                        <div class="card-header">
                            <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                            Agregar Subetapa  <input type="hidden" class="form-control" id="recipient-name" >
                        </div>
                        <div class="form-floating col-mb-3 py-2">
                            <input class="form-control" id="nombreSE" name="nombre" type="text" placeholder="Enter your first name" required="">
                            <label for="nombre">Nombre de la Subetapa</label>
                            
                        </div>
                        <div class ="row"> 
                            <div class="form-floating mb-3 col-md-2 pr-1">
                                <input class="form-control" id="diasSE" name="dias" type="number" placeholder="Ingrese tiempo en dias" required="">
                                <label for="dias">Dias</label>
                            </div>
                            <div class="form-floating mb-3 col-md-5 pr-1">
                                <input class="form-control" id="fecha_inicioSE" name="fecha_inicio" type="date" placeholder="Ingrese tiempo en dias" required="">
                                <label for="fecha_inicio">Fecha Inicio</label>
                            </div>
                            <div class="form-floating mb-3 col-md-5 pr-1">
                                <input class="form-control" id="indiceSE" name="indiceSE" type="number" min="1" placeholder="Numero de la subetapa" required="" value="1">
                                <label for="fecha_inicio">Indice</label>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input type="submit" id="btnEnviar" name="btnEnviar" value="Crear Etapa" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div>
                        <span id="mjeAlertaAUSE"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
var exampleModal = document.getElementById('modalAddSubetapa')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'Agregar Sub-Etapa';
  modalBodyInput.value = recipient
})
</script>

