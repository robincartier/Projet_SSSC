<?php

namespace AssoSport\AccueilBundle\Repository;

/**
 * ProjetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjetRepository extends \Doctrine\ORM\EntityRepository
{

    public function findNomProjet()
    {
        $qb = $this->createQueryBuilder('p');

        $qb
            ->where('p.nom = :nom')
            ->setParameter('nom', 'Objectif Lune')
        ;

        return $qb
            ->getQuery()
            ->getResult()
        ;
    }

    public function FindAllProjets(){
        return $this
            ->createQueryBuilder('p')
            ->getQuery()
            ->getResult()
        ;
    }
}
