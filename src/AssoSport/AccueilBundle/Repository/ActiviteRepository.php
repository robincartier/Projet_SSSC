<?php

namespace AssoSport\AccueilBundle\Repository;

/**
 * ActiviteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ActiviteRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllActivites()
	{
		$qb = $this->createQueryBuilder('a');
		return $qb
			->getQuery()
			->getResult()
		;
	}

	public function findActivitesAdherent($id, $date)
	{
		$qb = $this->createQueryBuilder('a');

		$qb
    		->where('a.utilisateur = :id')
    		->setParameter('id', $id)
    		->andWhere('a.date > :date')
			->setParameter('date', $date)
  		;

		return $qb
			->getQuery()
			->getResult()
		;
	}

	public function findAllActivitesAdherent($id)
	{
		$qb = $this->createQueryBuilder('a');

		$qb
    		->where('a.utilisateur = :id')
    		->setParameter('id', $id)
  		;

		return $qb
			->getQuery()
			->getResult()
		;
	}

    public function findActivitesAdherentProjet($id, $projet)
    {
        $qb = $this->createQueryBuilder('a');

        $qb
            ->where('a.utilisateur = :id')
            ->setParameter('id', $id)
            ->andWhere('a.projet = :projet')
            ->setParameter('projet', $projet)
        ;

        return $qb
            ->getQuery()
            ->getResult()
        ;
    }
	
	public function findAllActivitesProjet()
	{
		$qb = $this->createQueryBuilder('a');

		$qb
    		->where('a.projet = :id')
    		->setParameter('id', 1)
  		;

		return $qb
			->getQuery()
			->getResult()
		;
	}

    public function findActivitesTempsAdherent($id,$dateDeb,$dateFin)
    {
        $qb = $this->createQueryBuilder('a');

        $qb
            ->where('a.utilisateur = :id')
            ->setParameter('id', $id)
            ->andWhere('a.date >= :dateDeb')
            ->setParameter('dateDeb', $dateDeb)
            ->andWhere('a.date < :dateFin')
            ->setParameter('dateFin', $dateFin)
        ;

        return $qb
            ->getQuery()
            ->getResult()
        ;
    }

    public function findDistinctActivitesAdherent($id,$date)
    {
        $qb = $this->createQueryBuilder('a');

        $qb
            ->select('DISTINCT a.sport')
            ->where('a.utilisateur = :id')
            ->setParameter('id', $id)
            ->andWhere('a.date > :date')
            ->setParameter('date', $date)
        ;

        return $qb
            ->getQuery()
            ->getResult()
        ;
    }
    
	
}
