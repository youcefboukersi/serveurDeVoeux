<?php

namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alertes
 *
 * @ORM\Table(name="alertes")
 * @ORM\Entity(repositoryClass="SRVDV\ServerBundle\Repository\AlertesRepository")
 */
class Alertes {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=1024, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="typeAlerte", type="string", length=30, nullable=true)
     */
    private $typeAlerte;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $User;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Alertes
     */
    public function setMessage($message) {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Alertes
     */
    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Set typeAlerte
     *
     * @param string $typeAlerte
     * @return Alertes
     */
    public function setTypeAlerte($typeAlerte) {
        $this->typeAlerte = $typeAlerte;

        return $this;
    }

    /**
     * Get typeAlerte
     *
     * @return string 
     */
    public function getTypeAlerte() {
        return $this->typeAlerte;
    }

    /**
     * Set User
     *
     * @param User $User
     * @return Alertes
     */
    public function setUser($User) {
        $this->User = $User;

        return $this;
    }

    /**
     * Get User
     *
     * @return mixed 
     */
    public function getUser() {
        return $this->User;
    }

}
