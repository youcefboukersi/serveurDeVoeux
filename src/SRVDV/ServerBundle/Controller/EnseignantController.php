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
    * @Route("/enseignant/inscription" ,name="list_form_inscription_enseignant")
    * @Template()
    */
    public function InscriptionEnsAction(Request $req)
    {

            $res = new Inscription();

             $a=new \Datetime("Y");                 

             $res->setDateInscription($a);

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form',  $res);

    $formBuilder
     
     -> add('nbHeur','integer')
     -> add('Utilisateur','entity',array(
      "class" => "SRVDV\ServerBundle\Entity\Utilisateur",
       'query_builder'=>function(EntityRepository $er){
                            return $er->createQueryBuilder('u')->where('u.role <> 1');                                  
                           },
         
      ))              
     -> add('Matier','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\Matiere",
         
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

          $url = $this->get('router')->generate('list_form_inscription_enseignant');

          return new RedirectResponse($url);

      }else{
          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();            
           return $this->render('SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,

            ) );
      }


    }

    /**
    * @Route("/enseignant/ModInscription/{id}")
    * @Template()
    */
    public function ModInscriptionEnsAction(Inscription $res,Request $req)
    {


    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form',  $res);

    $formBuilder
     -> add('nbHeur','integer')
     -> add('Utilisateur','entity',array(
      "class" => "SRVDV\ServerBundle\Entity\Utilisateur",
       'query_builder'=>function(EntityRepository $er){
                            return $er->createQueryBuilder('u')->where('u.role <> 1');                                  
                           },
         
      ))              
     -> add('Matier','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\Matiere",
         
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

          $url = $this->get('router')->generate('list_form_inscription_enseignant');

          return new RedirectResponse($url);

      }else{
          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();            
           return $this->render('SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,

            ) );
      }


    }


    /**
     * @Route("enseignant/SuppInscription/{id}")
     * @Template()
     */
    public function SuppInscripEnsAction(Inscription $res,Request $req)
    {      

            $em=$this->getDoctrine()->getManager();
            $em->remove($res);
            $em->flush();

         $url = $this->get('router')->generate('list_form_inscription_enseignant');
    
    return new RedirectResponse($url);
          
    }

   
}
