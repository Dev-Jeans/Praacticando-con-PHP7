<?php
namespace libs\matematica\financiera;

function tea($capital, $tasa, $periodo) {
  return (
     number_format($capital * ((1 + $tasa)**$periodo),2)
    );
}

