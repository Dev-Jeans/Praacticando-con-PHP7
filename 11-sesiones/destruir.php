<?php
// session_start();
// // session_destroy(); destruye todas las sesiones actuales
// unset($_SESSION['frutas']);
// var_dump($_SESSION['frutas']);

setcookie(
  "frutas",
  null,
  time() -1
);