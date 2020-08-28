<?php
//estructuras repetitivas
$n = 1;

// while ($n <= 10) {
//   echo "$n ,";
//   $n++;
// }


//la condicion primero recorre el codigo y luego compara
// do {
//   echo "$n ,";
//   $n++;
// } while ($n < 1);

//for
// for ($i=0; $i <=10 ; $i++) { 
//   echo "$n ,";
//   if ($i === 5) {
//     break; //rompre el bucle
//   }
// }

//array
$letras = ['a','b','c','d'];

foreach ($letras as $key => $value) {
  echo "$value , ";
} 
