<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * DeudaActualizacionRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class DeudaActualizacionRepository extends EntityRepository
{

    public function save(\Acef\Entity\DeudaActualizacion $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\DeudaActualizacion $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

