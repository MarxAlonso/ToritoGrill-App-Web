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
<style>
    .menu-item {
        border: 5px solid #ddd;
        border-radius: 0.5rem;
        overflow: hidden;
        margin-bottom: 1rem;
        cursor: pointer;
        height: 390px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        margin-right: 25px;
    }

    .menu-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .menu-item:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        border-color: #ffc107;
    }

    .modal-content img {
        width: 100%;
        height: auto;
    }

    @media (max-width: 574px) {
        .menu-item {
            height: 400px;
        }
    }
</style>
<div class="container my-4">
    <h1 class="mb-4" id="title">Platillos de la Carta</h1>

    <!-- Filtro de Categoría -->
    <div class="row mb-4">
        <div class="col-md-2">
            <select id="categoryFilter" class="form-select">
                <option value="all">Todos</option>
                <option value="Parrilla">Parrilla</option>
                <option value="Entradas a la Parrilla">Entradas a la Parrilla</option>
                <option value="Pollos">Pollos</option>
                <option value="Gourmet">Gourmet</option>
                <option value="Criollos">Criollos</option>
                <option value="Sopas Criollas">Sopas Criollas</option>
                <option value="Cocktails">Cocktails</option>
                <option value="Infusiones">Infusiones</option>
                <option value="Jugos 1 Jarra">Jugos 1 Jarra</option>
            </select>
        </div>
    </div>

    <!-- Buscador -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" id="search" class="form-control" placeholder="Buscar platos por nombre">
                <span class="input-group-text">
                    <i class="bi bi-search"></i>
                </span>
            </div>
        </div>
        <div class="col-md-6 text-end">
            <button id="sortAsc" class="btn btn-warning">Menor Precio</button>
            <button id="sortDesc" class="btn btn-danger">Mayor Precio</button>
        </div>
    </div>

    <div class="row" id="menu-list">
        <!-- Aquí se mostrarán los platillos -->
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $modalId = 'menuModal' . $row['id']; // ID único para cada modal
                echo '<div class="col-md-4 p-2 menu-item" data-name="' . htmlspecialchars($row['nombre']) . '" data-price="' . $row['precio'] . '" data-category="' . htmlspecialchars($row['categoria']) . '">';
                echo '<div class="" data-bs-toggle="modal" data-bs-target="#' . $modalId . '">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagen']) . '" class="card-img-top" alt="' . htmlspecialchars($row['nombre']) . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($row['nombre']) . '</h5>';
                echo '<p class="card-text">' . htmlspecialchars($row['descripcion']) . '</p>';
                echo '<p class="card-text"><strong>Categoría:</strong> ' . htmlspecialchars($row['categoria']) . '</p>';
                echo '<p class="card-text"><b>Precio:</b> ' . htmlspecialchars($row['precio']) . '</p>';
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
                echo '<p><strong>Categoría:</strong> ' . htmlspecialchars($row['categoria']) . '</p>';
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search');
        const sortAscButton = document.getElementById('sortAsc');
        const sortDescButton = document.getElementById('sortDesc');
        const categoryFilter = document.getElementById('categoryFilter');
        const title = document.getElementById('title');
        const menuList = document.getElementById('menu-list');
        const menuItems = Array.from(menuList.getElementsByClassName('menu-item'));

        // Función para filtrar platillos por nombre
        searchInput.addEventListener('input', function() {
            const searchValue = searchInput.value.toLowerCase();
            filterAndDisplay();
        });

        // Función para ordenar los platillos por precio (ascendente)
        sortAscButton.addEventListener('click', function() {
            const sortedItems = menuItems.sort(function(a, b) {
                return parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price'));
            });
            sortedItems.forEach(function(item) {
                menuList.appendChild(item);
            });
        });

        // Función para ordenar los platillos por precio (descendente)
        sortDescButton.addEventListener('click', function() {
            const sortedItems = menuItems.sort(function(a, b) {
                return parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price'));
            });
            sortedItems.forEach(function(item) {
                menuList.appendChild(item);
            });
        });

        // Función para filtrar platillos por categoría y nombre
        categoryFilter.addEventListener('change', function() {
            const selectedCategory = categoryFilter.value;
            title.textContent = selectedCategory === 'all' ? 'Platillos de la Carta' : selectedCategory;
            filterAndDisplay();
        });

        function filterAndDisplay() {
            const searchValue = searchInput.value.toLowerCase();
            const selectedCategory = categoryFilter.value;

            menuItems.forEach(function(item) {
                const itemName = item.getAttribute('data-name').toLowerCase();
                const itemCategory = item.getAttribute('data-category');

                if ((itemName.includes(searchValue)) &&
                    (selectedCategory === 'all' || itemCategory === selectedCategory)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    });
</script>