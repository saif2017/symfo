<?php

namespace Eco\EcoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * eleve
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class eleve
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
     * @ORM\Column(name="nom", type="string", length=70)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=70)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=70)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_tuteur", type="string", length=70)
     */
    private $telTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_tuteur", type="string", length=70)
     */
    private $adresseTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_tuteur", type="string", length=70)
     */
    private $nomTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=70)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="email_tuteur", type="string", length=70)
     */
    private $emailTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="profession_tuteur", type="string", length=70)
     */
    private $professionTuteur;
    
    
    
     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;
    
    
    
    
    
    
    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/pic';
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    

    
    
    
    
    


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
     * Set nom
     *
     * @param string $nom
     * @return eleve
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
     * Set prenom
     *
     * @param string $prenom
     * @return eleve
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return eleve
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
     * Set telTuteur
     *
     * @param string $telTuteur
     * @return eleve
     */
    public function setTelTuteur($telTuteur)
    {
        $this->telTuteur = $telTuteur;

        return $this;
    }

    /**
     * Get telTuteur
     *
     * @return string 
     */
    public function getTelTuteur()
    {
        return $this->telTuteur;
    }

    /**
     * Set adresseTuteur
     *
     * @param string $adresseTuteur
     * @return eleve
     */
    public function setAdresseTuteur($adresseTuteur)
    {
        $this->adresseTuteur = $adresseTuteur;

        return $this;
    }

    /**
     * Get adresseTuteur
     *
     * @return string 
     */
    public function getAdresseTuteur()
    {
        return $this->adresseTuteur;
    }

    /**
     * Set nomTuteur
     *
     * @param string $nomTuteur
     * @return eleve
     */
    public function setNomTuteur($nomTuteur)
    {
        $this->nomTuteur = $nomTuteur;

        return $this;
    }

    /**
     * Get nomTuteur
     *
     * @return string 
     */
    public function getNomTuteur()
    {
        return $this->nomTuteur;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return eleve
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set emailTuteur
     *
     * @param string $emailTuteur
     * @return eleve
     */
    public function setEmailTuteur($emailTuteur)
    {
        $this->emailTuteur = $emailTuteur;

        return $this;
    }

    /**
     * Get emailTuteur
     *
     * @return string 
     */
    public function getEmailTuteur()
    {
        return $this->emailTuteur;
    }

    /**
     * Set professionTuteur
     *
     * @param string $professionTuteur
     * @return eleve
     */
    public function setProfessionTuteur($professionTuteur)
    {
        $this->professionTuteur = $professionTuteur;

        return $this;
    }

    /**
     * Get professionTuteur
     *
     * @return string 
     */
    public function getProfessionTuteur()
    {
        return $this->professionTuteur;
    }
/**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
   
public function upload()
{
    // the file property can be empty if the field is not required
    if (null === $this->getFile()) {
        return;
    }

    // use the original file name here but you should
    // sanitize it at least to avoid any security issues

    // move takes the target directory and then the
    // target filename to move to
    $this->getFile()->move(
        $this->getUploadRootDir(),
        $this->getFile()->getClientOriginalName()
    );

    // set the path property to the filename where you've saved the file
    $this->path = $this->getFile()->getClientOriginalName();

    // clean up the file property as you won't need it anymore
    $this->file = null;
}
    
}
