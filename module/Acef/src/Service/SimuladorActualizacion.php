<?php

namespace Acef\Service;

use Zend\Stdlib\AbstractOptions;

/**
 * Description of SimuladorActualizacion
 *
 * @author Cristian Incarnato <cristian.cdi@gmail.com>
 */
class SimuladorActualizacion extends \Zend\Hydrator\ArraySerializable implements \Zend\Hydrator\HydratorInterface {

    /**
     *
     * @var Acef\Form\SimulacionActualizacion
     */
    //protected $form;

    protected $porcentajeQuitaIntereses;
    protected $porcentajeQuitaCapital;
    protected $tasa;
    protected $fechaMoraDesde;
    protected $fechaCalculoHasta;
    protected $diasDeMora;
    protected $capital;
    protected $compensa;
    protected $totalIntereses;
    protected $totalDeudaActualizada;
    protected $quitaInteresesTotalDeudaActualizada;
    protected $quitaDeCapital;
    protected $totalDeudaConQuita;

    function simular() {
        $this->calcularDiasDeMora();
        $this->calcularCompensa();
        $this->calcularTotalInteres();
        $this->calcularDeudaActualizada();
        $this->calcularQuitaInteresesTotalDeuda();
        $this->calcularQuitaCapital();
        $this->calcularDeudaConQuita();
    }

    function calcularDiasDeMora() {
        $inicio = new \DateTime($this->getFechaMoraDesde());
        $hasta = new \DateTime($this->getFechaCalculoHasta());
        $diff = $hasta->diff($inicio);
        $this->setDiasDeMora($diff->days);
    }

    function calcularCompensa() {
        $compensa = $this->getCapital() * $this->getTasa() * $this->getDiasDeMora() / 36500;
        $this->setCompensa(number_format($compensa, 2,".",""));
    }

    function calcularTotalInteres() {
        $this->setTotalIntereses($this->getCompensa());
    }

    function calcularDeudaActualizada() {
        $this->setTotalDeudaActualizada($this->getCapital() + $this->getTotalIntereses());
    }

    function calcularQuitaInteresesTotalDeuda() {
        $r = $this->getTotalIntereses() * $this->getPorcentajeQuitaIntereses() / 100;
        $this->setQuitaInteresesTotalDeudaActualizada(number_format($r, 2,".",""));
    }

    function calcularQuitaCapital() {
        $r = $this->getCapital() * $this->getPorcentajeQuitaCapital() / 100;
        $this->setQuitaDeCapital(number_format($r, 2,".",""));
    }

    function calcularDeudaConQuita() {
        $r = $this->getTotalDeudaActualizada() - $this->getQuitaInteresesTotalDeudaActualizada() - $this->getQuitaDeCapital();
        $this->setTotalDeudaConQuita(number_format($r, 2,".",""));
    }

    function getPorcentajeQuitaIntereses() {
        return $this->porcentajeQuitaIntereses;
    }

    function getTasa() {
        return $this->tasa;
    }

    function getFechaMoraDesde() {
        return $this->fechaMoraDesde;
    }

    function getFechaCalculoHasta() {
        return $this->fechaCalculoHasta;
    }

    function getDiasDeMora() {
        return $this->diasDeMora;
    }

    function getCapital() {
        return $this->capital;
    }

    function getCompensa() {
        return $this->compensa;
    }

    function getTotalIntereses() {
        return $this->totalIntereses;
    }

    function getTotalDeudaActualizada() {
        return $this->totalDeudaActualizada;
    }

    function getQuitaDeCapital() {
        return $this->quitaDeCapital;
    }

    function getTotalDeudaConQuita() {
        return $this->totalDeudaConQuita;
    }

    function setPorcentajeQuitaIntereses($porcentajeQuitaIntereses) {
        $this->porcentajeQuitaIntereses = $porcentajeQuitaIntereses;
    }

    function setTasa($tasa) {
        $this->tasa = $tasa;
    }

    function setFechaMoraDesde($fechaMoraDesde) {
        $this->fechaMoraDesde = $fechaMoraDesde;
    }

    function setFechaCalculoHasta($fechaCalculoHasta) {
        $this->fechaCalculoHasta = $fechaCalculoHasta;
    }

    function setDiasDeMora($diasDeMora) {
        $this->diasDeMora = $diasDeMora;
    }

    function setCapital($capital) {
        $this->capital = $capital;
    }

    function setCompensa($compensa) {
        $this->compensa = $compensa;
    }

    function setTotalIntereses($totalIntereses) {
        $this->totalIntereses = $totalIntereses;
    }

    function setTotalDeudaActualizada($totalDeudaActualizada) {
        $this->totalDeudaActualizada = $totalDeudaActualizada;
    }

    function setQuitaDeCapital($quitaDeCapital) {
        $this->quitaDeCapital = $quitaDeCapital;
    }

    function setTotalDeudaConQuita($totalDeudaConQuita) {
        $this->totalDeudaConQuita = $totalDeudaConQuita;
    }

    function getQuitaInteresesTotalDeudaActualizada() {
        return $this->quitaInteresesTotalDeudaActualizada;
    }

    function setQuitaInteresesTotalDeudaActualizada($quitaInteresesTotalDeudaActualizada) {
        $this->quitaInteresesTotalDeudaActualizada = $quitaInteresesTotalDeudaActualizada;
    }

    function getPorcentajeQuitaCapital() {
        return $this->porcentajeQuitaCapital;
    }

    function setPorcentajeQuitaCapital($porcentajeQuitaCapital) {
        $this->porcentajeQuitaCapital = $porcentajeQuitaCapital;
    }

}
