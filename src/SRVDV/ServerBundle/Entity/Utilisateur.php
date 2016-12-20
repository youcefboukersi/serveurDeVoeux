<?php


namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


namespace SRVDV\ServerBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Utilisateur
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
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=50)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="MotDePasse", type="string", length=50)
     */
    private $motDePasse;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=255)
     */
    private $mail;
    /**
	 * @ORM\ManyToOne(targetEntity="Role")
     */
    private $role;

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

        public function __toString(){
            return $this->nom.' '.$this->prenom;
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
     * Set dateUtilisateur
     *
     * @param integer $dateUtilisateur
     * @return Utilisateur
     */
    public function setDateUtilisateur($dateUtilisateur)
    {
        $this->dateUtilisateur = $dateUtilisateur;
    
        return $this;
    }


    /**
     * Get dateUtilisateur
     *
     * @return integer 
     */
    public function getDateUtilisateur()
    {
        return $this->dateUtilisateur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Set login
     *
     * @param string $login
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }


    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return Utilisateur
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    
        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string 
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * Set role
     *
     * @param Role $role
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }
    /**
     * Get role
     *
     * @return mixed 
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set type
     *
     * @param typeUtilisateur $type
     * @return Utilisateur
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return mixed 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set nombreHeurTheo
     *
     * @param integer $nombreHeurTheo
     * @return Utilisateur
     */
    public function setNombreHeurTheo($nombreHeurTheo)
    {
        $this->nombreHeurTheo = $nombreHeurTheo;
    
        return $this;
    }
    /**
     * Get nombreHeurTheo
     *
     * @return integer 
     */
    public function getNombreHeurTheo()
    {
        return $this->nombreHeurTheo;
    }

}


