<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SRVDV\ServerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityRepository;

use SRVDV\ServerBundle\Entity\User;
use SRVDV\ServerBundle\Entity\Annee;
use SRVDV\ServerBundle\Entity\TypeUtilisateur;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\TypeEnseignant;

class RegistrationType extends AbstractType
{
   
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('nom')
            ->add('prenom')
             ->add('nombreHeurTheo')
            -> add('type','entity',array(
                "class" => "SRVDV\ServerBundle\Entity\TypeUtilisateur",
                "property" => "libelle"
            ))
            ->add('roles', 'collection', array(
                   'type' => 'choice',
                   'options' => array(
                        'label' => false,
                        'choices' => array(
                           'ROLE_ADMIN' => 'Administarteur',
                           'ROLE_RESP' => 'Responsable',
                           'ROLE_ENSEIG' => 'Enseignant'
                       )
                   )
               )
            )
           
            ;
    }

   
    public function getBlockPrefix()
    {
        return 'srvdv_user_registration';
    }
    
     public function getName()
    {
        return $this->getBlockPrefix();
    }
    
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }
       
}
