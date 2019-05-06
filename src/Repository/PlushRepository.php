<?php

namespace App\Repository;

use App\Entity\Plush;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Plush|null find($id, $lockMode = null, $lockVersion = null)
 * @method Plush|null findOneBy(array $criteria, array $orderBy = null)
 * @method Plush[]    findAll()
 * @method Plush[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlushRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Plush::class);
    }

    // /**
    //  * @return Plush[] Returns an array of Plush objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Plush
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
