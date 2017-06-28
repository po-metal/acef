<?php

namespace Acef\Entity;

use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
use Zend\Form\Annotation as Annotation;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint as UniqueConstraint;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * DuedaRefinanciacion
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 * @ORM\Table(name="acef_deuda_refinanciacion")
 * @ORM\Entity(repositoryClass="Acef\Repository\DuedaRefinanciacionRepository")
 */
class DuedaRefinanciacion
{

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
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Total de deuda con quita", "description":"",
     * "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="total_deuda_con_quita")
     */
    public $totalDeudaConQuita = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Anticipo", "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="anticipo")
     */
    public $anticipo = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text", "disabled":"disabled"})
     * @Annotation\Options({"label":"Monto a refinanciar", "description":"",
     * "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="monto_refinanciar")
     */
    public $montoRefinanciar = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"% Interes", "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="interes")
     */
    public $interes = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text", "disabled":"disabled"})
     * @Annotation\Options({"label":"Cuota por año", "description":"", "addon":""})
     * @ORM\Column(type="integer", length=3, unique=false, nullable=true,
     * name="cuota_por_anio")
     */
    public $cuotaPorAnio = 12;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text", "disabled":"disabled"})
     * @Annotation\Options({"label":"Monto de Cuota", "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="monto_de_cuota")
     */
    public $montoDeCuota = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text", "disabled":"disabled"})
     * @Annotation\Options({"label":"Meses Ctas.", "description":"", "addon":""})
     * @Annotation\AllowEmpty({"allowempty":"true"})
     * @ORM\Column(type="integer", length=3, unique=false, nullable=true,
     * name="meses_cuentas")
     */
    public $mesesCuentas = 1;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text", "disabled":"disabled" })
     * @Annotation\Options({"label":"Tasa", "description":"", "addon":""})
     * @ORM\Column(type="decimal", scale=2, precision=11,  unique=false, nullable=true, name="tasa")
     */
    public $tasa = null;

    /**
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
     * @Annotation\Options({"label":"Cliente","empty_option": "",
     * "target_class":"\Acef\Entity\Cliente", "description":""})
     * @ORM\ManyToOne(targetEntity="\Acef\Entity\Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", nullable=true)
     */
    public $cliente = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Cant. Cuotas", "description":"", "addon":""})
     * @ORM\Column(type="integer", length=5, unique=false, nullable=true,
     * name="cantidad_cuotas")
     */
    public $cantidadCuotas = null;

    /**
     * @Annotation\Exclude()
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", unique=false, nullable=true, name="fecha_creacion")
     */
    public $fechaCreacion = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTotalDeudaConQuita()
    {
        return $this->totalDeudaConQuita;
    }

    public function setTotalDeudaConQuita($totalDeudaConQuita)
    {
        $this->totalDeudaConQuita = $totalDeudaConQuita;
    }

    public function getAnticipo()
    {
        return $this->anticipo;
    }

    public function setAnticipo($anticipo)
    {
        $this->anticipo = $anticipo;
    }

    public function getMontoRefinanciar()
    {
        return $this->montoRefinanciar;
    }

    public function setMontoRefinanciar($montoRefinanciar)
    {
        $this->montoRefinanciar = $montoRefinanciar;
    }

    public function getInteres()
    {
        return $this->interes;
    }

    public function setInteres($interes)
    {
        $this->interes = $interes;
    }

    public function getCuotaPorAnio()
    {
        return $this->cuotaPorAnio;
    }

    public function setCuotaPorAnio($cuotaPorAnio)
    {
        $this->cuotaPorAnio = $cuotaPorAnio;
    }

    public function getMontoDeCuota()
    {
        return $this->montoDeCuota;
    }

    public function setMontoDeCuota($montoDeCuota)
    {
        $this->montoDeCuota = $montoDeCuota;
    }

    public function getMesesCuentas()
    {
        return $this->mesesCuentas;
    }

    public function setMesesCuentas($mesesCuentas)
    {
        $this->mesesCuentas = $mesesCuentas;
    }

    public function getTasa()
    {
        return $this->tasa;
    }

    public function setTasa($tasa)
    {
        $this->tasa = $tasa;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function simular()
    {
        $this->calcularMontoRefinanciar();
        $this->calcularTasa();
        $this->calcularMontoCuota();
    }

    public function calcularMontoRefinanciar()
    {
        $r = $this->getTotalDeudaConQuita() - $this->getAnticipo();
                $this->setMontoRefinanciar(number_format($r,2,".",""));

    }

    public function calcularMontoCuota()
    {
        if ($this->tasa) {
            $r = $this->getMontoRefinanciar() * ($this->tasa * $this->getMesesCuentas()) / (1 - pow((1 + $this->tasa * $this->getMesesCuentas()), -$this->getCantidadCuotas()));
            $this->setMontoDeCuota(number_format($r,2,".",""));
        }
    }

    public function calcularTasa()
    {
        if ($this->getInteres() and $this->getCuotaPorAnio()) {
            $r = $this->getInteres() / $this->getCuotaPorAnio() / 100;
            $this->setTasa(number_format($r,2,".",""));
        }
    }

    public function getCantidadCuotas()
    {
        return $this->cantidadCuotas;
    }

    public function setCantidadCuotas($cantidadCuotas)
    {
        $this->cantidadCuotas = $cantidadCuotas;
    }

    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function __toString()
    {
return;
    }


}

