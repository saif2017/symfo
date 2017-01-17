<?php

namespace Eco\EcoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegPro
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RegPro
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
     * @ORM\Column(name="matricule", type="integer")
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=4)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=7)
     */
    private $mois;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrHeur", type="integer")
     */
    private $nbrHeur;

    /**
     * @var float
     *
     * @ORM\Column(name="taux", type="float")
     */
    private $taux;

    /**
     * @var integer
     *
     * @ORM\Column(name="numCheque", type="integer")
     */
    private $numCheque;


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
     * @return RegPro
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
     * @return RegPro
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
     * @return RegPro
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
     * @return RegPro
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
     * Set montant
     *
     * @param float $montant
     * @return RegPro
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set nbrHeur
     *
     * @param integer $nbrHeur
     * @return RegPro
     */
    public function setNbrHeur($nbrHeur)
    {
        $this->nbrHeur = $nbrHeur;

        return $this;
    }

    /**
     * Get nbrHeur
     *
     * @return integer 
     */
    public function getNbrHeur()
    {
        return $this->nbrHeur;
    }

    /**
     * Set taux
     *
     * @param float $taux
     * @return RegPro
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return float 
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set numCheque
     *
     * @param integer $numCheque
     * @return RegPro
     */
    public function setNumCheque($numCheque)
    {
        $this->numCheque = $numCheque;

        return $this;
    }

    /**
     * Get numCheque
     *
     * @return integer 
     */
    public function getNumCheque()
    {
        return $this->numCheque;
    }
}
