<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toritogrill";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(array("status" => "error", "message" => "Conexión fallida: " . $conn->connect_error)));
}

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

// Verificar si la fecha y el turno ya están ocupados
$sql = "SELECT * FROM contratos WHERE fecha_evento = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $fecha_evento);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(array("status" => "error", "message" => "La fecha y el turno seleccionados ya están ocupados."));
} else {
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO contratos (nombres, dni, celular, tipo, email, fecha_evento) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nombres, $dni, $celular, $tipo, $email, $fecha_evento);

    if ($stmt->execute()) {
        // Enviar el correo electrónico solo si la inserción fue exitosa
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
        echo json_encode(array("status" => "error", "message" => "Error al realizar el contrato."));
    }
}
?>
