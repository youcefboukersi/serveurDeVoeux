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

class ResponsableController extends Controller
{
   

    
/**
     * @Route("/responsable/Matiere" ,name="list_form_Matiere")
     * @Template()
     */
    public function matiereAction(Request $req)
    {

                  $m = new Matiere();
          // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $m);

          $formBuilder
           -> add('nom','text' )
           -> add('nbrHeurGroupe','integer')
           -> add('NombreGroupe','integer')
           -> add('AnneeMatiere','integer')
           -> add('semestre','integer')
           -> add('Filiere','entity',array(
                "class" => "SRVDV\ServerBundle\Entity\Filiere",
                "property" => "nom"
            ))
           -> add('TypeEnseignant','entity',array(
                "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
                "property" => "libelle"
            ))
           -> add('save','submit')
           -> add('reset','reset');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($m);
                $em->flush();

                $url = $this->get('router')->generate('list_form_Matiere');
    
                return new RedirectResponse($url);

            }else{
                $ListeMatieres=$this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll();            
                 return $this->render('SRVDVServerBundle:responsable:MatiereResponsable.html.twig', array(
                  'f' => $form->createView(),
                  'ListeMatieres' => $ListeMatieres,

                  ) );
            }

        
    }

    /**
     * @Route("/responsable/ModMatiere/{id}")
     * @Template()
     */
    public function ModmatiereAction(Matiere $m ,Request $req)
    {

                  
          // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $m);

          $formBuilder
           -> add('nom','text' )
           -> add('nbrHeurGroupe','integer')
           -> add('NombreGroupe','integer')
           -> add('AnneeMatiere','integer')
           -> add('semestre','integer')
           -> add('Filiere','entity',array(
                "class" => "SRVDV\ServerBundle\Entity\Filiere",
                "property" => "nom"
            ))
           -> add('TypeEnseignant','entity',array(
                "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
                "property" => "libelle"
            ))
           -> add('save','submit')
           -> add('reset','reset');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->flush();

                $url = $this->get('router')->generate('list_form_Matiere');
    
                return new RedirectResponse($url);

            }else{
                $ListeMatieres=$this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll();            
                 return $this->render('SRVDVServerBundle:responsable:MatiereResponsable.html.twig', array(
                  'f' => $form->createView(),
                  'ListeMatieres' => $ListeMatieres,

                  ) );
            }

        
    }

    /**
     * @Route("responsable/SuppMatiere/{id}")
     * @Template()
     */
    public function SuppUsersAction(Matiere $m,Request $req)
    {      

            $em=$this->getDoctrine()->getManager();
            $em->remove($m);
            $em->flush();

         $url = $this->get('router')->generate('list_form_Matiere');
    
    return new RedirectResponse($url);
          
    }




   /**
    * @Route("/responsable/inscription" ,name="list_form_inscription")
    * @Template()
    */
    public function InscriptionAction(Request $req)
    {

            $res = new Inscription();

             $a=new \Datetime("Y");                 

             $res->setDateInscription($a);

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form',  $res);

    $formBuilder
<<<<<<< HEAD
     -> add('nbHeur','integer')
     -> add('Utilisateur','entity',array(
      "class" => "SRVDV\ServerBundle\Entity\Utilisateur",
                          'query_builder'=>function(EntityRepository $er){
                            return $er->createQueryBuilder('u')->where('u.role <> 1');                                  
                           },
          
      ))
              
     -> add('Matier','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\Matiere",
          
=======
     -> add('dateInscription','date' )
     -> add('nbHeur','integer')
     -> add('TypeEnseignant','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
          "property" => "libelle"
      ))
     -> add('Utilisateur','entity',array(
      "class" => "SRVDV\ServerBundle\Entity\Utilisateur",
                          'query_builder'=>function(EntityRepository $er){
                                             return $er->createQueryBuilder('u')                                             
                                             ->where('u.role <> 1');                                     
                                       
                          },
          
      ))
              
     -> add('Matiere','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\Matiere",
          "property" => "nom"
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
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

          $url = $this->get('router')->generate('list_form_inscription');

          return new RedirectResponse($url);

      }else{
          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();            
           return $this->render('SRVDVServerBundle:responsable:ReserveResponsable.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,

            ) );
      }


    }

    /**
    * @Route("/responsable/ModInscription/{id}")
    * @Template()
    */
    public function ModInscriptionAction(Inscription $res,Request $req)
    {


    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form',  $res);

    $formBuilder
<<<<<<< HEAD
     -> add('nbHeur','integer')
     -> add('Utilisateur','entity',array(
      "class" => "SRVDV\ServerBundle\Entity\Utilisateur",
      'query_builder'=>function(EntityRepository $er){
                            return $er->createQueryBuilder('u')->where('u.role <> 1');                                  
                           },
                          
          
      ))
              
     -> add('Matier','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\Matiere",
          
=======
     -> add('dateInscription','date' )
     -> add('nbHeur','integer')
     -> add('TypeEnseignant','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
          "property" => "libelle"
      ))
     -> add('Utilisateur','entity',array(
      "class" => "SRVDV\ServerBundle\Entity\Utilisateur",
      "property" => "nom,prenom"
          
      ))
              
     -> add('Matiere','entity',array(
          "class" => "SRVDV\ServerBundle\Entity\Matiere",
          "property" => "nom"
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
      ))
     
     -> add('save','submit')
     -> add('reset','reset');

<<<<<<< HEAD

=======
>>>>>>> c42f38fdc8f038834e4adf77a1d6da15dfccc51c
         // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();

    $form->handleRequest($req);

      if ($form->isValid()) {
          // On l'enregistre notre objet $advert dans la base de données, par exemple
          $em = $this->getDoctrine()->getManager();
          $em->persist($res);
          $em->flush();

          $url = $this->get('router')->generate('list_form_inscription');

          return new RedirectResponse($url);

      }else{
          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();            
           return $this->render('SRVDVServerBundle:responsable:ReserveResponsable.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,

            ) );
      }


    }


    /**
     * @Route("responsable/SuppInscription/{id}")
     * @Template()
     */
    public function SuppInscripAction(Inscription $res,Request $req)
    {      

            $em=$this->getDoctrine()->getManager();
            $em->remove($res);
            $em->flush();

         $url = $this->get('router')->generate('list_form_inscription');
    
    return new RedirectResponse($url);
          
    }
}    