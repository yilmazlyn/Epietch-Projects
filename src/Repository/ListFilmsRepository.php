<?php

namespace App\Repository;

use App\Entity\ListFilms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ListFilms|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListFilms|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListFilms[]    findAll()
 * @method ListFilms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListFilmsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListFilms::class);
    }

    // /**
    //  * @return ListFilms[] Returns an array of ListFilms objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListFilms
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
