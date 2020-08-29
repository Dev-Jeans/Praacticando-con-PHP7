<?php
declare(strict_types=1);
function suma(int ...$valores) : int{
 return array_sum($valores); // funcion definida en php para realizar una suma 
}

// echo suma(1,2,3,1);

function tea(float $capital, float $tasa, int $periodo) : float {
  return (
    $capital * ((1 + $tasa)**$periodo)
  );
}

var_dump(tea(10100 , 0.25, 2));