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


use SRVDV\ServerBundle\Entity\Matiere;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\TypeEnseignant;
use SRVDV\ServerBundle\Entity\Inscription;

class EnseignantController extends Controller
{
   
    /**
    * @Route("/enseignant/ChoixFiliereEns" ,name="ChoixFiliereEns_enseignant")
    * @Template()
    */
    public function ChoixFiliereEnsAction()
    {

            
          $Filieres=$this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findAll();            
           return $this->render('SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig', array(
                        'Filieres' => $Filieres,

            ) );
      

    }

    
   /**
    * @Route("/enseignant/inscription/{id}" ,name="list_form_inscription_enseignant")
    * @Template()
    */
    public function InscriptionEnsAction(Filiere $filiere,Request $req)
    {
             $iden=$filiere->getId();
            $res = new Inscription();

             $a=new \Datetime("Y");                 

             $res->setDateInscription($a);

             $user = $this->container->get('security.context')->getToken()->getUser();

             $res->setUser($user);

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form',  $res );

    $formBuilder

     
     -> add('nbHeur','integer')
           
     -> add('Matiere','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\Matiere",
          'query_builder'=>function(EntityRepository $er )use ($filiere){
                                             return $er->createQueryBuilder('u')                                             
                                             ->where("u.Filiere = ".$filiere->getId());},

          
          ))
     -> add('save','submit')
     -> add('reset','reset');

         // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();

    $form->handleRequest($req);

      if ($form->isValid()) {
          // On l'enregistre notre objet $advert dans la base de données, par exemple
          $em = $this->getDoctrine()->getManager();
          $em->persist($res);
          $em->flush();

          $url = $this->get('router')->generate('list_form_inscription_enseignant',  array('id' =>$filiere->getId()) );

          return new RedirectResponse($url);

      }else{
          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();            
           return $this->render('SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,
            'fil'=>$filiere,

            ) );
      }


    }

    /**
    * @Route("/enseignant/ModInscription/{id}" ,name="Modifier_inscription")
    * @Template()
    */
    public function ModInscriptionEnsAction(Inscription $res,Request $req)
    {

      $filiere=$res->getMatiere()->getFiliere();
    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form',  $res);

    $formBuilder

     -> add('nbHeur','integer')
           
     -> add('Matiere','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\Matiere",
          'query_builder'=>function(EntityRepository $er )use ($filiere){
                                             return $er->createQueryBuilder('u')                                             
                                             ->where("u.Filiere = ".$filiere->getId());},

          
          ))
     -> add('save','submit')
     -> add('reset','reset');

         // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();

    $form->handleRequest($req);

      if ($form->isValid()) {
          // On l'enregistre notre objet $advert dans la base de données, par exemple
          $em = $this->getDoctrine()->getManager();
          $em->persist($res);
          $em->flush();

         $url = $this->get('router')->generate('list_form_inscription_enseignant', array('id' =>$filiere->getId()));

          return new RedirectResponse($url);

      }else{
          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();            
           return $this->render('SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,
             'fil'=>$filiere,


            ) );
      }


    }

/**
     * @Route("enseignant/EditPofile", name="form_profile_user_ens")
     * @Template()
     */
    public function EditPofileAction()
    {      

            return $this->render('SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig' );
    }
    /**
     * @Route("enseignant/SuppInscription/{id}" )
     * @Template()
     */
    public function SuppInscripEnsAction(Inscription $res,Request $req)
    {      
           $id=$res->getMatiere()->getFiliere()->getId();
            $em=$this->getDoctrine()->getManager();
            $em->remove($res);
            $em->flush();

         $url = $this->get('router')->generate('list_form_inscription_enseignant', array('id' =>$id));
    
    return new RedirectResponse($url);
          
    }

   
}
