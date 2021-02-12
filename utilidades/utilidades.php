<?php
	class Utilidades
	{
    
		public function validarCamposMesaPartes($inp_remitente, $inp_tipoDocumento, $inp_numeroDocumento, $inp_numeroCelular, $inp_correoElectronico, $inp_tipoTramite, $inp_descripcion, $inp_archivo)
    {
      $inp_remitente = trim($inp_remitente);
      $inp_tipoDocumento = trim($inp_tipoDocumento);
      $inp_numeroDocumento = trim($inp_numeroDocumento);
      $inp_numeroCelular = trim($inp_numeroCelular);
      $inp_correoElectronico = trim($inp_correoElectronico);
      $inp_tipoTramite = trim($inp_tipoTramite);
      $inp_descripcion = trim($inp_descripcion);
      $inp_archivo = trim($inp_archivo);

      if(empty($inp_remitente) || empty($inp_tipoDocumento) || empty($inp_numeroDocumento) || empty($inp_numeroCelular) || empty($inp_correoElectronico) || empty($inp_tipoTramite) || empty($inp_descripcion) || empty($inp_archivo))
      {
        return false;
      }

      if (!filter_var($inp_correoElectronico, FILTER_VALIDATE_EMAIL))
      {
        return false;
      }

      return true;
    }

    public function validarRecaptchaMesaPartes($token, $action)
    {
      // Colocamos la clave secreta de reCAPTCHA v3 
      define("SECRET_KEY", '6LcuNVMaAAAAAL8RNi5hmFm3AzHriz0sWzmbCpVj'); 
      
      // Mediante CURL hago un Post a la api de reCaptcha 
      $datos = curl_init();
      curl_setopt($datos, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($datos, CURLOPT_POST, 1);
      
      // En el Post a la api de reCaptcha envio la Secret Key y el Token generado en la vista HTML
      curl_setopt($datos, CURLOPT_POSTFIELDS, http_build_query(
        array(
          'secret' => SECRET_KEY, 
          'response' => $token
        )
      ));
  
      // Obtengo una respuesta de reCaptcha y los datos obtenidos los decodifico para poder verificarlos 
      curl_setopt($datos, CURLOPT_RETURNTRANSFER, true); 
      $respuesta = curl_exec($datos);    
      curl_close($datos);
      $datos_respuesta = json_decode($respuesta, true);
      
      
      // Verificamos los datos 
      if($datos_respuesta["success"] == '1' && $datos_respuesta["action"] == $action && $datos_respuesta["score"] >= 0.4)
      {
        // Si no es un robot hago una redirección con un mensaje

        return true;
      }
      else
      {
        return false;
      }

      /*if(empty($inp_remitente) || empty($inp_tipoDocumento) || empty($inp_numeroDocumento) || empty($inp_numeroCelular) || empty($inp_correoElectronico) || empty($inp_tipoTramite) || empty($inp_descripcion) || empty($inp_archivo))
      {
        return false;
      }

      if (!filter_var($inp_correoElectronico, FILTER_VALIDATE_EMAIL))
      {
        return false;
      }*/

      //return true;
    }
	}
?>