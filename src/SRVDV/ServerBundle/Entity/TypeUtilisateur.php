<?php

namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUtilisateur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeUtilisateur
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
     * @ORM\Column(name="Code", type="string", length=20)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=30)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbrHeures", type="integer")
     */
    private $nbrHeures;


      

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
     * Set code
     *
     * @param string $code
     * @return TypeUtilisateur
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return TypeUtilisateur
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set nbrHeures
     *
     * @param integer $nbrHeures
     * @return TypeUtilisateur
     */
    public function setNbrHeures($nbrHeures)
    {
        $this->nbrHeures = $nbrHeures;
    
        return $this;
    }

    /**
     * Get nbrHeures
     *
     * @return integer 
     */
    public function getNbrHeures()
    {
        return $this->nbrHeures;
    }
}
