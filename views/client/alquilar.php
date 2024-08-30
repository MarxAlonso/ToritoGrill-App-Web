<!-- ============================================ -->
<!--                  Services                    -->
<!-- ============================================ -->

<section class="container" id="services-1666">
    <div class="cs-container">
        <div class="cs-image-group">
            <picture class="cs-picture">
                <!--Mobile Image-->
                <source media="(max-width: 600px)" srcset="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/27/5e/46/brinda-en-el-mejor-ambiente.jpg?w=1100&h=-1&s=1">
                <!--Tablet and above Image-->
                <source media="(min-width: 601px)" srcset="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/27/5e/46/brinda-en-el-mejor-ambiente.jpg?w=1100&h=-1&s=1">
                <img loading="lazy" decoding="async" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/27/5e/46/brinda-en-el-mejor-ambiente.jpg?w=1100&h=-1&s=1" width="605" height="690">
            </picture>
            <!--SVG Graphic-->
            <img class="cs-floater" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/white-swirl.svg" alt="graphic" loading="lazy" decoding="async" height="710" aria-hidden="true" width="690">
        </div>
        <div class="cs-content">
            <span class="cs-topper">Nuestros Servicios</span>
            <h2 class="cs-title">ToritoGrill - Alquiler de Salones</h2>
            <p class="cs-text">
                ToritoGrill es un restaurante con dos locales, cada uno equipado con salas de eventos perfectas para cualquier ocasión. Ya sea una fiesta familiar, un cumpleaños, un matrimonio, o una celebración de quinceañera, nuestros salones están diseñados para satisfacer tus necesidades y hacer que tu evento sea inolvidable.
            </p>
            <ul class="cs-faq-group">
                <li class="cs-faq-item active">
                    <button class="cs-button">
                        <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/computer-gold.svg" alt="icon" width="32" height="32">
                        <span class="cs-button-text">
                            Eventos Familiares
                        </span>
                        <span class="cs-indicator" aria-hidden="true"></span>
                    </button>
                    <p class="cs-item-p">
                        Nuestros salones están disponibles para reuniones familiares de cualquier tipo. Disponemos de espacios cómodos y adaptables para que puedas disfrutar de momentos especiales con tus seres queridos. Reserva con anticipación para asegurar la disponibilidad.
                    </p>
                </li>
                <li class="cs-faq-item">
                    <button class="cs-button">
                        <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/calendar-gold.svg" alt="icon" width="32" height="32">
                        <span class="cs-button-text">
                            Celebraciones de Cumpleaños
                        </span>
                        <span class="cs-indicator" aria-hidden="true"></span>
                    </button>
                    <p class="cs-item-p">
                        Celebra tu cumpleaños con nosotros en un ambiente acogedor y festivo. Nuestros salones pueden ser decorados según tu temática y preferencias. Asegúrate de reservar con tiempo para garantizar tu espacio.
                    </p>
                </li>
                <li class="cs-faq-item">
                    <button class="cs-button">
                        <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/map-pin-gold.svg" alt="icon" width="32" height="32">
                        <span class="cs-button-text">
                            Matrimonios y Quinceañeras
                        </span>
                        <span class="cs-indicator" aria-hidden="true"></span>
                    </button>
                    <p class="cs-item-p">
                        Haz de tu matrimonio o quinceañera un evento especial en ToritoGrill. Nuestros amplios salones ofrecen un entorno elegante para estas ocasiones importantes. Te recomendamos reservar con la mayor anticipación posible para asegurar tu fecha y hora preferida.
                    </p>
                </li>
                <li class="cs-faq-item">
                    <button class="cs-button">
                        <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/map-pin-gold-2.svg" alt="icon" width="32" height="32">
                        <span class="cs-button-text">
                            Otros Eventos
                        </span>
                        <span class="cs-indicator" aria-hidden="true"></span>
                    </button>
                    <p class="cs-item-p">
                        Desde reuniones empresariales hasta eventos especiales, nuestros salones están equipados para cualquier ocasión. Contamos con dos ubicaciones convenientes para que elijas la más cercana. Ten en cuenta que la reserva debe hacerse con anticipación para garantizar disponibilidad.
                    </p>
                </li>
            </ul>
            <p class="cs-text">
                Ten en cuenta que para reservar un salón, debes hacerlo con suficiente antelación. En caso de que el salón esté ocupado, te informaremos lo antes posible para que puedas planificar en consecuencia.
            </p>
            <p class="cs-text">
                Ubicaciones:
            <ul>
                <li><strong>Local 1:</strong> Av. Principal 123, Distrito A</li>
                <li><strong>Local 2:</strong> Calle Secundaria 456, Distrito B</li>
            </ul>
            La disponibilidad de los salones es limitada y la empresa no ofrece servicio de transporte a los locales.
            </p>
            <a href="#" class="cs-button-solid" data-bs-toggle="modal" data-bs-target="#formModal">Reserva tu salón</a>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Formulario de Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="reservationForm" action="controller/alquilarlocal.php" method="post">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                    </div>
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" required>
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">CELULAR</label>
                        <input type="number" class="form-control" id="celular" name="celular" required>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Local</label>
                        <select class="form-select" id="location" name="location" required>
                            <option value="" disabled selected>Seleccione un local</option>
                            <option value="local1">Local 1</option>
                            <option value="local2">Local 2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Sala</label>
                        <select class="form-select" id="salas" name="salas" required>
                            <option value="" disabled selected>Seleccione una Sala</option>
                            <option value="sala1">Sala 1</option>
                            <option value="sala2">Sala 2</option>
                            <option value="sala3">Sala 3</option>
                        </select>
                    </div>
                    <div id="roomOptions" class="mb-3"></div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="peopleCount" class="form-label">Cantidad de Personas</label>
                        <input type="number" class="form-control" id="peopleCount" name="peopleCount" required>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('reservationForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const formData = new FormData(form);

            fetch('controller/alquilarlocal.php', {
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
                        text: 'No se pudo enviar el formulario.',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                });
        });
    });
</script>
<script>
    const faqItems = Array.from(document.querySelectorAll('.cs-faq-item'));
    for (const item of faqItems) {
        const onClick = () => {
            item.classList.toggle('active')
        }
        item.addEventListener('click', onClick)
    }
</script>