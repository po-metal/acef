<?php

namespace Acef\Entity;

use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
use Zend\Form\Annotation as Annotation;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint as UniqueConstraint;

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
     * @Annotation\Attributes({"type":"hidden"})
     * @Annotation\Type("Zend\Form\Element\Hidden")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=11, unique=false, nullable=false, name="id")
     */
    public $id = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Razón Social", "description":""})
     * @ORM\Column(type="string", length=200, unique=true, nullable=false,
     * name="razon_social")
     */
    public $razonSocial = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"cuit", "description":""})
     * @ORM\Column(type="string", length=200, unique=true, nullable=true, name="cuit")
     */
    public $cuit = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"domicilio", "description":""})
     * @ORM\Column(type="string", length=200, unique=false, nullable=true,
     * name="domicilio")
     */
    public $domicilio = null;

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

    public function __toString()
    {
        return  $this->razonSocial;
    }


}

