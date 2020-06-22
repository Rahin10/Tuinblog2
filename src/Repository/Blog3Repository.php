<?php

namespace App\Repository;

use App\Entity\Blog3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Blog3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blog3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blog3[]    findAll()
 * @method Blog3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Blog3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blog3::class);
    }

    // /**
    //  * @return Blog3[] Returns an array of Blog3 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Blog3
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
