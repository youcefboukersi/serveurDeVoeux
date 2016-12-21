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
     * @param \SRVDV\ServerBundle\Entity\TypeEnseignant $typeEnseignant
     * @return Inscription
     */
    public function setTypeEnseignant(\SRVDV\ServerBundle\Entity\TypeEnseignant $typeEnseignant = null)
    {
        $this->TypeEnseignant = $typeEnseignant;

        return $this;
    }

    /**
     * Get TypeEnseignant
     *
     * @return \SRVDV\ServerBundle\Entity\TypeEnseignant 
     */
    public function getTypeEnseignant()
    {
        return $this->TypeEnseignant;
    }

    /**
     * Set Utilisateur
     *
     * @param \SRVDV\ServerBundle\Entity\Utilisateur $utilisateur
     * @return Inscription
     */
    public function setUtilisateur(\SRVDV\ServerBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->Utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get Utilisateur
     *
     * @return \SRVDV\ServerBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }

    /**
     * Set Matier
     *
     * @param \SRVDV\ServerBundle\Entity\Matiere $matier
     * @return Inscription
     */
    public function setMatier(\SRVDV\ServerBundle\Entity\Matiere $matier = null)
    {
        $this->Matier = $matier;

        return $this;
    }

    /**
     * Get Matier
     *
     * @return mixed
     */
    public function getMatier()
    {
        return $this->Matier;
    }
}
