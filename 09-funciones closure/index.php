<?php
//closure

// $suma = function($a, $b){
//     return $a + $b;
// };

$suma = function($a, $b, $c){
    return $c($a + $b);
};

$suma(1, 2, function($r){
  echo $r;
});

?>