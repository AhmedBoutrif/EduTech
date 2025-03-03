<?php

namespace App\Repository;

use App\Entity\Panier;
use App\Entity\Certification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Panier>
 */
class PanierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Panier::class);
    }

    /**
     * Récupère les certifications triées par ordre alphabétique.
     *
     * @param array $cart Liste des IDs des certifications dans le panier.
     * @return Certification[] Retourne les certifications triées.
     */
    public function findSortedCertifications(array $cart): array
    {
        if (empty($cart)) {
            return [];
        }

        return $this->getEntityManager()->getRepository(Certification::class)
            ->createQueryBuilder('c')
            ->where('c.id IN (:cart)')
            ->setParameter('cart', $cart)
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
