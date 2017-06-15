<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TipoClienteRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class TipoClienteRepository extends EntityRepository
{

    public function save(\Acef\Entity\TipoCliente $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\TipoCliente $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

