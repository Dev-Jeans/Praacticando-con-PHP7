<?php
date_default_timezone_set('America/Lima');

//session : lado del servidor
// session_start();

// $_SESSION['frutas'] = ['plátano', 'fresa'];

//cookie : lado del cliente

setcookie(
  "frutas", //key
  "piña, fresa, coco", //value
  time() + 60 * 60); //tiempo de vida

  setcookie(
    "frutas", //key
    serialize(["fresa", "platanos"]), //value
    time() + 60 * 60); //tiempo de vida