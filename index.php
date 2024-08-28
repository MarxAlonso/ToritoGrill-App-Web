<?php
require_once 'controller/PlantillaController.php';
require_once 'controller/PlantillaController2.php';

if (isset($_GET['ruta'])) {
    // Definir rutas que cargan la primera plantilla
    $rutasPlantilla1 = ["inicio", "contacto", "nosotros", "servicios", "locales", "carta", "terminos-condiciones", "blog"];

    // Definir rutas que cargan la segunda plantilla (cliente)
    $rutasPlantilla2 = ["cliente"];

    // Comprobar si la ruta pertenece a la primera plantilla
    if (in_array($_GET['ruta'], $rutasPlantilla1)) {
        $plantilla = new ControllerPlantilla();
        $plantilla->ctrPlantilla();
    }
    // Comprobar si la ruta pertenece a la segunda plantilla
    else if (in_array($_GET['ruta'], $rutasPlantilla2)) {
        $plantilla2 = new ControllerPlantilla2();
        $plantilla2->ctrPlantilla2();
    } 
    // Si la ruta no coincide, se puede mostrar un error o una página por defecto
    else {
        echo "Página no encontrada.";
    }
} else {
    // Si no se especifica ruta, cargar la plantilla principal por defecto
    $plantilla = new ControllerPlantilla();
    $plantilla->ctrPlantilla();
}
?>
