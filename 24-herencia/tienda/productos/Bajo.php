<?php
namespace Tienda\Productos;
use Tienda\ProductoBase;

class Bajo extends ProductoBase{
  public function __construct( int $cantidad = 1){
    parent::__construct(
      1000,
      $cantidad,
      0.2
    );
  }

  public function mostrarPrecioFinal(){
    return $this->calcularMonto();
  }
}