// Agrega el evento click a todas las imágenes con la clase "imagen-modal"
document.querySelectorAll('.imagen-modal').forEach(function(imagen) {
    imagen.addEventListener('click', function() {
        // Obtén la ruta de la imagen grande desde el atributo data-imagen
        var rutaImagen = this.getAttribute('data-imagen');
        // Actualiza la src de la imagen en el modal
        document.getElementById('imagenGrande').src = rutaImagen;
        // Muestra el modal
        $('#imagenModal').modal('show');
    });
});