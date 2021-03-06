<?php

namespace AssoSport\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sport
 *
 * @ORM\Table(name="sport")
 * @ORM\Entity(repositoryClass="AssoSport\AccueilBundle\Repository\SportRepository")
 */
class Sport
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
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="TypeDistance", type="boolean")
     */
    private $typeDistance;
    
    /**
    * @ORM\ManyToOne(targetEntity="AssoSport\AccueilBundle\Entity\TypeSport")
    * @ORM\JoinColumn(nullable=false)
    */
    private $typeSport;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Sport
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set typeDistance
     *
     * @param boolean $typeDistance
     *
     * @return Sport
     */
    public function setTypeDistance($typeDistance)
    {
        $this->typeDistance = $typeDistance;

        return $this;
    }

    /**
     * Get typeDistance
     *
     * @return bool
     */
    public function getTypeDistance()
    {
        return $this->typeDistance;
    }

    /**
     * Set typeSport
     *
     * @param \AssoSport\AccueilBundle\Entity\TypeSport $typeSport
     *
     * @return Sport
     */
    public function setTypeSport(\AssoSport\AccueilBundle\Entity\TypeSport $typeSport)
    {
        $this->typeSport = $typeSport;

        return $this;
    }

    /**
     * Get typeSport
     *
     * @return \AssoSport\AccueilBundle\Entity\TypeSport
     */
    public function getTypeSport()
    {
        return $this->typeSport;
    }
}
