<?php

namespace App\Repository;

use App\Entity\Favorite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Certification;
/**
 * @extends ServiceEntityRepository<Favorite>
 */
class FavoriteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Favorite::class);
    }

    //    /**
    //     * @return Favorite[] Returns an array of Favorite objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('f.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Favorite
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

  // src/Repository/FavoriteRepository.php

  public function findOneByUserAndCertification($user, Certification $certification)
  {
      return $this->createQueryBuilder('f')
          ->where('f.user_id = :user')
          ->andWhere('f.certification = :certification')
          ->setParameter('user', $user)
          ->setParameter('certification', $certification)
          ->getQuery()
          ->getOneOrNullResult();
  }
  
  public function findFavoritesByUserId(int $userId): array
  {
      return $this->createQueryBuilder('f')
          ->join('f.certification', 'c')
          ->addSelect('c')
          ->where('f.user_id = :userId')
          ->setParameter('userId', $userId)
          ->getQuery()
          ->getResult();
  }

}
