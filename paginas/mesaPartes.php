<?php
  include "./layouts/header.php";
?>

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">

              <!-- BEGIN: Sección -->
              <div class="row">
                <div class="col s1 m1 l1">
                </div>
                <div class="col s10 m10 l10">
                  <div id="button-trigger" class="card card card-default scrollspy">
                    <div class="card-content">

                      <!-- BEGIN: Formulario -->
                      <h3 class="card-title green center-align white-text negrita pt-1 pb-1 mb-3">REGISTRO DE EXPEDIENTES</h3>
                      <form id="formulario" name="formulario">

                        <div class="row">
                          <div class="input-field col s12 mb-0">
                            <p>Apellidos y Nombres / Empresa: <span class="camposRequeridos">*</span></p>
                            <input class="validate" id="inp_remitente" type="text" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col m6 s12 mb-0">
                            <p>Tipo de documento: <span class="camposRequeridos">*</span></p>
                            <select class="select2 browser-default" id="inp_tipoDocumento">
                              <option value="DNI">DNI</option>
                              <option value="RUC">RUC</option>
                              <option value="PASAPORTE">PASAPORTE</option>
                              <option value="CARNET DE EXTRANJERIA">CARNET DE EXTRANJERIA</option>
                              <option value="OTROS">OTROS</option>
                            </select>
                          </div>
                          <div class="input-field col m6 s12 mb-0">
                            <p>Número de documento: <span class="camposRequeridos">*</span></p>
                            <input class="validate" id="inp_numeroDocumento" type="text" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col m6 s12 mb-0">
                            <p>Número de celular: <span class="camposRequeridos">*</span></p>
                            <input class="validate" id="inp_numeroCelular" type="text" />
                          </div>
                          <div class="input-field col m6 s12 mb-0">
                            <p>Correo electrónico: <span class="camposRequeridos">*</span></p>
                            <input class="validate" id="inp_correoElectronico" type="email" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12 mb-0">
                            <p>Trámite a realizar: <span class="camposRequeridos">*</span></p>
                            <input class="validate" id="inp_tipoTramite" type="text" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12 mb-0">
                            <p>Descripción: <span class="camposRequeridos">*</span></p>
                            <textarea class="materialize-textarea validate" id="inp_descripcion" name="inp_descripcion" data-length="120"></textarea>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s12 mb-0">
                            <p>Adjuntar documentos: <span class="camposRequeridos">*</span></p>
                            <div class="file-field input-field">
                              <div class="btn">
                                <span><i class="material-icons">folder_open</i></span>
                                <input id="archivo" name="archivo" type="file" accept="application/pdf" multiple>
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" id="inp_archivo" name="inp_archivo"  type="text" placeholder="Adjuntar documentos">
                              </div>
                          </div>
                        </div>


                        <div class="row">
                          <!--<input id="archivo" name="archivo" type="file" accept="application/pdf" multiple />-->
                        </div>

                        <!--<div class="row">
                          <input id="sortpicture" type="file" name="sortpic" multiple />
                          <button id="upload">Upload</button>
                        </div>-->

                        <!--<div class="row">
                          <div class="input-field col s12 mb-0">
                            <p>Adjuntar documentos: <span class="camposRequeridos">*</span></p>
                            <div class="file-field input-field">
                              <div class="btn">
                                <span>File</span>
                                <input type="file" multiple>
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Adjuntar documentos">
                              </div>
                              </div>
                          </div>
                        </div>-->

                        <!--<div class="row">
                          <div class="input-field col s12 mb-0">
                            <p>Maximum file upload size 2MB.</p>
                            <input type="file" id="input-file-max-" multiple class="dropify" data-max-file-size="2M" />
                          </div>
                        </div>-->

                        <div class="row">
                          <div class="input-field col l2 m4 s6 right mt-3 mb-0">

                            <input type="hidden" id="token" name="token" value="">
                            <input type="hidden" id="action" name="action" value="procesar">

                            <a class="btn btn-large green waves-effect waves-light right col s12" id="btnEnviar" type="submit" name="btnEnviar">Guardar
                            </a>
                          </div>
                          <div class="input-field col l2 m4 s6 right mt-3 mb-0">
                            <a class="btn btn-large grey darken-1 waves-effect waves-light col s12" href="../">Regresar</a>
                          </div>
                        </div>
                      </form>
                      <!-- END: Formulario -->
                    </div>
                  </div>
                </div>
                <div class="col s1 m1 l1">
                </div>
              </div>
              <!-- END: Sección -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Ventana modal -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Mensaje</h4>
        <p id="out_mensaje"></p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
      </div>
    </div>
  <!-- END: Ventana moda -->

<?php
  include "./layouts/footer.php";
?>