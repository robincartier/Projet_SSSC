<?php

namespace AssoSport\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity(repositoryClass="AssoSport\AccueilBundle\Repository\ActiviteRepository")
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date")
     * @Assert\Valid()
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="Temps", type="integer")
     * @Assert\Range(min=0, minMessage="Veuillez entrer une distance positive.")
     */
    private $temps;

    /**
     * @var int
     *
     * @ORM\Column(name="Borg", type="integer")
     * @Assert\Range(min=6, max=20, minMessage="Veuillez entrer une valeur supérieure à 5.", maxMessage="Veuillez entrer une valeur inférieure à 21.")
     */
    private $borg;

    /**
     * @var int
     *
     * @ORM\Column(name="Sensation", type="integer")
     * @Assert\Range(min=1, max=4, minMessage="Veuillez entrer une valeur supérieure à 0.", maxMessage="Veuillez entrer une valeur inférieure à 5.")
     */
    private $sensation;

    /**
     * @var int
     *
     * @ORM\Column(name="DistanceKm", type="integer")
     * @Assert\Range(min=0, minMessage="Veuillez entrer une distance positive.")
     */
    private $distanceKm;

    /**
     * @var bool
     *
     * @ORM\Column(name="Adherent", type="boolean")
     * @Assert\Valid()
     */
    private $adherent;
    
	/**
    * @ORM\ManyToOne(targetEntity="AssoSport\UserBundle\Entity\Utilisateur")
    * @ORM\JoinColumn(nullable=false)
    * @Assert\Valid()
    */
    private $utilisateur;
    
    /**
    * @ORM\ManyToOne(targetEntity="AssoSport\AccueilBundle\Entity\Sport")
    * @ORM\JoinColumn(nullable=false)
    * @Assert\Valid()
    */
    private $sport;
    
    /**
    * @ORM\ManyToOne(targetEntity="AssoSport\AccueilBundle\Entity\Projet")
    * @ORM\JoinColumn(nullable=true)
    * @Assert\Valid()
    */
    private $projet;

    /**
    * Ctor
    */
    public function __construct()
    {
        $this->date = new \Datetime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Activite
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set temps
     *
     * @param integer $temps
     *
     * @return Activite
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return int
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set borg
     *
     * @param integer $borg
     *
     * @return Activite
     */
    public function setBorg($borg)
    {
        $this->borg = $borg;

        return $this;
    }

    /**
     * Get borg
     *
     * @return int
     */
    public function getBorg()
    {
        return $this->borg;
    }

    /**
     * Set sensation
     *
     * @param integer $sensation
     *
     * @return Activite
     */
    public function setSensation($sensation)
    {
        $this->sensation = $sensation;

        return $this;
    }

    /**
     * Get sensation
     *
     * @return int
     */
    public function getSensation()
    {
        return $this->sensation;
    }

    /**
     * Set distanceKm
     *
     * @param integer $distanceKm
     *
     * @return Activite
     */
    public function setDistanceKm($distanceKm)
    {
        $this->distanceKm = $distanceKm;

        return $this;
    }

    /**
     * Get distanceKm
     *
     * @return int
     */
    public function getDistanceKm()
    {
        return $this->distanceKm;
    }

    /**
     * Set adherent
     *
     * @param boolean $adherent
     *
     * @return Activite
     */
    public function setAdherent($adherent)
    {
        $this->adherent = $adherent;

        return $this;
    }

    /**
     * Get adherent
     *
     * @return bool
     */
    public function getAdherent()
    {
        return $this->adherent;
    }

    /**
     * Set utilisateur
     *
     * @param \AssoSport\UserBundle\Entity\Utilisateur $utilisateur
     *
     * @return Activite
     */
    public function setUtilisateur(\AssoSport\UserBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \AssoSport\UserBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set sport
     *
     * @param \AssoSport\AccueilBundle\Entity\Sport $sport
     *
     * @return Activite
     */
    public function setSport(\AssoSport\AccueilBundle\Entity\Sport $sport)
    {
        $this->sport = $sport;

        return $this;
    }

    /**
     * Get sport
     *
     * @return \AssoSport\AccueilBundle\Entity\Sport
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Set projet
     *
     * @param \AssoSport\AccueilBundle\Entity\Projet $projet
     *
     * @return Activite
     */
    public function setProjet(\AssoSport\AccueilBundle\Entity\Projet $projet)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \AssoSport\AccueilBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }
}
