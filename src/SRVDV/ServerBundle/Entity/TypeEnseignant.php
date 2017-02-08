<?php

namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEnseignant
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeEnseignant {

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
     * @ORM\Column(name="libelle", type="string", length=20)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="coef", type="float")
     */
    private $coef;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return TypeEnseignant
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set coef
     *
     * @param float $coef
     * @return TypeEnseignant
     */
    public function setCoef($coef) {
        $this->coef = $coef;

        return $this;
    }

    /**
     * Get coef
     *
     * @return float 
     */
    public function getCoef() {
        return $this->coef;
    }

}
