<?php
namespace Juego;

abstract class Personaje {
  abstract public function saludar();

  public function atacar(){
    return 'Estoy atacando';
  }
}

interface IPersonaje{ //las interfaces no se extienden ni se heredan , se implentan y no tienen logica de negocio

  public function saludar();
  public function atacar();

}