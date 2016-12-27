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

use SRVDV\ServerBundle\Entity\User;
use SRVDV\ServerBundle\Entity\TypeUtilisateur;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\TypeEnseignant;

class ProfileType extends AbstractType
{
   
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateUtilisateur')
            ->add('nom')
            ->add('prenom')
            -> add('type','entity',array(
                "class" => "SRVDV\ServerBundle\Entity\TypeUtilisateur",
                "property" => "libelle"
            ))
           
            ->add('nombreHeurTheo')
            ;
    }

   
    public function getBlockPrefix()
    {
        return 'srvdv_user_profile';
    }
    
     public function getName()
    {
        return $this->getBlockPrefix();
    }
    
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';

    }
       
}
