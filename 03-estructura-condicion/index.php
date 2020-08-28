<?php

$a = 27;

$ab = true;

$destino = 'mexico';

//condicion if
// if ($a === 27) {
//   echo 'La variable ingresada tiene el valor '.$a;
// }else {
//   echo 'La variable ingresada no tiene el valor 27';
// }

// condicion if anidado
// if ($a === 27) {
//   echo 'La variable ingresada tiene el valor 27';
// } elseif ($a === 28) {
//   echo 'La variable ingresada tiene el valor 28';
// } else {
//   echo 'La variable ingresada no tiene el valor 27';
// }

// echo $ab ? 'Condición aceptada' : 'Condición inválida';


//condicion Switch

switch ($destino) {
  case 'mexico':
    echo 'el pasaje a ' . $destino . ' cuesta 900usd';
    break;
  case 'peru':
    echo 'el pasaje a ' . $destino . ' cuesta 700usd';
    break;
  case 'argentina':
    echo 'el pasaje a ' . $destino . ' cuesta 500usd';
    break;
  default:
    echo 'No tenemos precio disponible para el destino';
    break;
}

