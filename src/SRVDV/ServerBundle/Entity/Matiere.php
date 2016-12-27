<?php

namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Matiere
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
     * @ORM\Column(name="Nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrHeurGroupe", type="integer")
     */
    private $nbrHeurGroupe;

    

    /**
     * @var integer
     *
     * @ORM\Column(name="NombreGroupe", type="integer")
     */
    private $NombreGroupe;

    /**
     * @ORM\ManyToOne(targetEntity="TypeEnseignant")
     */
    private $TypeEnseignant;

    /**
     * @ORM\ManyToOne(targetEntity="Filiere")
     */
    private $Filiere;

    /**
     * @var integer
     *
     * @ORM\Column(name="Semestre", type="integer")
     */
    private $semestre;


    public function __toString(){
                $heures = $this->nbrHeurGroupe * $this->NombreGroupe;
            return $this->TypeEnseignant->getLibelle() .' ('.$heures.') '.$this->nom.' ( sem:  '.$this->semestre.')  ';
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
     * @return Matiere
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
     * Set nbrHeurGroupe
     *
     * @param integer $nbrHeurGroupe
     * @return Matiere
     */
    public function setNbrHeurGroupe($nbrHeurGroupe)
    {
        $this->nbrHeurGroupe = $nbrHeurGroupe;
    
        return $this;
    }

    /**
     * Get nbrHeurGroupe
     *
     * @return integer 
     */
    public function getNbrHeurGroupe()
    {
        return $this->nbrHeurGroupe;
    }

/**
     * Set NombreGroupe
     *
     * @param integer $NombreGroupe
     * @return Matiere
     */
    public function setNombreGroupe($NombreGroupe)
    {
        $this->NombreGroupe = $NombreGroupe;
    
        return $this;
    }

    /**
     * Get nbrHeurGroupe
     *
     * @return integer 
     */
    public function getNombreGroupe()
    {
        return $this->NombreGroupe;
    } 
    

    /**
     * Set Filiere
     *
     * @param Filiere $Filiere
     * @return Matiere
     */
    public function setFiliere($Filiere)
    {
        $this->Filiere = $Filiere;
    
        return $this;
    }

    /**
     * Get Filiere
     *
     * @return mixed 
     */
    public function getFiliere()
    {
        return $this->Filiere;
    }

     /**
     * Set TypeEnseignant
     *
     * @param TypeEnseignant $TypeEnseignant
     * @return Matiere
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
     * Set semestre
     *
     * @param integer $semestre
     * @return Matiere
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;
    
        return $this;
    }

    /**
     * Get semestre
     *
     * @return integer 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }
}
