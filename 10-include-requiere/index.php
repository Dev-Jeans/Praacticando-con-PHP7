<?php
//carga de archivos externos
//include : si encuentra un error dentro de la carga del archivo el script se va seguir ejecutando

// include 'lib/funciones_arixtmetica.php';
// echo suma(1,3);

//requiere: si encuentra un error dentro de la carga del archivo el script se va detener

// require 'lib/funciones_aritmetica.php';
// echo suma(1,3);

//requiere_once: detecta si el archivo ya ha sido cargado en caso ya haya sido cargado nose volvera a cargar.

require_once 'lib/funciones_aritmetica.php';
require_once 'lib/funciones_html.php';

// echo suma(1,3);
// echo hyperlink('http://anexsoft.com', 'Blog de Anexsoft')

$title = 'Página de inicio';

require_once 'views/header.php';
require_once 'views/inicio/index.php';
require_once 'views/footer.php'


?>