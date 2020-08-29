<?php

require_once 'libs/matematica/Aritmetica.php';
require_once 'libs/matematica/Financiera.php';

use Libs\Matematica\{Aritmetica, Financiera};

$obj = new Aritmetica();
var_dump($obj->suma(1,2));