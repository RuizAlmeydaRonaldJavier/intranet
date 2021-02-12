<?php
  //require './PHPMailer/src/Exception.php';
  require './PHPMailer/src/PHPMailer.php';
  require './PHPMailer/src/SMTP.php';

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  //use PHPMailer\PHPMailer\Exception;
  
  $mail = new PHPMailer(true);
  
  try
  {
    /* BEGIN: Variables de configuración */
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'municipalidadchincha2020@gmail.com';
    $mail->Password   = 'Mpch2020';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    /* END: Variables de configuración */
  
    /* BEGIN: Encabezado del correo */
    $mail->setFrom('municipalidadchincha2020@gmail.com', 'SERVICIOS MUNICIPALES - MUNICIPALIDAD PROVINCIAL DE CHINCHA');
    $mail->addAddress('municipalidad.chincha.2019.2022@gmail.com', 'SERVICIOS MUNICIPALES');
    //$mail->addCC('cassano9703@gmail.com');
    /* END: Encabezado del correo */
  
    /* BEGIN: Contenido del correo */
    $mail->isHTML(true);
    $mail->Subject = 'MESA DE PARTES VIRTUAL - PRESENTACION DE EXPEDIENTES';

    $message = "<html><body>";


    $message .= "<p>No responder este correo. prueba d eniviar para otro correo</p>";

    $message .= "<br><br><p>Atentamente,</p>";

    $message .= "<br><p>Servicios Municipales</p>";
    $message .= "<p>Gerencia de Sistemas y Procesos</p>";
    $message .= "<p>Municipalidad Provincial de Chincha</p>";

    $message .= "</body></html>";


    $mail->Body    = $message;

    $mail->AltBody    = $message;
    /* END: Contenido del correo */

    /* BEGIN: Documentos adjuntos */
    $mail->addAttachment('./imagenes/phpmailer_mini.png');
    /* BEGIN: Documentos adjuntos */
  
    $mail->send();
    echo 'Message has been sent';
  }
  catch (Exception $e)
  {

      echo "Message could not be sent. Mailer Error:";
  }

?>