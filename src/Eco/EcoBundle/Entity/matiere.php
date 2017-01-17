<?php

namespace Eco\EcoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * matiere
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class matiere
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
     * @var string
     *
     * @ORM\Column(name="libelle_matiere", type="string", length=70)
     */
    private $libelleMatiere;


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
     * Set libelleMatiere
     *
     * @param string $libelleMatiere
     * @return matiere
     */
    public function setLibelleMatiere($libelleMatiere)
    {
        $this->libelleMatiere = $libelleMatiere;

        return $this;
    }

    /**
     * Get libelleMatiere
     *
     * @return string 
     */
    public function getLibelleMatiere()
    {
        return $this->libelleMatiere;
    }
}
