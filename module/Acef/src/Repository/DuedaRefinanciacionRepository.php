<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * DuedaRefinanciacionRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class DuedaRefinanciacionRepository extends EntityRepository
{

    public function save(\Acef\Entity\DuedaRefinanciacion $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\DuedaRefinanciacion $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

