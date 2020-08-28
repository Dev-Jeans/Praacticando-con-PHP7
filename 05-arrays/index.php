<?php
//forma antigua de declarar array
// $frutas = array('platano','manzana','fresa');
// echo $frutas[1];

//forma nueva de declarar array
// $instrumentos = ['fender' => 'Squier Vibe 60' ,'ibanez' => 'RG 370ex'];
// // var_dump($instrumentos);

// echo $instrumentos['fender'];

//array de dos dimensiones
$colegio = [
  'primaria' => [
    'primer_grado' => 'Eduardo Perez',
    'segundo_grado' => 'Marelly Perez',
    'tercer_grado' => 'Jeans Cuba',
    'cuarto_grado' => 'Kening Medina',
    'quinto_grado' => 'Anthony Medina',
    'sexto_grado' => 'thaisa Perez',
  ],
  'secundaria' => [
    'primer_grado' => 'luis Perez',
    'segundo_grado' => 'alberto Perez',
    'tercer_grado' => 'jose Cuba',
    'cuarto_grado' => 'julia Medina',
    'quinto_grado' => 'andrea Medina',
  ]];

  // var_dump($colegio);

  foreach ($colegio as $indNivel => $nivel) {
    echo "<b>$indNivel</b><br>";
    foreach ($nivel as $indProf => $pofesor) {
      echo '<b>' . $indProf . '</b>' . ':' . $pofesor . '<br>';
    } 
  }