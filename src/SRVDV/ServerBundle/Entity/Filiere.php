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
     * @var integer
     *
     * @ORM\Column(name="AnneeFiliere", type="integer")
     */
    private $anneeFiliere;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50)
     */
    private $nom;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     */
    private $Utilisateur;


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
     * @param \DateTime $dateFiliere
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
     * @return \DateTime 
     */
    public function getDateFiliere()
    {
        return $this->dateFiliere;
    }

    /**
     * Set anneeFiliere
     *
     * @param integer $anneeFiliere
     * @return Filiere
     */
<<<<<<< HEAD
    public function setAnneeFiliere($anneeFiliere)
=======
    public function setAnneeFilier($anneeFiliere)
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    {
        $this->anneeFiliere = $anneeFiliere;
    
        return $this;
    }

    /**
     * Get anneeFiliere
     *
     * @return integer 
     */
    public function getAnneeFiliere()
    {
        return $this->anneeFiliere;
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
     * Set Utilisateur
     *
     * @param Utilisateur $Utilisateur
     * @return Filiere
     */
    public function setUtilisateur($Utilisateur)
    {
        $this->Utilisateur = $Utilisateur;
    
        return $this;
    }

    /**
     * Get Utilisateur
     *
     * @return mixed 
     */
    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }
}
