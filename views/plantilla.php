<?php
    require_once 'views/modulos/header.php';
		
	if (isset($_GET['ruta'])) {



		if ($_GET["ruta"] == "inicio" 
		||$_GET["ruta"] == "contacto"
		||$_GET["ruta"] == "nosotros"
		||$_GET["ruta"] == "servicios"
		||$_GET["ruta"] == "locales"
		||$_GET["ruta"] == "carta"
		||$_GET["ruta"] == "terminos-condiciones"
		||$_GET["ruta"] == "blog"
		
		//seguros

		 ) {
	
			if (file_exists("views/modulos/" . $_GET["ruta"] . ".php")) {
				include_once "views/modulos/" . $_GET["ruta"] . ".php";
			}  else if (file_exists("controller/" . $_GET["ruta"] . ".php")) {
				include_once "controller/" . $_GET["ruta"] . ".php";
			}
		} 
	} else {
		include_once "views/modulos/inicio.php";
	}
		
	require_once 'views/modulos/footer.php';
?>

		
