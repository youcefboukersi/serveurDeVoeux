<?php
<<<<<<< HEAD

namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

=======
namespace SRVDV\ServerBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
    
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * @var integer
     *
     * @ORM\Column(name="DateUtilisateur", type="integer")
     */
    private $dateUtilisateur;
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50)
     */
    private $nom;
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=50)
     */
    private $prenom;
<<<<<<< HEAD

    

=======
    
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=50)
     */
    private $login;
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * @var string
     *
     * @ORM\Column(name="MotDePasse", type="string", length=50)
     */
    private $motDePasse;
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=255)
     */
    private $mail;
<<<<<<< HEAD

  

    /**
	 * @ORM\ManyToOne(targetEntity="Role")
     */
    private $role;

    /**
	 * @ORM\ManyToOne(targetEntity="TypeUtilisateur")
     */
    private $type;

=======
  
    /**
     * @ORM\ManyToOne(targetEntity="Role")
     */
    private $role;
    /**
     * @ORM\ManyToOne(targetEntity="TypeUtilisateur")
     */
    private $type;
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * @var integer
     *
     * @ORM\Column(name="NombreHeurTheo", type="integer")
     */
    private $nombreHeurTheo;
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * Get dateUtilisateur
     *
     * @return integer 
     */
    public function getDateUtilisateur()
    {
        return $this->dateUtilisateur;
    }
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * Get motDePasse
     *
     * @return string 
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
<<<<<<< HEAD

 

=======
 
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * Get role
     *
     * @return mixed 
     */
    public function getRole()
    {
        return $this->role;
    }
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * Get type
     *
     * @return mixed 
     */
    public function getType()
    {
        return $this->type;
    }
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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
<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
    /**
     * Get nombreHeurTheo
     *
     * @return integer 
     */
    public function getNombreHeurTheo()
    {
        return $this->nombreHeurTheo;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
