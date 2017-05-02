<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * EstadoRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class EstadoRepository extends EntityRepository
{

    public function save(\Acef\Entity\Estado $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\Estado $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

