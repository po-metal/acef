<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * BitacoraClienteRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class BitacoraClienteRepository extends EntityRepository
{

    public function save(\Acef\Entity\BitacoraCliente $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\BitacoraCliente $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

