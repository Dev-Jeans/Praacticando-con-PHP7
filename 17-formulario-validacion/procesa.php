<?php

$validaciones = [];

function is_date($value){
  $value = explode('/', $value);
  if (count($value !== 3)) return false;

  return @checkdate ( $value[1] , $value[0] , $value[2] );
}

if (!empty($_POST)) {
  if (empty($_POST['nombre'])) {
    $validaciones['nombre'] = 'el campo nombre es requerido';
  }else if (strlen($_POST['nombre'] < 3)) {
    $validaciones['nombre'] = 'el campo nombre requiere como mínimo 3 caracteres';
  }

  if (empty($_POST['correo'])) {
    $validaciones['correo'] = 'el campo correo es requerido';
  }else if (filter_input(INPUT_POST, 'correo' , FILTER_VALIDATE_EMAIL)) {
    $validaciones['correo'] = 'el campo correo requiere un correo válido';
  }
  // dd/mm/yyyy
  if (!empty($_POST['fecha'])) {
    if (!is_date($_POST['fecha'])) {
    $validaciones['fecha'] = 'el campo fecha requiere una fecha válida dd/mm/yyyy';
    }
  }

  if (!empty($_POST['web'])) {
    if (filter_input(INPUT_POST, 'web' , FILTER_VALIDATE_URL)) {
    $validaciones['web'] = 'el campo web requiere una dirección válida';
    }
  }

  if (empty($_POST['acepto'])) {
    $validaciones['web'] = 'debe aceptar las condiciones';
  }
  var_dump($validaciones);

}