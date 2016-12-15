<?php

namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Role
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
     * @ORM\Column(name="NomRole", type="string", length=50)
     */
    private $nomRole;


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
     * Set nomRole
     *
     * @param string $nomRole
     * @return Role
     */
    public function setNomRole($nomRole)
    {
        $this->nomRole = $nomRole;
    
        return $this;
    }

    /**
     * Get nomRole
     *
     * @return string 
     */
    public function getNomRole()
    {
        return $this->nomRole;
    }
}
