<?php
class FiltroViaje {
    public $nombreHotel;
    public $ciudad;
    public $pais;
    public $fechaViaje;
    public $duracionViaje;

    public function __construct($nombreHotel, $ciudad, $pais, $fechaViaje, $duracionViaje) {
        $this->nombreHotel = $nombreHotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracionViaje = $duracionViaje;
    }

    public function mostrarFiltro() {
        return "Hotel: $this->nombreHotel, Ciudad: $this->ciudad, País: $this->pais, Fecha: $this->fechaViaje, Duración: $this->duracionViaje días";
    }
}
?>
