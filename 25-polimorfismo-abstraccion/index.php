<?php
require_once 'juego/Personaje.php';
require_once 'juego/personajes/Mercenario.php';
require_once 'juego/personajes/Robot.php';


use Juego\Personajes\{Mercenario,Robot};

$obj = new Robot();
echo $obj->saludar();