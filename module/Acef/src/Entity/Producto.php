<?php

namespace Acef\Entity;

use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
use Zend\Form\Annotation as Annotation;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint as UniqueConstraint;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Producto
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 * @ORM\Table(name="acef_producto")
 * @ORM\Entity(repositoryClass="Acef\Repository\ProductoRepository")
 */
class Producto
{

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"ID", "description":""})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=0, unique=false, nullable=false, name="id")
     */
    public $id = null;

    /**
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
     * @Annotation\Options({"label":"Tipo","empty_option": "",
     * "target_class":"\Acef\Entity\TipoProducto", "description":""})
     * @ORM\ManyToOne(targetEntity="\Acef\Entity\TipoProducto")
     * @ORM\JoinColumn(name="nombre_id", referencedColumnName="id", nullable=false)
     */
    public $nombre = null;

    /**
     * @Annotation\Attributes({"type":"text"})
     * @Annotation\Options({"label":"Número", "description":""})
     * @ORM\Column(type="string", length=20, unique=false, nullable=true,
     * name="numero")
     */
    public $numero = null;

    /**
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
     * @Annotation\Options({"label":"Cliente","empty_option": "",
     * "target_class":"\Acef\Entity\Cliente", "description":""})
     * @ORM\ManyToOne(targetEntity="\Acef\Entity\Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", nullable=true)
     */
    public $cliente = null;

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

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function __toString()
    {
return;
    }


}

