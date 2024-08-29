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

if (isset($_POST["location"])) {
    $location = $_POST["location"];
} else {
    $location = null;
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
if (isset($_POST["peopleCount"])) {
    $peopleCount = $_POST["peopleCount"];
} else {
    $peopleCount = null;
};
if (isset($_POST["salas"])) {
    $salas = $_POST["salas"];
} else {
    $salas = null;
};
if (isset($_POST["celular"])) {
    $celular = $_POST["celular"];
} else {
    $celular = null;
};


$fecha = '<strong>Fecha: </strong>' . DateGet() . "\n";

if ($nombres != null && $location != null && $email != null && $dni != null && $peopleCount != null) {
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
        $mail->Body    =  "$fecha <br> <h3>Nombres : $nombres <br>Local: $location <br>Sala: $salas <br>DNI : $dni <br>Celular: $celular <br>Correo : $email <br> Cantidad de Persona : $peopleCount</h3>";

        $mail->send();

        $response['status'] = 'success';
        $response['message'] = 'El formulario se ha enviado correctamente.';
    } catch (Exception $e) {
        $response['status'] = 'error';
        $response['message'] = 'Error al enviar el mensaje: ' . $mail->ErrorInfo;
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Por favor, complete todos los campos requeridos.';
}

echo json_encode($response);
