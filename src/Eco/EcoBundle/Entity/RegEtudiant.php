<?php

namespace Eco\EcoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegEtudiant
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RegEtudiant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReg", type="date")
     */
    private $dateReg;

    /**
     * @var integer
     *
     * @ORM\Column(name="Matricule", type="integer")
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="Annee", type="string", length=4)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=70)
     */
    private $mois;

    /**
     * @var string
     *
     * @ORM\Column(name="trimestre", type="string", length=70)
     */
    private $trimestre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateReg
     *
     * @param \DateTime $dateReg
     * @return RegEtudiant
     */
    public function setDateReg($dateReg)
    {
        $this->dateReg = $dateReg;

        return $this;
    }

    /**
     * Get dateReg
     *
     * @return \DateTime 
     */
    public function getDateReg()
    {
        return $this->dateReg;
    }

    /**
     * Set matricule
     *
     * @param integer $matricule
     * @return RegEtudiant
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return integer 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return RegEtudiant
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set mois
     *
     * @param string $mois
     * @return RegEtudiant
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string 
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set trimestre
     *
     * @param string $trimestre
     * @return RegEtudiant
     */
    public function setTrimestre($trimestre)
    {
        $this->trimestre = $trimestre;

        return $this;
    }

    /**
     * Get trimestre
     *
     * @return string 
     */
    public function getTrimestre()
    {
        return $this->trimestre;
    }
}
