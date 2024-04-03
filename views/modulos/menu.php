<style>
    .navegaciones a {
        transition: font-size 0.1s ease-in-out, color 0.1s ease-in-out, font-weight 1s ease-in-out;
    }

    .navegaciones a {
        margin-bottom: 20px;
    }
</style>
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
            <li><a class="active" href="inicio" style="font-size: 13px;">INICIO</a>
            <li><a href="nosotros" style="font-size: 13px;">NOSOTROS</a></li>
            <li><a href="servicios" style="font-size: 13px;">SERVICIOS</a></li>
            <li><a href="https://outplacementt.blogspot.com/" style="font-size: 13px;">BLOG</a></li>
            <li><a href="/iboutplacement/estadisticas" style="font-size: 13px;">ESTADÍSTICAS</a></li>
            <li><a class="contact" href="contacto" style="font-size: 13px; padding: 10px 20px; color: white;">CONTÁCTANOS </a></li>
        </ul>
    </nav>
</div>
<script>
    var navLinks = document.querySelectorAll('.navegaciones a');

    navLinks.forEach(function(link) {
        link.addEventListener('mouseover', function() {
            link.style.fontSize = '15px';
            link.style.color = '#862510';
            link.style.fontWeight = 'bold';
        });

        link.addEventListener('mouseout', function() {
            link.style.fontSize = '13px';
            link.style.color = link.classList.contains('contact') ? 'white' : 'white';
            link.style.fontWeight = 'normal';
        });
    });
</script>
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