<?php

require_once 'libs/matematica/Aritmetica.php';
require_once 'libs/matematica/Financiera.php';

use Libs\Matematica\{Aritmetica, Financiera};

$obj = new Financiera(1000, 0.25, 2);
var_dump($obj->tea());