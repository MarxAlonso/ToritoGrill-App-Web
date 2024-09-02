<!-- ============================================ -->
<!--                    Contratos                -->
<!-- ============================================ -->

<section id="services" class="bg-dark text-white py-5">
    <div class="container">
        <!-- Imagen superior con borde rojo -->
        <div class="mb-4">
            <img src="views/img/nosotros1.webp" alt="staff Torito Grill" class="img-fluid border border-danger">
        </div>
        
        <!-- Contenido principal -->
        <div class="text-center mb-5">
            <span class="text-danger font-weight-bold text-uppercase">Nuestros Servicios</span>
            <h2 class="display-4 mt-2 mb-4">Contrata Nuestros Servicios</h2>
            <p class="lead mx-auto" style="max-width: 800px;">
                En Torito Grill, ofrecemos una amplia gama de servicios para hacer de tu evento una experiencia inolvidable. Ya sea que estés planeando una reunión, fiesta, boda, o cualquier tipo de celebración, contamos con opciones flexibles y de la más alta calidad para satisfacer tus necesidades.
            </p>
        </div>

        <!-- Tarjetas de servicio -->
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="card border-light shadow-sm h-100 transition-transform hover:scale-105">
                    <div class="card-body">
                        <h3 class="card-title text-danger">Contratación de Chefs</h3>
                        <div class="mb-3">
                            <span class="d-block text-muted">Cocineros Profesionales</span>
                            <span class="d-block text-muted">Fiestas y Reuniones</span>
                        </div>
                        <p class="card-text">
                            Disfruta de la presencia de nuestros talentosos chefs en tu evento. Ya sea para una fiesta privada, quinceañero, cumpleaños, o cualquier otra ocasión especial, nuestros chefs harán que tu comida sea inolvidable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card border-light shadow-sm h-100 transition-transform hover:scale-105">
                    <div class="card-body">
                        <h3 class="card-title text-danger">Servicio de Bartender</h3>
                        <div class="mb-3">
                            <span class="d-block text-muted">Bartenders Profesionales</span>
                            <span class="d-block text-muted">Preparación de Cócteles</span>
                        </div>
                        <p class="card-text">
                            Contrata a nuestros bartenders para que preparen los mejores cócteles en tu fiesta. Hacemos que cada bebida sea una obra de arte que tus invitados disfrutarán.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="#" style="text-decoration: none;" class="cs-button-solid py-3 px-3 mt-3 boton-contratar btn btn-danger" data-bs-toggle="modal" data-bs-target="#formModal">Contratar</a>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Formulario de Contratos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="contratoForm" action="controller/contratarservicio.php" method="post">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                    </div>
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" required>
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="number" class="form-control" id="celular" name="celular" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo de Servicio</label>
                        <select class="form-select" id="tipo" name="tipo" required>
                            <option value="" disabled selected>Selecciona un servicios</option>
                            <option value="Contratar Chef">Contratar Chef</option>
                            <option value="Contratar Bartender">Contratar Bartender</option>
                        </select>
                    </div>
                    <div id="roomOptions" class="mb-3"></div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Fecha del Evento</label>
                        <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contratoForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const formData = new FormData(form);

            fetch('controller/contratarservicio.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        Swal.fire({
                            title: 'Éxito',
                            text: data.message,
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        });
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: data.message,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: 'Error',
                        text: 'Fecha no disponible',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                });
        });
    });
</script>

<!-- CSS adicional -->
<style>
    .transition-transform {
        transition: transform 0.3s ease;
    }

    .hover\:scale-105:hover {
        transform: scale(1.05);
    }

    .border-danger {
        border-color: #dc3545 !important;
    }
</style>
