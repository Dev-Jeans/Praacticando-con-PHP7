<?php
namespace Tienda\Productos;
use Tienda\ProductoBase;

class Guitarra extends ProductoBase{
  public function __construct( int $cantidad = 1){
    parent::__construct(
      4000,
      $cantidad,
      0.6
    );
  }

  public function mostrarPrecioFinal(){
    return $this->calcularMonto();
  }
}