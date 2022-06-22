<?php

namespace App\Repository;

use App\Entity\CasaHogwarts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CasaHogwarts>
 *
 * @method CasaHogwarts|null find($id, $lockMode = null, $lockVersion = null)
 * @method CasaHogwarts|null findOneBy(array $criteria, array $orderBy = null)
 * @method CasaHogwarts[]    findAll()
 * @method CasaHogwarts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CasaHogwartsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CasaHogwarts::class);
    }

    public function add(CasaHogwarts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CasaHogwarts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CasaHogwarts[] Returns an array of CasaHogwarts objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CasaHogwarts
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
