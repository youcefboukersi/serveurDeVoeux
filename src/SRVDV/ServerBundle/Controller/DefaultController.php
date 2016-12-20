<?php

namespace SRVDV\ServerBundle\Controller;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\AbstractType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityRepository;

use SRVDV\ServerBundle\Entity\Utilisateur;
use SRVDV\ServerBundle\Entity\Role;
use SRVDV\ServerBundle\Entity\TypeUtilisateur;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\Matiere;
use SRVDV\ServerBundle\Entity\Inscription;


class DefaultController extends Controller
{
    /**
     * @Route("/home/")
     * @Template()
     */
    public function indexAction()
    {

         $Reserves=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll(); 
         $Matieres=$this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll(); 

                 return $this->render('SRVDVServerBundle:home:index.html.twig', array(
                  'Reserves' => $Reserves,
                  'Matieres' => $Matieres,));

    }

    
}
