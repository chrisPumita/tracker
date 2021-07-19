<!-- Modal -->
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
                                    <option value="-7">Grupo Firme</option>

                                    <option value="3">Programadores Unidos</option>

                                    <option value="4">Team Sarcasmo</option>

                                    <option value="5">Equipo Dinamita</option>

                                    <option value="6">Equipo alfa buena maravilla onda dinamita escuadrón lobo</option>
                                </select>
                            </div>
                            <label for="categoria">Categoria</label>
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm" id="categoria" name="categoria" type="text" required="" aria-label=".form-select-sm example">
                                    <option value="53">Administración </option>

                                    <option value="51">Agropecuaria</option>

                                    <option value="52">Sistemas</option>

                                    <option value="50">Tecnologia</option>
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


<!-- Modal -->
<div class="modal fade" id="modalAddEtapa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Agregar Etapa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        Agregar etapas al proyecto
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
                                    <option value="-7">Grupo Firme</option>

                                    <option value="3">Programadores Unidos</option>

                                    <option value="4">Team Sarcasmo</option>

                                    <option value="5">Equipo Dinamita</option>

                                    <option value="6">Equipo alfa buena maravilla onda dinamita escuadrón lobo</option>
                                </select>
                            </div>
                            <label for="categoria">Categoria</label>
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm" id="categoria" name="categoria" type="text" required="" aria-label=".form-select-sm example">
                                    <option value="53">Administración </option>

                                    <option value="51">Agropecuaria</option>

                                    <option value="52">Sistemas</option>

                                    <option value="50">Tecnologia</option>
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




<!-- Modal -->
<div class="modal fade" id="modalSendMail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enviar vista del proyecto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalAddSubetapa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar/Agregar subetapa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>