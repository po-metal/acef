<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PagoRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class PagoRepository extends EntityRepository
{

    public function save(\Acef\Entity\Pago $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\Pago $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

