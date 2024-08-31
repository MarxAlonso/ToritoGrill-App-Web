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
$required_fields = ['nombres', 'dni', 'celular', 'location', 'salas', 'email', 'peopleCount', 'eventDate', 'turnos'];
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
$local = $_POST['location'];
$sala = $_POST['salas'];
$email = $_POST['email'];
$cantidad_personas = $_POST['peopleCount'];
$fecha_evento = $_POST['eventDate'];
$turno = $_POST['turnos'];

// Verificar si la fecha y el turno ya están ocupados
$sql = "SELECT * FROM reservas WHERE fecha_evento = ? AND turno = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $fecha_evento, $turno);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(array("status" => "error", "message" => "La fecha y el turno seleccionados ya están ocupados."));
} else {
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO reservas (nombres, dni, celular, local, sala, email, cantidad_personas, fecha_evento, turno) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssiss", $nombres, $dni, $celular, $local, $sala, $email, $cantidad_personas, $fecha_evento, $turno);

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
                Local: $local<br>
                Sala: $sala<br>
                DNI: $dni<br>
                Celular: $celular<br>
                Dia del Evento: $fecha_evento<br>
                Turno del Evento: $turno<br>
                Correo: $email<br>
                Cantidad de Personas: $cantidad_personas</h3>";

            $mail->send();
            echo json_encode(array("status" => "success", "message" => "Reserva realizada y correo enviado con éxito."));
        } catch (Exception $e) {
            echo json_encode(array("status" => "error", "message" => "Reserva realizada, pero error al enviar el correo: " . $mail->ErrorInfo));
        }
    } else {
        echo json_encode(array("status" => "error", "message" => "Error al realizar la reserva."));
    }
}
?>
