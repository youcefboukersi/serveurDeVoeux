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
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Matiere")
     */
    private $Matiere;


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
     * Set User
     *
     * @param \SRVDV\ServerBundle\Entity\User $user
     * @return Inscription
     */
    public function setUser(\SRVDV\ServerBundle\Entity\User $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \SRVDV\ServerBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set Matiere
     *
     * @param \SRVDV\ServerBundle\Entity\Matiere $matiere
     * @return Inscription
     */
    public function setMatiere(\SRVDV\ServerBundle\Entity\Matiere $matiere = null)
    {
        $this->Matiere = $matiere;

        return $this;
    }

    /**
     * Get Matiere
     *
     * @return mixed
     */
    public function getMatiere()
    {
        return $this->Matiere;
    }
}
