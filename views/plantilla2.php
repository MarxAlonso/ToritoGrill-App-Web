<?php
    require_once 'views/client/header.php';
		
	if (isset($_GET['ruta'])) {



		if ($_GET["ruta"] == "cliente" 
		||$_GET["ruta"] == "contactos"
		||$_GET["ruta"] == "alquilar"
		||$_GET["ruta"] == "platillos"
		
		//seguros

		 ) {
	
			if (file_exists("views/client/" . $_GET["ruta"] . ".php")) {
				include_once "views/client/" . $_GET["ruta"] . ".php";
			}  else if (file_exists("controller/" . $_GET["ruta"] . ".php")) {
				include_once "controller/" . $_GET["ruta"] . ".php";
			}
		} 
	} else {
		include_once "views/client/cliente.php";
	}
		
	require_once 'views/client/footer.php';
?>

		
