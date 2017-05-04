<?php

namespace Acef\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ClienteRepository
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class ClienteRepository extends EntityRepository {

    const ENTITY = '\Acef\Entity\Cliente';

    public function save(\Acef\Entity\Cliente $entity) {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
    }

    public function remove(\Acef\Entity\Cliente $entity) {
        $this->getEntityManager()->remove($entity);
        $this->getEntityManager()->flush();
    }

    public function getClienteByRazonSocial($razonSocial) {
        return $this->getEntityManager()->createQueryBuilder()
                        ->select("u.id,u.razonSocial")
                        ->from(self::ENTITY, "u")
                        ->where("u.razonSocial like :param ")
                        ->setParameter('param','%'.$razonSocial.'%')
                        ->getQuery()->getArrayResult();
    }

}
