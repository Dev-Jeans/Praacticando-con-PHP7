<?php

//operador NULL


//Forma antigua para asignar valor a uno variable cuando esta es null.
// $usuario_id = !empty($_GET['id']) ? $_GET['id'] : 1; 


// //Forma en PHP7+ para asignar valor a uno variable cuando esta es null.
// $usuario_id = $_GET['id'] ?? 1;
// var_dump($usuario_id);

//operado de nave espacial

$i = 6;
switch ($i <=> 5) {
  case -1:
   echo 'Es menor';
    break;
  
  case 0:
    echo 'Es igual';
      break;

  case 1:
    echo 'Es mayor';
      break;
}