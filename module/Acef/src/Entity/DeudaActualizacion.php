<?php

namespace Acef\Entity;

use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
use Zend\Form\Annotation as Annotation;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint as UniqueConstraint;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * DeudaActualizacion
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 * @ORM\Table(name="acef_deuda_actualizacion")
 * @ORM\Entity(repositoryClass="Acef\Repository\DeudaActualizacionRepository")
 */
class DeudaActualizacion extends \Zend\Hydrator\ArraySerializable implements \Zend\Hydrator\HydratorInterface{

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"ID", "description":"", "addon":""})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=11, unique=false, nullable=false, name="id")
     */
    public $id = null;

    /**
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
     * @Annotation\Options({"label":"Cliente","empty_option": "",
     * "target_class":"\Acef\Entity\Cliente", "description":""})
     * @ORM\OneToOne(targetEntity="\Acef\Entity\Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", nullable=true)
     */
    public $cliente = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Porcentaje de quita sobre intereses",
     * "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="porcentaje_quita_intereses")
     */
    public $porcentajeQuitaIntereses = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Porcentaje de quita sobre capital",
     * "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="porcentaje_quita_capital")
     */
    public $porcentajeQuitaCapital = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Tasa", "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true, name="tasa")
     */
    public $tasa = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Date")
     * @Annotation\Attributes({"type":"date"})
     * @Annotation\Options({"label":"Fecha de mora (Desde)", "description":"",
     * "addon":""})
     * @ORM\Column(type="date", unique=false, nullable=true, name="fecha_mora_desde")
     */
    public $fechaMoraDesde = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Date")
     * @Annotation\Attributes({"type":"date"})
     * @Annotation\Options({"label":"Fecha de cálculo (Hasta)", "description":"",
     * "addon":""})
     * @ORM\Column(type="date", unique=false, nullable=true,
     * name="fecha_calculo_hasta")
     */
    public $fechaCalculoHasta = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Días de Mora", "description":"", "addon":""})
     * @ORM\Column(type="integer", length=5, unique=false, nullable=true,
     * name="dias_de_mora")
     */
    public $diasDeMora = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Capital", "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="capital")
     */
    public $capital = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Compensa", "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="compensa")
     */
    public $compensa = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Total intereses", "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="total_intereses")
     */
    public $totalIntereses = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Total de deuda actualizada", "description":"",
     * "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="total_deuda_actualizada")
     */
    public $totalDeudaActualizada = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Quita de interes sobre total deuda",
     * "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="quita_intereses_total_deuda_actualizada")
     */
    public $quitaInteresesTotalDeudaActualizada = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Quita de capital", "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="quita_de_capital")
     */
    public $quitaDeCapital = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Total de deuda con quita", "description":"",
     * "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="total_deuda_con_quita")
     */
    public $totalDeudaConQuita = null;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function getPorcentajeQuitaIntereses() {
        return $this->porcentajeQuitaIntereses;
    }

    public function setPorcentajeQuitaIntereses($porcentajeQuitaIntereses) {
        $this->porcentajeQuitaIntereses = $porcentajeQuitaIntereses;
    }

    public function getPorcentajeQuitaCapital() {
        return $this->porcentajeQuitaCapital;
    }

    public function setPorcentajeQuitaCapital($porcentajeQuitaCapital) {
        $this->porcentajeQuitaCapital = $porcentajeQuitaCapital;
    }

    public function getTasa() {
        return $this->tasa;
    }

    public function setTasa($tasa) {
        $this->tasa = $tasa;
    }

    public function getFechaMoraDesde() {
        return $this->fechaMoraDesde;
    }

    public function setFechaMoraDesde($fechaMoraDesde) {
        $this->fechaMoraDesde = $fechaMoraDesde;
    }

    public function getFechaCalculoHasta() {
        return $this->fechaCalculoHasta;
    }

    public function setFechaCalculoHasta($fechaCalculoHasta) {
        $this->fechaCalculoHasta = $fechaCalculoHasta;
    }

    public function getDiasDeMora() {
        return $this->diasDeMora;
    }

    public function setDiasDeMora($diasDeMora) {
        $this->diasDeMora = $diasDeMora;
    }

    public function getCapital() {
        return $this->capital;
    }

    public function setCapital($capital) {
        $this->capital = $capital;
    }

    public function getCompensa() {
        return $this->compensa;
    }

    public function setCompensa($compensa) {
        $this->compensa = $compensa;
    }

    public function getTotalIntereses() {
        return $this->totalIntereses;
    }

    public function setTotalIntereses($totalIntereses) {
        $this->totalIntereses = $totalIntereses;
    }

    public function getTotalDeudaActualizada() {
        return $this->totalDeudaActualizada;
    }

    public function setTotalDeudaActualizada($totalDeudaActualizada) {
        $this->totalDeudaActualizada = $totalDeudaActualizada;
    }

    public function getQuitaInteresesTotalDeudaActualizada() {
        return $this->quitaInteresesTotalDeudaActualizada;
    }

    public function setQuitaInteresesTotalDeudaActualizada($quitaInteresesTotalDeudaActualizada) {
        $this->quitaInteresesTotalDeudaActualizada = $quitaInteresesTotalDeudaActualizada;
    }

    public function getQuitaDeCapital() {
        return $this->quitaDeCapital;
    }

    public function setQuitaDeCapital($quitaDeCapital) {
        $this->quitaDeCapital = $quitaDeCapital;
    }

    public function getTotalDeudaConQuita() {
        return $this->totalDeudaConQuita;
    }

    public function setTotalDeudaConQuita($totalDeudaConQuita) {
        $this->totalDeudaConQuita = $totalDeudaConQuita;
    }

    public function __toString() {
        return "";
    }

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
        $inicio = $this->getFechaMoraDesde();
        $hasta = $this->getFechaCalculoHasta();
        $diff = $hasta->diff($inicio);
        $this->setDiasDeMora($diff->days);
    }

    function calcularCompensa() {
        $compensa = $this->getCapital() * $this->getTasa() * $this->getDiasDeMora() / 36500;
        $this->setCompensa(number_format($compensa, 2, ".", ""));
    }

    function calcularTotalInteres() {
        $this->setTotalIntereses($this->getCompensa());
    }

    function calcularDeudaActualizada() {
        $this->setTotalDeudaActualizada($this->getCapital() + $this->getTotalIntereses());
    }

    function calcularQuitaInteresesTotalDeuda() {
        $r = $this->getTotalIntereses() * $this->getPorcentajeQuitaIntereses() / 100;
        $this->setQuitaInteresesTotalDeudaActualizada(number_format($r, 2, ".", ""));
    }

    function calcularQuitaCapital() {
        $r = $this->getCapital() * $this->getPorcentajeQuitaCapital() / 100;
        $this->setQuitaDeCapital(number_format($r, 2, ".", ""));
    }

    function calcularDeudaConQuita() {
        $r = $this->getTotalDeudaActualizada() - $this->getQuitaInteresesTotalDeudaActualizada() - $this->getQuitaDeCapital();
        $this->setTotalDeudaConQuita(number_format($r, 2, ".", ""));
    }

}
