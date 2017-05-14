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
class Cliente {

    /**
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
     * @Annotation\Options({"label":"Razón Social", "description":"", "addon":""})
     * @Annotation\Validator({"name":"RazonSocialValidator"}) 
     * @ORM\Column(type="string", length=200, unique=true, nullable=false,
     * name="razon_social")
     */
    public $razonSocial = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Cuit", "description":"ex. 999-99-9999",
     * "addon":"fa fa-male"})
     * @Annotation\Validator({"name":"CuitValidator"}) 
     * @ORM\Column(type="string", length=200, unique=true, nullable=true, name="cuit")
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
     * @Annotation\Options({"label":"Télefono", "description":"ex. (999) 999-9999",
     * "addon":"fa fa-phone"})
     * @ORM\Column(type="string", length=20, unique=false, nullable=true,
     * name="telefono")
     */
    public $telefono = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Teléfono Alternativo", "description":"ex. (999)
     * 999-9999", "addon":"fa fa-phone"})
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
     * @Annotation\Options({"label":"Fecha Asignación", "description":"ex.
     * 99/99/9999", "addon":"fa fa-calendar"})
     * @ORM\Column(type="date", unique=false, nullable=true, name="fecha_asignacion")
     */
    public $fechaAsignacion = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Date")
     * @Annotation\Attributes({"type":"date"})
     * @Annotation\Options({"label":"Fecha de Retencion", "description":"ex.
     * 99/99/9999", "addon":"fa fa-calendar"})
     * @ORM\Column(type="date", unique=false, nullable=true, name="fecha_retencion")
     */
    public $fechaRetencion = null;

    /**
     * @Annotation\Type("Zend\Form\Element\Date")
     * @Annotation\Attributes({"type":"date"})
     * @Annotation\Options({"label":"Fecha de Actualización", "description":"ex.
     * 99/99/9999", "addon":"fa fa-calendar"})
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

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getRazonSocial() {
        return $this->razonSocial;
    }

    public function setRazonSocial($razonSocial) {
        $this->razonSocial = $razonSocial;
    }

    public function getCuit() {
        return $this->cuit;
    }

    public function setCuit($cuit) {
        $this->cuit = $cuit;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    public function getLocalidad() {
        return $this->localidad;
    }

    public function setLocalidad($localidad) {
        $this->localidad = $localidad;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getTelefonoAlternativo() {
        return $this->telefonoAlternativo;
    }

    public function setTelefonoAlternativo($telefonoAlternativo) {
        $this->telefonoAlternativo = $telefonoAlternativo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getFechaAsignacion() {
        return $this->fechaAsignacion;
    }

    public function setFechaAsignacion($fechaAsignacion) {
        $this->fechaAsignacion = $fechaAsignacion;
    }

    public function getFechaRetencion() {
        return $this->fechaRetencion;
    }

    public function setFechaRetencion($fechaRetencion) {
        $this->fechaRetencion = $fechaRetencion;
    }

    public function getFechaActualizacion() {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion($fechaActualizacion) {
        $this->fechaActualizacion = $fechaActualizacion;
    }

    public function getResponsable() {
        return $this->responsable;
    }

    public function setResponsable($responsable) {
        $this->responsable = $responsable;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function __toString() {
        return $this->razonSocial;
    }

}
