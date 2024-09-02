<!-- ============================================ -->
<!--                    Hero                      -->
<!-- ============================================ -->

<section id="hero-1618" class="hero-section bg-dark text-white py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Hero Content -->
      <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
        <h1 id="typed-output" class="display-4 mb-3" style="font-weight: bold;"></h1>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            var options = {
              strings: ["Eleva Tu Experiencia Gastronómica con ToritoGrill"],
              typeSpeed: 50,
              backSpeed: 50,
              backDelay: 1000,
              startDelay: 500,
              loop: false 
            };

            var typed = new Typed("#typed-output", options);
          });
        </script>

        <p class="lead mb-4 text-black" style="font-weight: bold;">
          Disfruta de una amplia gama de platillos deliciosos que harán que tus eventos sean inolvidables. En ToritoGrill, nuestra calidad y sabor son incomparables.
        </p>
        <a href="contratos" class="btn btn-primary btn-lg">Contratar Servicios</a>
      </div>
      <!-- Hero Image -->
      <div class="col-lg-6">
        <div class="position-relative">
          <img src="views/img/nosotros1.webp" alt="Torito Grill" class="img-fluid rounded shadow-lg">
        </div>
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <div class="container mt-5">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="card border-light shadow-sm">
          <div class="card-body">
            <i class="bi bi-check-circle mb-3 text-primary" style="font-size: 2rem;"></i>
            <h5 class="card-title">Variedad de Platos Exquisitos</h5>
            <p class="card-text">
              Disfruta de una amplia gama de platillos deliciosos que harán que tus eventos sean inolvidables. En ToritoGrill, nuestra calidad y sabor son incomparables.
            </p>
          </div>
          <br>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card border-light shadow-sm">
          <div class="card-body">
            <i class="bi bi-building mb-3 text-primary" style="font-size: 2rem;"></i>
            <h5 class="card-title">Alquiler de Salones</h5>
            <p class="card-text">
              Ofrecemos cómodos y elegantes salones para todo tipo de eventos, desde fiestas familiares hasta reuniones empresariales. Reserva con anticipación y asegúrate de tener el lugar ideal para tu celebración.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card border-light shadow-sm">
          <div class="card-body">
            <i class="bi bi-person-badge mb-3 text-primary" style="font-size: 2rem;"></i>
            <h5 class="card-title">Contratación de Servicios</h5>
            <p class="card-text">
              Además de alquilar nuestros salones, puedes contratar a nuestros expertos cocineros para tus fiestas privadas y eventos especiales, asegurando un servicio de primera calidad.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<!-- ============================================ -->
<!--                  Services                    -->
<!-- ============================================ -->

<section class="container-fluid" id="services-1666">
    <div class="cs-container">
        <div class="cs-image-group">
            <picture class="cs-picture">
                <!--Mobile Image-->
                <source media="(max-width: 600px)" srcset="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/27/5e/46/brinda-en-el-mejor-ambiente.jpg?w=1100&h=-1&s=1">
                <!--Tablet and above Image-->
                <source media="(min-width: 601px)" srcset="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/27/5e/46/brinda-en-el-mejor-ambiente.jpg?w=1100&h=-1&s=1">
                <img loading="lazy" decoding="async" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/27/5e/46/brinda-en-el-mejor-ambiente.jpg?w=1100&h=-1&s=1" width="605" height="690">
            </picture>
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
                        <label for="celular" class="form-label">Celular</label>
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
                        <label for="salas" class="form-label">Sala</label>
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
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Fecha del Evento</label>
                        <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="salas" class="form-label">Turno</label>
                        <select class="form-select" id="turnos" name="turnos" required>
                            <option value="" disabled selected>Seleccione un Turno</option>
                            <option value="turnoTarde">Turno Tarde</option>
                            <option value="turnoNoche">Turno Noche</option>
                        </select>
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
                        text: 'Fecha no disponible',
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
<br><br>
<section class="conocenos px-4" style="margin-bottom: 50px;">
  <div class="container" style="background-color: #FEF3E4;">
    <div class="row">
      <br>
      <div class="col-md-6 pollito" style="padding: 15px; ">
        <img src="views/img/pollo-1.webp" alt="Pollito" class="img-fluid">
      </div>
      <div class="col-md-6" style="margin-top: 20px; padding: 15px;">
        <p style="font-size: 20px;">
          <b>Conócenos</b><br><br><br>
          Iniciamos en el 2013 con una propuesta diferente, <br>
          luego de hacer un estudio de mercado, y con la <br>
          finalidad de innovar, lanzamos Torito Grill. <br>
          Un restaurante de parrillas, pollos y bar, <br>
          acompañando nuestros platos de papitas naturales <br>
          amarillas con cáscara. Convirtiéndonos así en los <br>
          pioneros en el mercado con esta novedad.
        </p>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid container-descubre">
  <div class="row descubre">
    <p style="margin-top: 10px; text-align: center;">Descubre todo lo que tenemos para ti</p>
  </div>
  <br>
</div>
