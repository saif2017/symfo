<?php

namespace Eco\EcoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * classe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class classe
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
     * @ORM\Column(name="libelle_classe", type="string", length=70)
     */
    private $libelleClasse;


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
     * Set libelleClasse
     *
     * @param string $libelleClasse
     * @return classe
     */
    public function setLibelleClasse($libelleClasse)
    {
        $this->libelleClasse = $libelleClasse;

        return $this;
    }

    /**
     * Get libelleClasse
     *
     * @return string 
     */
    public function getLibelleClasse()
    {
        return $this->libelleClasse;
    }
}
