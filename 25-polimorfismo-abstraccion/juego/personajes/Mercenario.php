<?php
namespace Juego\Personajes;

use Juego\Personaje;

class Mercenario extends Personaje {
  public function saludar(){
    return 'Soy un mercenario dime cuanto hay para realizar el trabajo';
  }
}