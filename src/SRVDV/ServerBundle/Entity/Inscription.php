<?php

namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Inscription
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
     * @ORM\Column(name="DateInscription", type="datetime")
     */
    private $dateInscription;


    /**
     * @var integer
     *
     * @ORM\Column(name="NbHeurCours", type="integer")
     */
    private $nbHeur;

<<<<<<< HEAD
   
=======
   /**
     * @ORM\ManyToOne(targetEntity="TypeEnseignant")
     */
    private $TypeEnseignant;

>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     */
    private $Utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     */
    private $Matier;

  
<<<<<<< HEAD
 
=======


>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Inscription
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    
        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

   

    /**
     * Set nbHeur
     *
     * @param integer $nbHeur
     * @return Inscription
     */
    public function setNbHeur($nbHeur)
    {
        $this->nbHeur = $nbHeur;
    
        return $this;
    }

    /**
     * Get nbHeur
     *
     * @return integer 
     */
    public function getNbHeur()
    {
        return $this->nbHeur;
    }

   
<<<<<<< HEAD

=======
/**
     * Set TypeEnseignant
     *
     * @param TypeEnseignant $TypeEnseignant
     * @return Inscription
     */
    public function setTypeEnseignant($TypeEnseignant)
    {
        $this->TypeEnseignant = $TypeEnseignant;
    
        return $this;
    }

    /**
     * Get TypeEnseignant
     *
     * @return mixed 
     */
    public function getTypeEnseignant()
    {
        return $this->TypeEnseignant;
    }
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c

    /**
     * Set Utilisateur
     *
     * @param Utilisateur $Utilisateur
     * @return Inscription
     */
    public function setUtilisateur($Utilisateur)
    {
        $this->Utilisateur = $Utilisateur;
    
        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return mixed 
     */
    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }

    /**
<<<<<<< HEAD
     * Set Matier
     *
     * @param Matiere $Matier
     * @return Inscription
     */
    public function setMatier($Matier)
    {
        $this->Matier = $Matier;
=======
     * Set Matiere
     *
     * @param Matiere $Matiere
     * @return Inscription
     */
    public function setMatiere($Matiere)
    {
        $this->Matier = $Matiere;
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    
        return $this;
    }

    /**
<<<<<<< HEAD
     * Get Matier
     *
     * @return mixed 
     */
    public function getMatier()
=======
     * Get Matiere
     *
     * @return mixed 
     */
    public function getMatiere()
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    {
        return $this->Matier;
    }

   
}
