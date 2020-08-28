<?php
//funciones

function doSomething(){
  return 'Te Amo Mi Sanshita';
}

// echo doSomething();

//funciones con parámetros

function sayHelloTo($name){
  return "Hola $name";
}

// echo sayHelloTo('Jeans');

//funciones por parámetros inicializados

function howAreYouDoing($name = 'user'){
  return "¿Cómo estas $name?";
}

// echo howAreYouDoing();

//funciones con parámetros de referencia

$x = 1;

function increment (&$x){
  $x++;
}

for ($i=0; $i < 5; $i++) { 

  increment($x);
  
}

// echo $x;

//funciones con parámetros de longitud de variable PHP 5.6+

function addToShoppingCart(...$items){
  foreach ($items as $item) {
    echo "$item , ";
  }
}

// addToShoppingCart(
//   'zapatilla',
//   'guitarra',
//   'cuerda para guitarra',
//   'teclado',
//   'televisor samsung 62"'
// );

//funciones recursivas

function findPairYears($year){
  if ($year % 2 === 0) {
    echo "$year: PAR ,";
  }
  
  if ($year != date('Y')) {
    findPairYears($year + 1);
  }
}

findPairYears(2000)

?>