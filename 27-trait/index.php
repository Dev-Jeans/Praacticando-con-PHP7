<?php
require_once 'libs/traits/CalculoVenta.php';
require_once 'libs/Producto.php';

$obj = new Libs\Producto('Laptop', 'Anexsoft', 1000, 3000);
var_dump(
    $obj->margen()
);