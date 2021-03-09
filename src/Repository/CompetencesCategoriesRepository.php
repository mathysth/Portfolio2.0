<?php

namespace App\Repository;

use App\Entity\CompetencesCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CompetencesCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompetencesCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompetencesCategories[]    findAll()
 * @method CompetencesCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetencesCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompetencesCategories::class);
    }

    // /**
    //  * @return CompetencesCategories[] Returns an array of CompetencesCategories objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CompetencesCategories
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
