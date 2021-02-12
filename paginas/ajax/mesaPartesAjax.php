<?php
  require_once '../../utilidades/utilidades.php';

  switch ($_GET["op"])
  {
    case 'enviar':
      $ruta = '../../archivos/';
      $validar = true;

      $utilidades = new Utilidades();
      /*$validarCampos = $utilidades->validarCamposMesaPartes($_POST['inp_remitente'], $_POST['inp_tipoDocumento'], $_POST['inp_numeroDocumento'], $_POST['inp_numeroCelular'],
      $_POST['inp_correoElectronico'], $_POST['inp_tipoTramite'], $_POST['inp_descripcion'], $_POST['inp_archivo']);

      if ($validarCampos)
      {
        $jsondata["success"] = 'Campos validados bien';
      }
      else
      {
        $jsondata["success"] = 'Error al validar campos';
      }*/


      $validarRecaptcha = $utilidades->validarRecaptchaMesaPartes($_POST['token'], $_POST['action']);



      /*foreach ($_FILES as $key)
      {
        if ($key['error'] == UPLOAD_ERR_OK)
        {
          $nombreArchivo = $key['name'];
          $temporal = $key['tmp_name'];
          $destino = $ruta . $nombreArchivo;
            
          move_uploaded_file($temporal, $destino);

        }
        else
        {
          $validar = false;
          break;
        }
      }

      if ($validar)
      {
        $jsondata["success"] = 'Archivos subidos correctamente.';
      }
      else
      {
        $jsondata["success"] = 'Error al subir archivos.';
      }*/

      //$valor = $_POST['token'];
      $jsondata["success"] = $validarRecaptcha;

      echo json_encode($jsondata);
      break;

    case 'mostrarCargos':
      
      break;
  }
?>