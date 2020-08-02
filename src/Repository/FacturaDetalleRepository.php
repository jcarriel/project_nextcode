<?php

namespace App\Repository;

use App\Entity\FacturaDetalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FacturaDetalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method FacturaDetalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method FacturaDetalle[]    findAll()
 * @method FacturaDetalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FacturaDetalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FacturaDetalle::class);
    }

    // /**
    //  * @return FacturaDetalle[] Returns an array of FacturaDetalle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FacturaDetalle
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
