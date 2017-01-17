<?php

namespace Eco\EcoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscri
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Inscri
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
     * @ORM\Column(name="Date_Inscri", type="datetime")
     */
    private $dateInscri;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Etudiant", type="integer")
     */
    private $idEtudiant;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Classe", type="integer")
     */
    private $idClasse;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=70)
     */
    private $observation;

    /**
     * @var string
     *
     * @ORM\Column(name="Reglement", type="string", length=70)
     */
    private $reglement;

    /**
     * @var integer
     *
     * @ORM\Column(name="Montant", type="integer")
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPiece", type="integer")
     */
    private $numPiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="Echance", type="integer")
     */
    private $echance;


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
     * Set dateInscri
     *
     * @param \DateTime $dateInscri
     * @return Inscri
     */
    public function setDateInscri($dateInscri)
    {
        $this->dateInscri = $dateInscri;

        return $this;
    }

    /**
     * Get dateInscri
     *
     * @return \DateTime 
     */
    public function getDateInscri()
    {
        return $this->dateInscri;
    }

    /**
     * Set idEtudiant
     *
     * @param integer $idEtudiant
     * @return Inscri
     */
    public function setIdEtudiant($idEtudiant)
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    /**
     * Get idEtudiant
     *
     * @return integer 
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }

    /**
     * Set idClasse
     *
     * @param integer $idClasse
     * @return Inscri
     */
    public function setIdClasse($idClasse)
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    /**
     * Get idClasse
     *
     * @return integer 
     */
    public function getIdClasse()
    {
        return $this->idClasse;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return Inscri
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set reglement
     *
     * @param string $reglement
     * @return Inscri
     */
    public function setReglement($reglement)
    {
        $this->reglement = $reglement;

        return $this;
    }

    /**
     * Get reglement
     *
     * @return string 
     */
    public function getReglement()
    {
        return $this->reglement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Inscri
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set numPiece
     *
     * @param integer $numPiece
     * @return Inscri
     */
    public function setNumPiece($numPiece)
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    /**
     * Get numPiece
     *
     * @return integer 
     */
    public function getNumPiece()
    {
        return $this->numPiece;
    }

    /**
     * Set echance
     *
     * @param integer $echance
     * @return Inscri
     */
    public function setEchance($echance)
    {
        $this->echance = $echance;

        return $this;
    }

    /**
     * Get echance
     *
     * @return integer 
     */
    public function getEchance()
    {
        return $this->echance;
    }
}
