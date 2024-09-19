<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

// URL de la API de Spring Boot
$api_url = "http://localhost:8081/api/contratos/create";

// Recibir y validar los datos del formulario
$required_fields = ['nombres', 'dni', 'celular', 'tipo', 'email', 'eventDate'];
$valid = true;

foreach ($required_fields as $field) {
    if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
        $valid = false;
        break;
    }
}

if (!$valid) {
    echo json_encode(array("status" => "error", "message" => "Por favor, complete todos los campos requeridos."));
    exit;
}

$nombres = $_POST['nombres'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];
$tipo = $_POST['tipo'];
$email = $_POST['email'];
$fecha_evento = $_POST['eventDate'];

// Crear los datos que serán enviados a la API
$contrato_data = json_encode([
    'nombres' => $nombres,
    'dni' => $dni,
    'celular' => $celular,
    'tipo' => $tipo,
    'email' => $email,
    'fechaevento' => $fecha_evento  // Esta es la fecha elegida por el usuario
]);

// Enviar solicitud a la API de Spring Boot
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($contrato_data)
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $contrato_data);

$response = curl_exec($ch);
$response_data = json_decode($response, true);

if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200) {
    curl_close($ch);

    // Si la solicitud a la API fue exitosa, enviar el correo electrónico
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'marxchip99@gmail.com';
        $mail->Password = 'qdsmbzeoxzpmxrgv';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('toritogrill@org.com', 'Torito Grill');
        $mail->addAddress('marxchip99@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Torito Grill Contacto';
        $mail->Body = "<strong>Fecha:</strong> " . date('Y-m-d h:i a') . "<br>
            <h3>Nombres: $nombres<br>
            Tipo de Servicio: $tipo<br>
            DNI: $dni<br>
            Celular: $celular<br>
            Dia del Evento: $fecha_evento<br>
            Correo: $email<br>";

        $mail->send();
        echo json_encode(array("status" => "success", "message" => "Contrato realizada y correo enviado con éxito."));
    } catch (Exception $e) {
        echo json_encode(array("status" => "error", "message" => "Contrato realizada, pero error al enviar el correo: " . $mail->ErrorInfo));
    }

} else {
    // Si la API devuelve un error (como conflicto de fecha), lo mostramos al usuario
    curl_close($ch);
    echo json_encode(array("status" => "error", "message" => $response_data));
}
