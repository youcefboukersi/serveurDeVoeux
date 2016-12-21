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
use SRVDV\ServerBundle\Entity\TypeEnseignant;

use SRVDV\ServerBundle\Entity\Inscription;


class AdminController extends Controller
{
    /**
     * @Route("/admin/users",name="list_form_utilisateur")
     * @Template()
     */
    public function indexAction(Request $req){         
          
         
                $Users = $this->getDoctrine()->getRepository("SRVDVServerBundle:User")->findAll();            
                 return $this->render('SRVDVServerBundle:admin:UsersAdmin.html.twig', array(                  
                  'Users' => $Users,
                  ) );       
    
     }

<<<<<<< HEAD
                  ) );
            }
           
    }
=======
>>>>>>> 4bafa325ca1bcb19219ece9689db03391923f104

    /**
     * @Route("admin/ModUsers/{id}")
     * @Template()
     */
    public function ModUsersAction(User $u,Request $req)
    {      

                
                // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $u);

          $formBuilder
           -> add('nom','text' , array('label' => 'Nom', 'translation_domain' => 'FOSUserBundle'))
           -> add('prenom','text')
           -> add('username','text')
          -> add('dateUtilisateur','integer') 
          -> add('password','text')
           -> add('email','text')         
           -> add('roles','text')
           -> add('type','entity',array(
                "class" => "SRVDV\ServerBundle\Entity\TypeUtilisateur",
                "property" => "libelle"
            ))
           -> add('nombreHeurTheo','integer')
           -> add('save','submit')
           -> add('reset','reset');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                //$em->persist($u);
                $em->flush();

                $url = $this->get('router')->generate('list_form_utilisateur');
    
                return new RedirectResponse($url);

            }else{
                $Users=$this->getDoctrine()->getRepository("SRVDVServerBundle:User")->findAll();            
                 return $this->render('SRVDVServerBundle:admin:UsersAdmin.html.twig', array(
                  'f' => $form->createView(),
                  'Users' => $Users,

                  ) );
            }
          
    }


/**
     * @Route("admin/suppUsers/{id}")
     * @Template()
     */
    public function SuppUsersAction(User $u,Request $req)
    {      

            $em=$this->getDoctrine()->getManager();
            $em->remove($u);
            $em->flush();

         $url = $this->get('router')->generate('list_form_utilisateur');
    
    return new RedirectResponse($url);
          
    }

/**
     * @Route("/listUsers/")
     * @Template()
     */
    public function listUsersAction()
    {      

            $Users=$this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Utilisateur")->findAll();

         return $this->render('SRVDVServerBundle:admin:UsersAdmin.html.twig', array(
          'Users' => $Users,
          ) );
    }

    /**
     * 
     * @Route("/admin/addrole", name="list_form_Role")
     * @Template()
     */
    public function addRoleAction(Request $req)
    {
         $role = new Role();

            // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $role);

          $formBuilder
           -> add('nomRole','text')         
           -> add('save','submit')
           -> add('reset','reset');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($role);
                $em->flush();
            }
            $Roles=$this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Role")->findAll();
         return $this->render('SRVDVServerBundle:admin:RoleAdmin.html.twig', array(
          'f' => $form->createView(),
          'Roles' => $Roles,
          ) );
    }

/**
     * @Route("/admin/ModRole/{id}")
     * @Template()
     */
    public function ModRoleAction(Role $role,Request $req)
    {
         
            // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $role);

          $formBuilder
           -> add('nomRole','text')         
           -> add('save','submit')
           -> add('reset','reset');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($role);
                $em->flush();

                 $url = $this->get('router')->generate('list_form_Role');
    
    return new RedirectResponse($url);
            }
            $Roles=$this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Role")->findAll();
         return $this->render('SRVDVServerBundle:admin:RoleAdmin.html.twig', array(
          'f' => $form->createView(),
          'Roles' => $Roles,
          ) );
    }

    /**
     * @Route("admin/suppRole/{id}"  )
     * @Template()
     */
    public function SuppRoleAction(Role $r,Request $req)
    {      

            $em=$this->getDoctrine()->getManager();
            $em->remove($r);
            $em->flush();

        $url = $this->get('router')->generate('list_form_Role');
    
    return new RedirectResponse($url);
          
    }

    /**
     * @Route("/admin/addtype" , name="list_form_Type")
     * @Template()
     */
    public function addTypeAction(Request $req)
    {
         $type = new TypeUtilisateur();

            // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $type);

          $formBuilder
           -> add('code','text')
            -> add('libelle','text')
            -> add('nbrHeures','integer')
           -> add('save','submit');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($type);
                $em->flush();
                $url = $this->get('router')->generate('list_form_Type');
    
                 return new RedirectResponse($url);
            }else{
                  $types=$this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findAll();
               return $this->render('SRVDVServerBundle:admin:TypeAdmin.html.twig', array(
                'f' => $form->createView(),
                'Types' => $types,
                ) );
            }
    }
         
         /**
     * @Route("/admin/ModType/{id}")
     * @Template()
     */
    public function ModTypeAction(TypeUtilisateur $type , Request $req)
    {
         
            // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $type);

          $formBuilder
           -> add('code','text')
            -> add('libelle','text')
            -> add('nbrHeures','integer')
           -> add('save','submit');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($type);
                $em->flush();

                $url = $this->get('router')->generate('list_form_Type');    
                  return new RedirectResponse($url);
            }else{
                  $types=$this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findAll();
               return $this->render('SRVDVServerBundle:admin:TypeAdmin.html.twig', array(
                'f' => $form->createView(),
                'Types' => $types,
                ) );
       }
    }

    /**
     * @Route("admin/suppType/{id}"  )
     * @Template()
     */
    public function SuppTypeAction(TypeUtilisateur $type,Request $req)
    {      

            $em=$this->getDoctrine()->getManager();
            $em->remove($type);
            $em->flush();

        $url = $this->get('router')->generate('list_form_Type');
    
    return new RedirectResponse($url);
          
    }

    /**
     * @Route("/admin/addFiliere",name="list_form_filiere")
     * @Template()
     */
    public function addFiliereAction(Request $req)
    {
         $filiere = new Filiere();

         $a=new \Datetime("Y");
         $ann= date('Y');


          $filiere->setAnneeFiliere($ann);
          $filiere->setDateFiliere($a);

            // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $filiere);

          $formBuilder
           -> add('nom','text' , array('label' => 'Nom', 'translation_domain' => 'FOSUserBundle'))
           -> add('dateFiliere','date')
           -> add('anneeFiliere','integer')               
            -> add('Utilisateur','entity',array(
            "class" => "SRVDV\ServerBundle\Entity\Utilisateur",
            'query_builder'=>function(EntityRepository $er){
                                             return $er->createQueryBuilder('u')                                             
                                             ->where('u.role =2');                                     
                                       
                          },
                
            ))
           -> add('save','submit')
           -> add('reset','reset');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($filiere);
                $em->flush();

                $url = $this->get('router')->generate('list_form_filiere');
    
                return new RedirectResponse($url);

            }else{
                $Filieres=$this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findAll();            
                 return $this->render('SRVDVServerBundle:admin:FiliereAdmin.html.twig', array(
                  'f' => $form->createView(),
                  'Filieres' => $Filieres,

                  ) );
            }

          
         
    }

    
    /**
     * @Route("/admin/ModFiliere/{id}")
     * @Template()
     */
    public function ModFiliereAction(Filiere $filiere,Request $req)
    {
         


            // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $filiere);

          $formBuilder
           -> add('nom','text' , array('label' => 'Nom', 'translation_domain' => 'FOSUserBundle'))
           -> add('dateFiliere','date')
           -> add('anneeFiliere','integer')               
            -> add('Utilisateur','entity',array(
            "class" => "SRVDV\ServerBundle\Entity\Utilisateur",
            "property" => "nom"
                
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

                $url = $this->get('router')->generate('list_form_filiere');
    
                return new RedirectResponse($url);

            }else{
                $Filieres=$this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findAll();            
                 return $this->render('SRVDVServerBundle:admin:FiliereAdmin.html.twig', array(
                  'f' => $form->createView(),
                  'Filieres' => $Filieres,

                  ) );
            }

          
         
    }

    /**
     * @Route("admin/suppFiliere/{id}"  )
     * @Template()
     */
    public function SuppFiliereAction(Filiere $filiere,Request $req)
    {      

            $em=$this->getDoctrine()->getManager();
            $em->remove($filiere);
            $em->flush();

        $url = $this->get('router')->generate('list_form_filiere');
    
    return new RedirectResponse($url);
          
    }


     /**
     * @Route("/admin/TypeEns",name="list_form_typeens")
     * @Template()
     */
    public function addTypeEnsAction(Request $req)
    {
         $typeens = new TypeEnseignant();

        

            // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $typeens);

          $formBuilder
           -> add('libelle','text' )
           -> add('coef','text')
           
           -> add('save','submit')
           -> add('reset','reset');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($typeens);
                $em->flush();

                $url = $this->get('router')->generate('list_form_typeens');
    
                return new RedirectResponse($url);

            }else{
                $Typesens=$this->getDoctrine()->getRepository("SRVDVServerBundle:TypeEnseignant")->findAll();            
                 return $this->render('SRVDVServerBundle:admin:TypeEnsAdmin.html.twig', array(
                  'f' => $form->createView(),
                  'Typesens' => $Typesens,

                  ) );
            }

          
         
    }
 /**
     * @Route("/admin/ModTypeEns/{id}")
     * @Template()
     */
    public function ModTypeEnsAction(TypeEnseignant $typeens,Request $req)
    {
    

            // On crée le FormBuilder grâce au service form factory
          $formBuilder = $this->get('form.factory')->createBuilder('form', $typeens);

          $formBuilder
           -> add('libelle','text' )
           -> add('coef','text')
           
           -> add('save','submit')
           -> add('reset','reset');
          
               // À partir du formBuilder, on génère le formulaire
         $form = $formBuilder->getForm();

         $form->handleRequest($req);

            if ($form->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
               
                $em->flush();

                $url = $this->get('router')->generate('list_form_typeens');
    
                return new RedirectResponse($url);

            }else{
                $Typesens=$this->getDoctrine()->getRepository("SRVDVServerBundle:TypeEnseignant")->findAll();            
                 return $this->render('SRVDVServerBundle:admin:TypeEnsAdmin.html.twig', array(
                  'f' => $form->createView(),
                  'Typesens' => $Typesens,

                  ) );
            }

          
         
    }


    /**
     * @Route("admin/suppTypeEns/{id}"  )
     * @Template()
     */
    public function SuppTypeEnsAction(TypeEnseignant $typeens,Request $req)
    {      

            $em=$this->getDoctrine()->getManager();
            $em->remove($typeens);
            $em->flush();

        $url = $this->get('router')->generate('list_form_typeens');
    
    return new RedirectResponse($url);
          
    }

   
}
