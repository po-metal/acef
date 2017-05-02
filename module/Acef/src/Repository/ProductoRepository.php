<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProductoRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class ProductoRepository extends EntityRepository
{

    public function save(\Acef\Entity\Producto $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\Producto $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

