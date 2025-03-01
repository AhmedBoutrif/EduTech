<?php
// src/Repository/AvaibilityRepository.php

namespace App\Repository;

use App\Entity\Avaibility;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Avaibility|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avaibility|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avaibility[]    findAll()
 * @method Avaibility[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvaibilityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avaibility::class);
    }

    /**
     * @return Avaibility[] Returns an array of Avaibility objects
     */
    public function findRecentAvailabilities(): array
    {
        $today = new \DateTime();
        $today->setTime(0, 0, 0); // Set time to the start of the day

        return $this->createQueryBuilder('a')
            ->andWhere('a.date >= :today')
            ->setParameter('today', $today)
            ->orderBy('a.date', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
