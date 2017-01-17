<?php

namespace Eco\EcoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * prof
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class prof
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
     * @ORM\Column(name="libelle_prp", type="string", length=70)
     */
    private $libellePrp;

    

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=70)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=70)
     */
    private $niveau;


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
     * Set libellePrp
     *
     * @param string $libellePrp
     * @return prof
     */
    public function setLibellePrp($libellePrp)
    {
        $this->libellePrp = $libellePrp;

        return $this;
    }

    /**
     * Get libellePrp
     *
     * @return string 
     */
    public function getLibellePrp()
    {
        return $this->libellePrp;
    }

    

    /**
     * Set genre
     *
     * @param string $genre
     * @return prof
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return prof
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}
