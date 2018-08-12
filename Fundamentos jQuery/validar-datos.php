<?php 
/*
Toda linea de código se cierra con punto y coma.
*/

//función para escribir cadenas de texto y enteros.

/*
Variables Globales de PHP
$_GET[], $_POST[], $_SESSION[]
$_FILES[], $_REQUEST[]
*/
$nombre = $_POST["txt_nombre"];

if ($nombre == "Juanito Perez") {
	echo '<div class="alert alert-success" role="alert">
  			Cotización enviada con éxito.
		</div>';
} else {
	echo '<div class="alert alert-danger" role="alert">
  			No se encuentra registrado.
		</div>';
}

?>