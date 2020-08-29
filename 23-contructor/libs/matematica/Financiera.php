<?php
namespace Libs\Matematica;

class Financiera {
    private $capital;
    private $tasa;
    private $periodo;
    // el constructor es el primero metodo que se ejecuta si o si cuando se instancie la clase
    public function __construct(
      float $capital,
      float $tasa,
      int $periodo
    ) {
      $this->capital = $capital;
      $this->tasa = $tasa;
      $this->periodo = $periodo;
    }

    // public function __destruct(){
    //   echo 'Ha finalizado el calculo para financiera';
    //   $this->capital = 0;
    //   $this->tasa = 0;
    //   $this->periodo = 0;
    // }

    public function tea() : float {
        return $this->capital * ((1 + $this->tasa)**$this->periodo);
    }
}