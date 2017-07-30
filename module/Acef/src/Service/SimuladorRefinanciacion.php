<?php

namespace Acef\Service;

use Zend\Stdlib\AbstractOptions;

/**
 * Description of SimuladorActualizacion
 *
 * @author Cristian Incarnato <cristian.cdi@gmail.com>
 */
class SimuladorRefinanciacion extends \Zend\Hydrator\ArraySerializable implements \Zend\Hydrator\HydratorInterface {

    protected $totalDeudaConQuita;
    protected $anticipo;
    protected $montoRefinanciar;
    protected $interes;
    protected $cantidadCuotas;
    protected $cuotaPorAnio;
    protected $montoDeCuota;
    protected $mesesCuentas;
    protected $tasa;

    function simular() {
        $this->calcularMontoRefinanciar();
        $this->calcularTasa();
        $this->calcularMontoCuota();
    }

    function calcularMontoRefinanciar() {

        $r = $this->getTotalDeudaConQuita() - $this->getAnticipo();
        $this->setMontoRefinanciar($r);
    }

    function calcularMontoCuota() {
        if ($this->tasa) {
            $r = $this->getMontoRefinanciar() * ($this->tasa * $this->getMesesCuentas()) / (1 - pow((1 + $this->tasa * $this->getMesesCuentas()), -$this->getCantidadCuotas()));
            $this->setMontoDeCuota($r);
        }
    }

    function calcularTasa() {
        if ($this->getInteres() and $this->getCuotaPorAnio()) {
            $r = $this->getInteres() / $this->getCuotaPorAnio() / 100;
            $this->setTasa($r);
        }
    }

    function getTotalDeudaConQuita() {
        return $this->totalDeudaConQuita;
    }

    function getAnticipo() {
        return $this->anticipo;
    }

    function getMontoRefinanciar() {
        return $this->montoRefinanciar;
    }

    function getInteres() {
        return $this->interes;
    }

    function getCantidadCuotas() {
        return $this->cantidadCuotas;
    }

    function getCuotaPorAnio() {
        return $this->cuotaPorAnio;
    }

    function getMontoDeCuota() {
        return number_format($this->montoDeCuota,2,".","");
    }

    function getMesesCuentas() {
        return $this->mesesCuentas;
    }

    function getTasa() {
        return number_format(($this->tasa * 100),2,".","");
    }

    function setTotalDeudaConQuita($totalDeudaConQuita) {
        $this->totalDeudaConQuita = $totalDeudaConQuita;
    }

    function setAnticipo($anticipo) {
        $this->anticipo = $anticipo;
    }

    function setMontoRefinanciar($montoRefinanciar) {
        $this->montoRefinanciar = round($montoRefinanciar);
    }

    function setInteres($interes) {
        $this->interes = $interes;
    }

    function setCantidadCuotas($cantidadCuotas) {
        $this->cantidadCuotas = $cantidadCuotas;
    }

    function setCuotaPorAnio($cuotaPorAnio) {
        $this->cuotaPorAnio = $cuotaPorAnio;
    }

    function setMontoDeCuota($montoDeCuota) {
        $this->montoDeCuota = round($montoDeCuota);
    }

    function setMesesCuentas($mesesCuentas) {
        $this->mesesCuentas = $mesesCuentas;
    }

    function setTasa($tasa) {
        $this->tasa = $tasa;
    }

}
