<?php

namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Filiere
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
     * @ORM\Column(name="DateFiliere", type="datetime")
     */
    private $dateFiliere;

    

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50)
     */
    private $nom;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Annee")
     */
    private $anneeFiliere;


    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=50)
     */
    private $niveau;

    public function __toString(){
                
            return $this->niveau.'  '.$this->nom.' ( '.$this->anneeFiliere.' )';
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
     * Set dateFiliere
     *
     * @param integer $dateFiliere
     * @return Filiere
     */
    public function setDateFiliere($dateFiliere)

    {
        $this->dateFiliere = $dateFiliere;
    
        return $this;
    }

    /**
     * Get dateFiliere
     *
     * @return integer 
     */
    public function getDateFiliere()
    {
        return $this->dateFiliere;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Filiere
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
     * Set User
     *
     * @param User $User
     * @return Filiere
     */
    public function setUser($User)
    {
        $this->User = $User;
    
        return $this;
    }

    /**
     * Get User
     *
     * @return mixed 
     */
    public function getUser()
    {
        return $this->User;
    }



    
    /**
     * Set niveau
     *
     * @param string $niveau
     * @return Filiere
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

    

    /**
     * Set anneeFiliere
     *
     * @param \SRVDV\ServerBundle\Entity\Annee $anneeFiliere
     * @return Filiere
     */
    public function setAnneeFiliere(\SRVDV\ServerBundle\Entity\Annee $anneeFiliere = null)
    {
        $this->anneeFiliere = $anneeFiliere;

        return $this;
    }

    /**
     * Get anneeFiliere
     *
     * @return \SRVDV\ServerBundle\Entity\Annee 
     */
    public function getAnneeFiliere()
    {
        return $this->anneeFiliere;
    }
}
