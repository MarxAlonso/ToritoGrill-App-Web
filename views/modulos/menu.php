<div class="sticky-top container-fluid p-0 m-0">
    <nav class="navegaciones">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="bi bi-list" style="background-color: white; border-radius: 10px;"></i>
        </label>
        <a href="inicio" class="enlace">
            <img src="views/img/torito-grill.webp" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="inicio" style="font-size: 13px;"><b>INICIO</b></a>
            <li><a href="nosotros" style="font-size: 13px;"><b>NOSOTROS</b></a></li>
            <li><a href="servicios" style="font-size: 13px;"><b>SERVICIOS</b></a></li>
            <li><a href="carta" style="font-size: 13px;"><b>CARTA</b></a></li>
            <li><a href="platillos" style="font-size: 13px;"><b>PLATILLOS</b></a></li>
            <li><a href="locales" style="font-size: 13px;"><b>NUESTROS LOCALES</b></a></li>
            <li><a class="contact" href="cliente" style="font-size: 13px; padding: 10px 20px; color: white;"><b>EVENTOS</b></a></li>
        </ul>
    </nav>
</div>

<script>
    var logoLink = document.querySelector('.navegaciones .enlace');
    var logo = document.querySelector('.navegaciones .logo');

    logo.style.transition = 'transform 0.3s ease'; // Esto agrega transición suave en el logo de la imagen

    logoLink.addEventListener('mouseover', function() {
        logo.style.transform = 'scale(1.2)'; // Esto aumenta el tamaño del logo al pasar el mouse sobre el enlace
    });

    logoLink.addEventListener('mouseout', function() {
        logo.style.transform = 'scale(1)'; // En esta parte regresa el logo a su tamaño original al quitar el mouse del enlace
    });
</script>