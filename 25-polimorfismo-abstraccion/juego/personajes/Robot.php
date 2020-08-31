<?php
namespace Juego\Personajes;

use Juego\IPersonaje;

class Robot implements IPersonaje {
  public function saludar(){
    return 'Piripi piripi';
  }

  public function atacar(){
    return 'Estoy atacando';
  }
}