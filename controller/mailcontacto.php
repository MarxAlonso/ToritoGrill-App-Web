<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

//$alert =  "";
function DateGet()
{
    date_default_timezone_set('America/Lima');
    $hoy = date('Y-m-d h:i a');
    return $hoy;
}

if (isset($_POST["nombres"])) {
    $nombres = $_POST["nombres"];
} else {
    $nombres = null;
};

if (isset($_POST["celular"])){
    $celular = $_POST["celular"];
} else {
    $celular = null;
};

if (isset($_POST["email"])) {
    $email = $_POST["email"];
} else {
    $email = null;
};
if (isset($_POST["dni"])) {
  $dni = $_POST["dni"];
} else {
  $dni = null;
};
if (isset($_POST["tipoSeguro"])) {
  $tipoSeguro = $_POST["tipoSeguro"];
} else {
  $tipoSeguro = null;
};
if (isset($_POST["mensajePersona"])) {
  $mensajePersona = $_POST["mensajePersona"];
} else {
  $mensajePersona = null;
};


$fecha = '<strong>Fecha: </strong>' . DateGet(). "\n";

if ($nombres != null && $celular != null && $email != null && $dni != null && $dni != null && $tipoSeguro != null && $mensajePersona != null ) {
   // $mail = new PHPMailer(true);
   try {
      //$mail->SMTPDebug = 0;
      $mail->isSMTP();
      $mail->CharSet = 'UTF-8';
      $mail->SMTPAuth   = true;
     $mail->Host       = 'smtp.gmail.com';
      $mail->Username   = 'marxchip99@gmail.com';
      $mail->Password   = 'qdsmbzeoxzpmxrgv';
      $mail->SMTPSecure = PHPMAiler::ENCRYPTION_SMTPS;
      $mail->Port       = 465;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('toritogrill@org.com', 'Torito Grill');
     //Add a recipient
     $mail->addAddress('marxchip99@gmail.com');

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Torito Grill Contacto';
      $mail->Body    =  "$fecha <br> <h3>Nombres : $nombres <br>Celular: $celular <br>DNI : $dni <br>Seguro : $tipoSeguro <br> Mensaje : $mensajePersona</h3>";

      $mail->send();

      echo 'exito';

   } catch (Exception $e) {
      $alert = '<div class="alert-error">
      <span>' . $e->getMessage() . '</span>
    </div>';
   }
}
