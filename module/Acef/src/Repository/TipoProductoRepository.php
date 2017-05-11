<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TipoProductoRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class TipoProductoRepository extends EntityRepository
{

    public function save(\Acef\Entity\TipoProducto $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\TipoProducto $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

