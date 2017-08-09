<?php

namespace Acef\Entity;

use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
use Zend\Form\Annotation as Annotation;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint as UniqueConstraint;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Cliente
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 * @ORM\Table(name="acef_clientes")
 * @ORM\Entity(repositoryClass="Acef\Repository\ClienteRepository")
 */
class Cliente
{

    /**
     * @Annotation\Type("Zend\Form\Element\Hidden")
     * @Annotation\Attributes({"type":"hidden"})
     * @Annotation\Type("Zend\Form\Element\Hidden")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=11, unique=false, nullable=false, name="id")
     */
    public $id = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Validator({"name":"RazonSocialValidator"})
     * @Annotation\Options({"label":"Razón Social", "description":"", "addon":""})
     * @ORM\Column(type="string", length=200, unique=true, nullable=false,
     * name="razon_social")
     */
    public $razonSocial = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Validator({"name":"CuitValidator"})
     * @Annotation\Options({"label":"Cuit", "description":"", "addon":"fa fa-male"})
     * @ORM\Column(type="string", length=200, unique=true, nullable=false, name="cuit")
     */
    public $cuit = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Domicilio", "description":"", "addon":"fa
     * fa-building"})
     * @ORM\Column(type="string", length=200, unique=false, nullable=true,
     * name="domicilio")
     */
    public $domicilio = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Localidad", "description":"", "addon":"fa 
     * fa-map-marker"})
     * @ORM\Column(type="string", length=100, unique=false, nullable=true,
     * name="localidad")
     */
    public $localidad = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Télefono", "description":"", "addon":"fa
     * fa-phone"})
     * @ORM\Column(type="string", length=20, unique=false, nullable=true,
     * name="telefono")
     */
    public $telefono = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Teléfono Alternativo", "description":"",
     * "addon":"fa fa-phone"})
     * @ORM\Column(type="string", length=20, unique=false, nullable=true,
     * name="telefono_alternativo")
     */
    public $telefonoAlternativo = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Email", "description":"", "addon":"fa
     * fa-envelope"})
     * @ORM\Column(type="string", length=30, unique=false, nullable=true, name="email")
     */
    public $email = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Date")
     * @Annotation\Attributes({"type":"date"})
     * @Annotation\Options({"label":"Fecha Asignación", "description":"", "addon":"fa
     * fa-calendar"})
     * @ORM\Column(type="date", unique=false, nullable=true, name="fecha_asignacion")
     */
    public $fechaAsignacion = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Date")
     * @Annotation\Attributes({"type":"date","disabled":"disabled"})
     * @Annotation\Options({"label":"Fecha de Retencion", "description":"", "addon":"fa
     * fa-calendar"})
     * @ORM\Column(type="date", unique=false, nullable=true, name="fecha_retencion")
     */
    public $fechaRetencion = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Date")
     * @Annotation\Attributes({"type":"date"})
     * @Annotation\Options({"label":"Fecha de Actualización", "description":"",
     * "addon":"fa fa-calendar"})
     * @ORM\Column(type="date", unique=false, nullable=true,
     * name="fecha_actualizacion")
     */
    public $fechaActualizacion = null;

    /**
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
     * @Annotation\Options({"label":"Responsable","empty_option": "",
     * "target_class":"\ZfMetal\Security\Entity\User", "description":""})
     * @ORM\ManyToOne(targetEntity="\ZfMetal\Security\Entity\User")
     * @ORM\JoinColumn(name="responsable_id", referencedColumnName="id", nullable=true)
     */
    public $responsable = null;

    /**
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
     * @Annotation\Options({"label":"Estado","empty_option": "",
     * "target_class":"\Acef\Entity\Estado", "description":""})
     * @ORM\ManyToOne(targetEntity="\Acef\Entity\Estado")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id", nullable=true)
     */
    public $estado = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Deuda Financiera", "description":"", "addon":"fa fa-usd"})
     * @Annotation\Attributes({"type":"text", "readonly":"readonly"})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="deuda")
     */
    public $deuda = null;

    /**
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
     * @Annotation\Options({"label":"Tipo","empty_option": "",
     * "target_class":"\Acef\Entity\TipoCliente", "description":""})
     * @ORM\ManyToOne(targetEntity="\Acef\Entity\TipoCliente")
     * @ORM\JoinColumn(name="tipo_cliente_id", referencedColumnName="id",
     * nullable=true)
     */
    public $tipoCliente = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Select")
     * @Annotation\Options({"label":"Tipo Documento", "description":"", "addon":"","empty_option": ""})
     * @Annotation\Attributes({"options":{"CUIT/CUIL":"CUIT/CUIL","DNI":"DNI","LC":"LC","LE":"LE"}})
     * @ORM\Column(type="string", unique=false, nullable=true, columnDefinition="ENUM('CUIT/CUIL','DNI','LC','LE')", name="tipo_dni")
     */
    public $tipoDni = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Deuda Contable", "description":"", "addon":"fa fa-usd"})
     * @ORM\Column(type="decimal", scale=2, precision=11, unique=false, nullable=true,
     * name="deuda_contable")
     */
    public $deudaContable = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }

    public function getCuit()
    {
        return $this->cuit;
    }

    public function setCuit($cuit)
    {
        $this->cuit = $cuit;
    }

    public function getDomicilio()
    {
        return $this->domicilio;
    }

    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getTelefonoAlternativo()
    {
        return $this->telefonoAlternativo;
    }

    public function setTelefonoAlternativo($telefonoAlternativo)
    {
        $this->telefonoAlternativo = $telefonoAlternativo;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getFechaAsignacion()
    {
        return $this->fechaAsignacion;
    }

    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fechaAsignacion = $fechaAsignacion;
    }

    public function getFechaRetencion()
    {
        return $this->fechaRetencion;
    }

    public function setFechaRetencion($fechaRetencion)
    {
        $this->fechaRetencion = $fechaRetencion;
    }

    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;
    }

    public function getResponsable()
    {
        return $this->responsable;
    }

    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getDeuda()
    {
        return $this->deuda;
    }

    public function setDeuda($deuda)
    {
        $this->deuda = $deuda;
    }

    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }

    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;
    }

    public function getTipoDni()
    {
        return $this->tipoDni;
    }

    public function setTipoDni($tipoDni)
    {
        $this->tipoDni = $tipoDni;
    }

    /**
     * @return mixed
     */
    public function getDeudaContable()
    {
        return $this->deudaContable;
    }

    /**
     * @param mixed $deudaContable
     *
     * @return self
     */
    public function setDeudaContable($deudaContable)
    {
        $this->deudaContable = $deudaContable;
        return $this;
    }

    public function __toString()
    {
        return  $this->razonSocial;
    }


}

