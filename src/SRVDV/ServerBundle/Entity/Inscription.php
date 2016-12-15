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

   /**
     * @ORM\ManyToOne(targetEntity="TypeEnseignant")
     */
    private $TypeEnseignant;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     */
    private $Utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     */
    private $Matier;

  


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
     * Set Matiere
     *
     * @param Matiere $Matiere
     * @return Inscription
     */
    public function setMatiere($Matiere)
    {
        $this->Matier = $Matiere;
    
        return $this;
    }

    /**
     * Get Matiere
     *
     * @return mixed 
     */
    public function getMatiere()
    {
        return $this->Matier;
    }

   
}
