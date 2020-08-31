<?php
namespace Tienda;

class ProductoBase {
  protected $precio;
  protected $cantidad;
  protected $descuento;
  public function __construct(
    float $precio,
    float $cantidad,
    float $descuento = 0
    ){
    $this->precio = $precio;
    $this->cantidad = $cantidad;
    $this->descuento = $descuento;
  }

  protected function calcularMonto() : float{
    $descuento = 1 -$this->descuento;
    return ($this->precio * $this->cantidad) * $descuento;
  }

}