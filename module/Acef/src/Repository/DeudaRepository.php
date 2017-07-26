<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * DeudaRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class DeudaRepository extends EntityRepository
{

    public function save(\Acef\Entity\Deuda $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\Deuda $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

