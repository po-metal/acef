<?php

namespace Acef\Entity;

use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
use Zend\Form\Annotation as Annotation;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint as UniqueConstraint;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * TipoProducto
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 * @ORM\Table(name="acef_tipo_producto")
 * @ORM\Entity(repositoryClass="Acef\Repository\TipoProductoRepository")
 */
class TipoProducto
{

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"id", "description":""})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=0, unique=false, nullable=false, name="id")
     */
    public $id = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Nombre", "description":""})
     * @ORM\Column(type="string", length=60, unique=true, nullable=false,
     * name="nombre")
     */
    public $nombre = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function __toString()
    {
        return  $this->nombre;
    }


}

