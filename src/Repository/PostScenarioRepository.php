<?php

namespace App\Repository;

use App\Entity\PostScenario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PostScenario|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostScenario|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostScenario[]    findAll()
 * @method PostScenario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostScenarioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PostScenario::class);
    }

    // /**
    //  * @return PostScenario[] Returns an array of PostScenario objects
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
    public function findOneBySomeField($value): ?PostScenario
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
