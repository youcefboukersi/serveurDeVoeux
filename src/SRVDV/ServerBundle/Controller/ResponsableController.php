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
use FOS\UserBundle\Model\UserInterface;



use SRVDV\ServerBundle\Entity\Matiere;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\TypeEnseignant;
use SRVDV\ServerBundle\Entity\Inscription;
use SRVDV\ServerBundle\Entity\TypeUtilisateur;


class ResponsableController extends Controller
{
   

 /**
    * @Route("/responsable/ChoixFiliereEns" ,name="ChoixFiliereEns_responsable")
    * @Template()
    */
    public function ChoixFiliereEnsAction()
    {

            $annee_actuelle= $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy( array('etat' => 1)); 

                foreach ($annee_actuelle as $key => $value) {
                    $idAnnee=$value->getId();
                }


         $Filieres=$this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy( array('anneeFiliere' =>  $idAnnee ));             
           return $this->render('SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig', array(
                        'Filieres' => $Filieres,

            ) );
      

    }
    
/**
     * @Route("/responsable/Matiere" ,name="list_form_Matiere")
     * @Template()
     */
    public function matiereAction(Request $req)
    {
                     $annee_actuelle= $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy( array('etat' => 1)); 

                foreach ($annee_actuelle as $key => $value) {
                    $idAnnee=$value->getId();
                }

                $user = $this->container->get('security.context')->getToken()->getUser()->getId();
                  $m = new Matiere();
          // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $m);

          $formBuilder
           -> add('nom','text' )
           -> add('nbrHeurGroupe','integer')
           -> add('NombreGroupe','integer')
           
           -> add('semestre','integer')
           -> add('Filiere','entity',array(
                "class" => "SRVDV\ServerBundle\Entity\Filiere",
                'query_builder'=>function(EntityRepository $er)use($idAnnee,$user){
                                             return $er->createQueryBuilder('u')                                             
                                             ->where("u.anneeFiliere =   ".$idAnnee." and u.User = ". $user); 
                                           },
                
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
                  'idAnnee'=>$idAnnee,

                  ) );
            }

        
    }

    /**
     * @Route("/responsable/ModMatiere/{id}" ,name="Modifier_Matiere")
     * @Template()
     */
    public function ModmatiereAction(Matiere $m ,Request $req)
    {
         $annee_actuelle= $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy( array('etat' => 1)); 

                foreach ($annee_actuelle as $key => $value) {
                    $idAnnee=$value->getId();
                }

                $user = $this->container->get('security.context')->getToken()->getUser()->getId();
                  
          // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $m);

          $formBuilder
           -> add('nom','text' )
           -> add('nbrHeurGroupe','integer')
           -> add('NombreGroupe','integer')
           
           -> add('semestre','integer')
           -> add('Filiere','entity',array(
                "class" => "SRVDV\ServerBundle\Entity\Filiere",
                'query_builder'=>function(EntityRepository $er)use($idAnnee,$user){
                                             return $er->createQueryBuilder('u')                                             
                                             ->where("u.anneeFiliere =   ".$idAnnee." and u.User = ". $user); 
                                           },
                
                
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
                  'idAnnee'=>$idAnnee,

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
     * @Route("responsable/EditPofile", name="form_profile_user_resp")
     * @Template()
     */
    public function EditPofileAction()
    {      

            return $this->render('SRVDVServerBundle:responsable:ProfileResponsable.html.twig' , array(
         
          'profile'=>1,
          ) );
    }

/**
     * @Route("responsable/EditPofileMP", name="form_profile_user_resp_motDePasse")
     * @Template()
     */
    public function EditPofileMPAction()
    {      

            return $this->render('SRVDVServerBundle:responsable:MotDePasse.html.twig', array(
         
          'motDePasse'=>1,
          ) );
    }

   /**
    * @Route("/responsable/inscription/{id}" ,name="list_form_inscription")
    * @Template()
    */
    public function InscriptionAction(Filiere $filiere , Request $req)
    {

            $res = new Inscription();

             $a=new \Datetime("Y");                 

             $res->setDateInscription($a);

             //session
              $user = $this->container->get('security.context')->getToken()->getUser();

             $res->setUser($user);

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

          $url = $this->get('router')->generate('list_form_inscription' ,  array('id' =>$filiere->getId()));

          return new RedirectResponse($url);

      }else{
          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();            
           return $this->render('SRVDVServerBundle:responsable:ReserveResponsable.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,
            'fil'=>$filiere,

            ) );
      }


    }

    /**
    * @Route("/responsable/ModInscription/{id}" , name="ModInscription_responsable")
    * @Template()
    */
    public function ModInscriptionAction(Inscription $res,Request $req)
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

          $url = $this->get('router')->generate('list_form_inscription' ,  array('id' =>$filiere->getId()));

          return new RedirectResponse($url);

      }else{
          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();            
           return $this->render('SRVDVServerBundle:responsable:ReserveResponsable.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,
            'fil'=>$filiere,
            ) );
      }


    }


    /**
     * @Route("responsable/SuppInscription/{id}")
     * @Template()
     */
    public function SuppInscripAction(Inscription $res,Request $req)
    {      
              $filiere=$res->getMatiere()->getFiliere();
            $em=$this->getDoctrine()->getManager();
            $em->remove($res);
            $em->flush();

         $url = $this->get('router')->generate('list_form_inscription' ,  array('id' =>$filiere->getId()));
    
    return new RedirectResponse($url);
          
    }

    /**
    * @Route("/responsable/EtatMatiere" ,name="Etat_matieres_responsable")
    * @Template()
    */
    public function EtatMatiereAction( Request $req)
    {
             $annee_actuelle= $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy( array('etat' => 1)); 

                foreach ($annee_actuelle as $key => $value) {
                    $idAnnee=$value->getId();
                }

                $Reserves=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();
           
          $matieres=$this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll();            
           return $this->render('SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig', array(
            'Reserves'=>$Reserves,
            'matieres' => $matieres,
            'idAnnee'=>$idAnnee,
           

            ) );
      


    }

    

    /**
    * @Route("/responsable/inscriptionMatiereModifier/{id}" ,name="modifier_inscription_matieres_etat")
    * @Template()
    */
    public function inscriptionMatiereMODAction(Inscription $res , Request $req)
    {

             $matiere=$res->getMatiere();

           
            

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form',  $res);

    $formBuilder

     -> add('nbHeur','integer')                
     
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

          $url = $this->get('router')->generate('list_form_inscription_matieres_etat' ,  array('id' =>$matiere->getId()));

          return new RedirectResponse($url);

      }else{

          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findBy( array('Matiere' => $matiere->getId() ) ); 

           return $this->render('SRVDVServerBundle:responsable:CompleterMatiere.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,
            'mat'=> $matiere,           

            ) );
      }


  } 

   /**
    * @Route("/responsable/inscriptionMatiere/{id}" ,name="list_form_inscription_matieres_etat")
    * @Template()
    */
    public function inscriptionMatiereAction(Matiere $matiere , Request $req)
    {

            $res = new Inscription();

             $a=new \Datetime("Y");                 

             $res->setDateInscription($a);
             $res->setMatiere($matiere);

             
                $idUser=0;
             $annee_actuelle= $this->getDoctrine()->getRepository("SRVDVServerBundle:User")->findBy( array('username' => 'XXXXX')); 

                foreach ($annee_actuelle as $key => $value) {
                    $idUser=$value->getId();
                    $user=$value;
                }

             if( $idUser==0){

              $user = $this->get('fos_user.util.user_manipulator')->create('XXXXX', 'XXXXX', 'XXXXX@gmail.com', 0, 0);
              $Types= $this->getDoctrine()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findAll();
             
             foreach ($Types as $key => $value) {
                    
                    $TypeUser=$value;
                }
             $user->setType($TypeUser);

             $userManager = $this->get('fos_user.user_manager');
                  $userManager->updateUser($user);
               
             }
             $res->setUser($user);

            

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form',  $res);

    $formBuilder

     -> add('nbHeur','integer')                
     
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

          $url = $this->get('router')->generate('list_form_inscription_matieres_etat' ,  array('id' =>$matiere->getId()));

          return new RedirectResponse($url);

      }else{

          $reservations=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findBy( array('Matiere' => $matiere->getId() ) ); 

           return $this->render('SRVDVServerBundle:responsable:CompleterMatiere.html.twig', array(
            'f' => $form->createView(),
            'reservations' => $reservations,
            'mat'=> $matiere,           

            ) );
      }


      }  

 /**
     * @Route("/responsable/inscriptionMatiere/SuppInscriptionMatiere/{id}" ,name="supprimer_matiere_inscription")
     * @Template()
     */
    public function SuppInscriptionMatiereAction(Inscription $res,Request $req)
    {      
      $matiere=$res->getMatiere();
              $filiere=$res->getMatiere()->getFiliere();
            $em=$this->getDoctrine()->getManager();
            $em->remove($res);
            $em->flush();

         $url = $this->get('router')->generate('list_form_inscription_matieres_etat' ,  array('id' =>$matiere->getId()));
    
    return new RedirectResponse($url);
          
    } 
}  