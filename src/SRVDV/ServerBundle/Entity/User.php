<?php

namespace SRVDV\ServerBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use SRVDV\ServerBundle\Entity\Role;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="DateUtilisateur", type="integer")
     */
    private $dateUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\ManyToOne(targetEntity="TypeUtilisateur")
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="NombreHeurTheo", type="integer")
     */
    private $nombreHeurTheo;

    
    public function __construct() {
        parent::__construct();
        // your own logic
    }

    /**
     * Set dateUtilisateur
     *
     * @param integer $dateUtilisateur
     * @return User
     */
    public function setDateUtilisateur($dateUtilisateur) {
        $this->dateUtilisateur = $dateUtilisateur;

        return $this;
    }

    /**
     * Get dateUtilisateur
     *
     * @return integer 
     */
    public function getDateUtilisateur() {
        return $this->dateUtilisateur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set nombreHeurTheo
     *
     * @param integer $nombreHeurTheo
     * @return User
     */
    public function setNombreHeurTheo($nombreHeurTheo) {
        $this->nombreHeurTheo = $nombreHeurTheo;

        return $this;
    }

    /**
     * Get nombreHeurTheo
     *
     * @return integer 
     */
    public function getNombreHeurTheo() {
        return $this->nombreHeurTheo;
    }

    /**
     * Set type
     *
     * @param \SRVDV\ServerBundle\Entity\TypeUtilisateur $type
     * @return User
     */
    public function setType(\SRVDV\ServerBundle\Entity\TypeUtilisateur $type = null) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \SRVDV\ServerBundle\Entity\TypeUtilisateur 
     */
    public function getType() {
        return $this->type;
    }

}
