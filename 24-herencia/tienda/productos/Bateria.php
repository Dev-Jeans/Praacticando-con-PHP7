<?php
namespace Tienda\Productos;
use Tienda\ProductoBase;

class Bateria extends ProductoBase{
  public function __construct( int $cantidad = 1){
    parent::__construct(
      2000,
      $cantidad,
      0.3
    );
  }

  public function mostrarPrecioFinal(){
    return $this->calcularMonto();
  }
}