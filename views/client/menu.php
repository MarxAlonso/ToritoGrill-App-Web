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
            <li><a class="active" href="cliente" style="font-size: 13px;"><b>CLIENTE</b></a>
            <li><a href="alquilar" style="font-size: 13px;"><b>ALQUILAR LOCAL</b></a></li>
            <li><a href="contratos" style="font-size: 13px;"><b>CONTRATOS</b></a></li>
            <li><a href="platillos" style="font-size: 13px;"><b>PLATILLOS</b></a></li>
            <li><a href="blog" style="font-size: 13px;"><b>BLOG</b></a></li>
            <li><a class="contact" href="contactos" style="font-size: 13px; padding: 10px 20px; color: white;"><b>RESERVA AQUI</b></a></li>
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