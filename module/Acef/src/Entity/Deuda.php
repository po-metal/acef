<?php

namespace Acef\Entity;

use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
use Zend\Form\Annotation as Annotation;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint as UniqueConstraint;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Deuda
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 * @ORM\Table(name="acef_deudas")
 * @ORM\Entity(repositoryClass="Acef\Repository\DeudaRepository")
 */
class Deuda
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
     * @Annotation\Exclude()
     * @ORM\ManyToOne(targetEntity="\Acef\Entity\Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", nullable=true)
     */
    public $cliente = null;

    /**
     * @Annotation\Exclude()
     * @Gedmo\Timestampable(on="create")
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", unique=false, nullable=true, name="fecha")
     */
    public $fecha = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Monto", "description":"", "addon":""})
     * @Annotation\Validator({"name":"Zend\Validator\Digits", "options":{"messages":{"notDigits":"El valor ingresado no es numérico"}}})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="monto")
     */
    public $monto = null;

    /**
     * @Annotation\Exclude()
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="deuda_actualizada")
     */
    public $deudaActualizada = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Textarea")
     * @Annotation\Attributes({"type":"textarea"})
     * @Annotation\Options({"label":"Detalle", "description":""})
     * @ORM\Column(type="string", length=500, unique=false, nullable=true,
     * name="detalle")
     */
    public $detalle = null;

    /**
     * @Annotation\Exclude()
     * @ORM\ManyToOne(targetEntity="\ZfMetal\Security\Entity\User")
     * @ORM\JoinColumn(name="responsable_id", referencedColumnName="id", nullable=true)
     */
    public $responsable = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getMonto()
    {
        return $this->monto;
    }

    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    public function getDeudaActualizada()
    {
        return $this->deudaActualizada;
    }

    public function setDeudaActualizada($deudaActualizada)
    {
        $this->deudaActualizada = $deudaActualizada;
    }

    public function getDetalle()
    {
        return $this->detalle;
    }

    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;
    }

    public function getResponsable()
    {
        return $this->responsable;
    }

    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    public function __toString()
    {
        return  $this->monto;
    }


}

