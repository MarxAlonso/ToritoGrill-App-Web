<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toritogrill";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener todos los platillos
$sql = "SELECT * FROM menus";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de la Pollería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .menu-item {
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            overflow: hidden;
            margin-bottom: 1rem;
            cursor: pointer;
            height: 300px; /* Altura fija para el card */
        }

        .menu-item img {
            width: 100%;
            height: 200px; /* Altura fija para la imagen */
            object-fit: cover; /* Ajusta la imagen para cubrir el contenedor */
        }

        .modal-content img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <h1 class="mb-4">Menú de la Pollería</h1>
        <div class="row" id="menu-list">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $modalId = 'menuModal' . $row['id']; // ID único para cada modal
                    echo '<div class="col-md-4">';
                    echo '<div class="menu-item card" data-bs-toggle="modal" data-bs-target="#' . $modalId . '">';
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagen']) . '" class="card-img-top" alt="' . htmlspecialchars($row['nombre']) . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row['nombre']) . '</h5>';
                    echo '<p class="card-text">' . htmlspecialchars($row['descripcion']) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    // Modal para cada platillo
                    echo '<div class="modal fade" id="' . $modalId . '" tabindex="-1" aria-labelledby="' . $modalId . 'Label" aria-hidden="true">';
                    echo '<div class="modal-dialog modal-lg">';
                    echo '<div class="modal-content">';
                    echo '<div class="modal-header">';
                    echo '<h5 class="modal-title" id="' . $modalId . 'Label">' . htmlspecialchars($row['nombre']) . '</h5>';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                    echo '</div>';
                    echo '<div class="modal-body">';
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagen']) . '" class="img-fluid" alt="' . htmlspecialchars($row['nombre']) . '">';
                    echo '<p><strong>Descripción:</strong> ' . htmlspecialchars($row['descripcion']) . '</p>';
                    echo '<p><strong>Precio:</strong> $' . htmlspecialchars($row['precio']) . '</p>';
                    echo '<p><strong>Contiene:</strong> ' . htmlspecialchars($row['contiene']) . '</p>';
                    echo '<p><strong>Condimentos:</strong> ' . htmlspecialchars($row['condimentos']) . '</p>';
                    echo '<p><strong>Gaseosa de Cortesía:</strong> ' . ($row['gaseosa_cortesia'] ? 'Sí' : 'No') . '</p>';
                    echo '</div>';
                    echo '<div class="modal-footer">';
                    echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="col-12"><p>No hay platillos disponibles.</p></div>';
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
