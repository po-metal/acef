<?php

namespace Acef\Entity;

use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
use Zend\Form\Annotation as Annotation;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint as UniqueConstraint;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * BitacoraCliente
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 * @ORM\Table(name="acef_bitacora_cliente")
 * @ORM\Entity(repositoryClass="Acef\Repository\BitacoraClienteRepository")
 */
class BitacoraCliente
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
     * @Annotation\Options({"label":"Cliente","empty_option": "",
     * "target_class":"Acef\Entity\Cliente", "description":""})
     * @ORM\ManyToOne(targetEntity="Acef\Entity\Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", nullable=true)
     */
    public $cliente = null;

    /**
     * @Annotation\Exclude()
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", unique=false, nullable=false, name="fecha")
     */
    public $fecha = null;

    /**
     * @Annotation\Attributes({"type":"textarea"})
     * @Annotation\Options({"label":"Nota", "description":""})
     * @ORM\Column(type="string", length=800, unique=false, nullable=true, name="nota")
     */
    public $nota = null;

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

    public function getNota()
    {
        return $this->nota;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    public function __toString()
    {
return;
    }


}

