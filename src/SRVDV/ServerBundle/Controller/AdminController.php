<?php

namespace SRVDV\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityRepository;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;

use SRVDV\ServerBundle\Entity\User;
use SRVDV\ServerBundle\Entity\Alertes;
use SRVDV\ServerBundle\Entity\Annee;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\TypeEnseignant;
use SRVDV\ServerBundle\Entity\TypeUtilisateur;

class AdminController extends Controller {
 
    /**
     * @Route("/admin/users",name="list_form_utilisateur")
     * @Template()
     */
    public function indexAction(Request $request) {

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');
        
        $user = $userManager->createUser();
        $user->setPlainPassword('evry');
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        $form = $formFactory->createForm();
        $form->setData($user);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
            $userManager->updateUser($user);
            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('list_form_utilisateur');
                $response = new RedirectResponse($url);
            }
            return $response;
        }
        $types = $this->getDoctrine()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findAll();
        $Users = $this->getDoctrine()->getRepository("SRVDVServerBundle:User")->findAll();
        return $this->render('SRVDVServerBundle:admin:UsersAdmin.html.twig', array(
                    'form' => $form->createView(),
                    'Users' => $Users,
                    'types' => $types,
                    'email' => 0,
                    'supprimer'=> 1,
        ));
    }
    
    /**
     * @Route("/admin/Updateuser/{user}" , name="modifier_user_admin")
     * @Template()
     */
    public function ModifierUsersAction(user $user, Request $request) {

        if ($request->getMethod() == 'GET') {
            $nom = $this->getRequest()->query->get('nom');
            if ($nom != null) {
                $user->setNom($this->getRequest()->query->get('nom'));
                $user->setPrenom($this->getRequest()->query->get('prenom'));
                $user->setEmail($this->getRequest()->query->get('email'));
                $user->setUsername($this->getRequest()->query->get('username'));
                $user->setNombreHeurTheo($this->getRequest()->query->get('nombreHeurTheo'));
                $roles = array($this->getRequest()->query->get('roles'));
                $user->setRoles($roles);
                $idtype = 1;
                $idtype = $this->getRequest()->query->get('type');
                $type_utilisateur = $this->getDoctrine()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findBy(array('id' => $idtype));
                foreach ($type_utilisateur as $key => $value) {
                    $type = $value;
                }
                $user->setType($type);
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $url = $this->get('router')->generate('list_form_utilisateur');
                return new RedirectResponse($url);
            }
        }
    }
  

    /**
     * Tell the user to check his email provider
     */
    public function checkEmailAction(Request $request) {

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');
        $user = $userManager->createUser();
        $user->setEnabled(true);
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);
        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        $form = $formFactory->createForm();
        $form->setData($user);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
            $userManager->updateUser($user);
            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('list_form_utilisateur');
                $response = new RedirectResponse($url);
            }
            return $response;
        }
        $types = $this->getDoctrine()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findAll();
        $Users = $this->getDoctrine()->getRepository("SRVDVServerBundle:User")->findAll();
        return $this->render('SRVDVServerBundle:admin:UsersAdmin.html.twig', array(
                    'form' => $form->createView(),
                    'Users' => $Users,
                    'types' => $types,
                    'email' => 1,
                    'supprimer'=> 1,
        ));
    }

    /**
     * @Route("admin/ModUsers/{id}" ,name="Modifier_Users")
     * @Template()
     */
    public function ModUsersAction(User $u, Request $req) {
        $enbledUsers = $u->isEnabled();
        if ($enbledUsers == 1) {

            $u->setEnabled(false);
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');
            $userManager->updateUser($u);
        } else {

            $u->setEnabled(true);
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');
            $userManager->updateUser($u);
        }
        $url = $this->get('router')->generate('list_form_utilisateur');
        return new RedirectResponse($url);
    }

    /**
     * @Route("admin/suppUsers/{id}" , name="supprimer_utilisateur_admin")
     * @Template()
     */
    public function SuppUsersAction(User $u, Request $req) {

        $Filieres = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Filiere")->findAll();
       $inscriptions = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Inscription")->findAll();
       
            $access= 0; 

             foreach ($inscriptions as $key => $i )
            {
              if($i->getUser() == $u)
              {
                 $access= 1; 
                 break; 
              }
            }

             foreach ($Filieres as $key => $f )
            {
                foreach ($f->getUser() as $key => $user )
                {
                      if($user == $u)
                      {
                         $access= 1; 
                         break; 
                      }
                }
            }

           
              if($access== 1)
              {
                /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
                $formFactory = $this->get('fos_user.registration.form.factory');
                /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
                $userManager = $this->get('fos_user.user_manager');
                
                $user = $userManager->createUser();
                $form = $formFactory->createForm();
                $form->setData($user);            
                $types = $this->getDoctrine()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findAll();
                $Users = $this->getDoctrine()->getRepository("SRVDVServerBundle:User")->findAll();
                return $this->render('SRVDVServerBundle:admin:UsersAdmin.html.twig', array(
                            'form' => $form->createView(),
                            'Users' => $Users,
                            'types' => $types,
                            'email' => 0,
                            'supprimer'=> 0,
                ));
              }
              
            
                  
      
      $em = $this->getDoctrine()->getManager();
      $em->remove($u);
      $em->flush();

      $url = $this->get('router')->generate('list_form_utilisateur');

      return new RedirectResponse($url);
    }

    /**
     * @Route("/admin/addAnnee" , name="list_form_Annee")
     * @Template()
     */
    public function addAnneeAction(Request $req) {
        $annee = new Annee();
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $annee);
        $formBuilder
                ->add('annee', 'integer')
                ->add('etat', 'choice', array(
                    'label' => 'Êtes vous OK ?',
                    'choices' => array(1 => 'Oui', 0 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'data' => '0'
                ))
                ->add('save', 'submit');

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
        $form->handleRequest($req);

        if ($form->isValid()) {
            $annee->setEtat(0);
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($annee);
            $em->flush();
            $url = $this->get('router')->generate('list_form_Annee');
            return new RedirectResponse($url);
        } else {
            $Annees = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Annee")->findAll();
            return $this->render('SRVDVServerBundle:admin:AnneeAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'Annees' => $Annees,
                        'supprimer' => 1,
            ));
        }
    }

    /**
     * @Route("/admin/ModAnnee/{id}" , name="Modifier_Annee")
     * @Template()
     */
    public function ModAnneeAction(Annee $annee, Request $req) {
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $annee);
        $formBuilder
                ->add('annee', 'integer')
                ->add('etat', 'choice', array(
                    'label' => 'Êtes vous OK ?',
                    'choices' => array(1 => 'Oui', 0 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true
                ))
                ->add('save', 'submit');

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        $form->handleRequest($req);

        if ($form->isValid()) {

            ///
            if ($annee->getEtat() == 1) {
                $AnneesEtat = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Annee")->findAll();
                foreach ($AnneesEtat as $key => $value) {
                    if ($annee->getId() != $value->getId()) {
                        $value->setEtat(0);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($value);
                        $em->flush();
                    }
                }
            }
            ////  // On enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($annee);
            $em->flush();
            $url = $this->get('router')->generate('list_form_Annee');

            return new RedirectResponse($url);
        } else {
            $Annees = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Annee")->findAll();
            return $this->render('SRVDVServerBundle:admin:AnneeAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'Annees' => $Annees,
                        'supprimer' => 1,
            ));
        }
    }

    /**
     * @Route("admin/suppAnnee/{id}" , name="supprimer_annee_admin"  )
     * @Template()
     */
    public function SuppAnneeAction(Annee $annee, Request $req) {

        $em = $this->getDoctrine()->getManager();
        $Filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findAll();
        if($Filieres != null)
        {
            foreach ($Filieres as $key => $filiere) {
                if( $filiere->getAnneeFiliere() ==  $annee)
                {          
                  
                  // On crée le FormBuilder grâce au service form factory
                  $formBuilder = $this->get('form.factory')->createBuilder('form', $annee);
                  $formBuilder
                        ->add('annee', 'integer')
                        ->add('etat', 'choice', array(
                            'label' => 'Êtes vous OK ?',
                            'choices' => array(1 => 'Oui', 0 => 'Non'),
                            'expanded' => true,
                            'multiple' => false,
                            'required' => true
                        ))
                        ->add('save', 'submit');
                  // À partir du formBuilder, on génère le formulaire
                  $form = $formBuilder->getForm();
                  $form->handleRequest($req);
                  $Annees = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Annee")->findAll();            
                  return $this->render('SRVDVServerBundle:admin:AnneeAdmin.html.twig', array(
                            'f' => $form->createView(),
                            'Annees' => $Annees,
                            'supprimer' => 0,
                  ));
                }
             }   
        }
        
        $em->remove($annee);
        $em->flush();
        $url = $this->get('router')->generate('list_form_Annee');
        return new RedirectResponse($url);
    }

    /**
     * @Route("/admin/addtype" , name="list_form_Type")
     * @Template()
     */
    public function addTypeAction(Request $req) {
        $type = new TypeUtilisateur();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $type);

        $formBuilder
                ->add('code', 'text')
                ->add('libelle', 'text')
                ->add('nbrHeures', 'integer')
                ->add('save', 'submit');

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
        } else {
            $types = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findAll();
            return $this->render('SRVDVServerBundle:admin:TypeAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'Types' => $types,
                        'supprimer'=> 1,
            ));
        }
    }

    /**
     * @Route("/admin/ModType/{id}", name="Modifier_TypeUtilisateur")
     * @Template()
     */
    public function ModTypeAction(TypeUtilisateur $type, Request $req) {

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $type);

        $formBuilder
                ->add('code', 'text')
                ->add('libelle', 'text')
                ->add('nbrHeures', 'integer')
                ->add('save', 'submit');

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
        } else {
            $types = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findAll();
            return $this->render('SRVDVServerBundle:admin:TypeAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'Types' => $types,
                        'supprimer'=> 1,
            ));
        }
    }

    /**
     * @Route("admin/suppType/{id}", name="supprimer_statut_admin" )
     * @Template()
     */
    public function SuppTypeAction(TypeUtilisateur $type, Request $req) {
             
        $users = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:User")->findAll();
        if( $users != null)
        {
            foreach ($users as $key => $user )
            {
              if($user->getType() == $type)
              {
                
                // On crée le FormBuilder grâce au service form factory
                $formBuilder = $this->get('form.factory')->createBuilder('form', $type);
                $formBuilder
                        ->add('code', 'text')
                        ->add('libelle', 'text')
                        ->add('nbrHeures', 'integer')
                        ->add('save', 'submit');
                // À partir du formBuilder, on génère le formulaire
                $form = $formBuilder->getForm();
                $form->handleRequest($req);
                $types = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:TypeUtilisateur")->findAll();            
                return $this->render('SRVDVServerBundle:admin:TypeAdmin.html.twig', array(
                              'f' => $form->createView(),
                              'Types' => $types,
                              'supprimer'=> 0,
                  ));
              }
              
            } 
        }      
        
      
        $em = $this->getDoctrine()->getManager();
        $em->remove($type);
        $em->flush();
        $url = $this->get('router')->generate('list_form_Type');
        return new RedirectResponse($url);
    }

    /**
     * @Route("/admin/addFiliere",name="list_form_filiere")
     * @Template()
     */
    public function addFiliereAction(Request $req) {
        $filiere = new Filiere();
        $a = new \Datetime("Y");
        $filiere->setDateFiliere($a);
        $filiere->setAnneeFiliere($this-> getAnneeActive());
       
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $filiere);
        $formBuilder
                ->add('nom', 'text')
               
                ->add('niveau', 'text')
                ->add('User', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\User",
                    "multiple" => true,
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->where("u.roles like '%RESP%'  or  u.roles like '%ADMIN%'")->orderBy(' u.nom');
                    },
                ))
                ->add('save', 'submit');
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
        } else {
            $Filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy(array('anneeFiliere'=>$this->getAnneeActive()->getId()));
            return $this->render('SRVDVServerBundle:admin:FiliereAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'Filieres' => $Filieres,
                        'supprimer'=> 1,
            ));
        }
    }

    /**
     * @Route("/admin/ModFiliere/{id}" ,name="Modifier_filiere")
     * @Template()
     */
    public function ModFiliereAction(Filiere $filiere, Request $req) {
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $filiere);

        $formBuilder
                ->add('nom', 'text', array('label' => 'Nom', 'translation_domain' => 'FOSUserBundle'))
              
                ->add('niveau', 'text')
                ->add('User', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\User",
                    "multiple" => true,
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->where("u.roles like '%RESP%'  or  u.roles like '%ADMIN%'")->orderBy(' u.nom');
                    },
                ))
                ->add('save', 'submit');

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        $form->handleRequest($req);

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();

            $em->flush();

            $url = $this->get('router')->generate('list_form_filiere');

            return new RedirectResponse($url);
        } else {
            $Filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findAll();
            return $this->render('SRVDVServerBundle:admin:FiliereAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'Filieres' => $Filieres,
                        'supprimer'=> 1,
            ));
        }
    }

    /**
     * @Route("admin/suppFiliere/{id}" ,name="supprimer_filiere_admin"  )
     * @Template()
     */
    public function SuppFiliereAction(Filiere $filiere, Request $req) {
       
        $matieres = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Matiere")->findAll();
        if($matieres != null)
        {
                foreach ($matieres as $key => $m )
                {
                  if($m-> getFiliere() == $filiere)
                  {
                    $filiere = new Filiere();
                    $a = new \Datetime("Y");
                    $filiere->setDateFiliere($a);
                    // On crée le FormBuilder grâce au service form factory
                    $formBuilder = $this->get('form.factory')->createBuilder('form', $filiere);
                    $formBuilder
                            ->add('nom', 'text')
                            
                            ->add('niveau', 'text')
                            ->add('User', 'entity', array(
                                "class" => "SRVDV\ServerBundle\Entity\User",
                                "multiple"=> true,
                                'query_builder' => function(EntityRepository $er) {
                                    return $er->createQueryBuilder('u')
                                            ->where("u.roles like '%RESP%'  or  u.roles like '%ADMIN%'")->orderBy(' u.nom');
                                },
                            ))
                            ->add('save', 'submit')
                            ;
                    // À partir du formBuilder, on génère le formulaire
                    $form = $formBuilder->getForm();
                    $Filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findAll();
                    return $this->render('SRVDVServerBundle:admin:FiliereAdmin.html.twig', array(
                                'f' => $form->createView(),
                                'Filieres' => $Filieres,
                                'supprimer'=> 0,
                    ));
                    
                  }
                  
                }    
        }
            
        $em = $this->getDoctrine()->getManager();
        $em->remove($filiere);
        $em->flush();
        $url = $this->get('router')->generate('list_form_filiere');
        return new RedirectResponse($url);
    }

    /**
     * @Route("/admin/TypeEns",name="list_form_typeens")
     * @Template()
     */
    public function addTypeEnsAction(Request $req) {
        $typeens = new TypeEnseignant();
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $typeens);
        $formBuilder
                ->add('libelle', 'text')
                ->add('coef', 'text')
                ->add('save', 'submit')
                ->add('reset', 'reset');

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
        } else {
            $Typesens = $this->getDoctrine()->getRepository("SRVDVServerBundle:TypeEnseignant")->findAll();
            return $this->render('SRVDVServerBundle:admin:TypeEnsAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'Typesens' => $Typesens,
                        'supprimer'=> 1,
            ));
        }
    }

    /**
     * @Route("/admin/ModTypeEns/{id}" ,name="Modifier_TypeEnseignant")
     * @Template()
     */
    public function ModTypeEnsAction(TypeEnseignant $typeens, Request $req) {
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $typeens);
        $formBuilder
                ->add('libelle', 'text')
                ->add('coef', 'text')
                ->add('save', 'submit')
                ->add('reset', 'reset');

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
        $form->handleRequest($req);

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $url = $this->get('router')->generate('list_form_typeens');
            return new RedirectResponse($url);
        } else {
            $Typesens = $this->getDoctrine()->getRepository("SRVDVServerBundle:TypeEnseignant")->findAll();
            return $this->render('SRVDVServerBundle:admin:TypeEnsAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'Typesens' => $Typesens,
                        'supprimer'=> 1,
            ));
        }
    }

    /**
     * @Route("admin/suppTypeEns/{id}" ,name="supprimer_type_enseig_admin"  )
     * @Template()
     */
    public function SuppTypeEnsAction(TypeEnseignant $typeens, Request $req) {
        
      
      
        $matieres = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Matiere")->findAll();
        if($matieres != null)
        {
            foreach ($matieres as $key => $m )
            {
              if($m-> getTypeEnseignant() == $typeens)
              {
                $typeens = new TypeEnseignant();
                // On crée le FormBuilder grâce au service form factory
                $formBuilder = $this->get('form.factory')->createBuilder('form', $typeens);
                $formBuilder
                        ->add('libelle', 'text')
                        ->add('coef', 'text')
                        ->add('save', 'submit')
                        ->add('reset', 'reset');

                // À partir du formBuilder, on génère le formulaire
                $form = $formBuilder->getForm();
                $Typesens = $this->getDoctrine()->getRepository("SRVDVServerBundle:TypeEnseignant")->findAll();
                return $this->render('SRVDVServerBundle:admin:TypeEnsAdmin.html.twig', array(
                            'f' => $form->createView(),
                            'Typesens' => $Typesens,
                            'supprimer' => 0,
                ));
              }
            }
        }
        
        var_dump("TES");
        $em = $this->getDoctrine()->getManager();
        $em->remove($typeens);
        $em->flush();
        $url = $this->get('router')->generate('list_form_typeens');
        return new RedirectResponse($url);
    
    
          }

    /**
     * @Route("admin/Alertes" ,name="alertes_admin"  )
     * @Template()
     */
    public function alertAction(Request $req) {

        $user = $this->container->get('security.context')->getToken()->getUser();
        $alert = new Alertes();
        $alert->setUser($user);
        $alert->setDateCreation(new \Datetime());
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $alert);
        $formBuilder
                ->add('typeAlerte', 'choice', array(
                    'label' => 'Type Alerte',
                    'choices' => array("Tres_importants" => 'Très importants', "Importants" => 'Importants', "information" => "Informations"),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'data' => 'Tres_importants'
                ))
                ->add('message', 'textarea', array(
                    'label' => "Contenu du message d'alerte"
                ))
                ->add('save', 'submit');

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
        $form->handleRequest($req);

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($alert);
            $em->flush();
            $url = $this->get('router')->generate('alertes_admin');
            return new RedirectResponse($url);
        } else {
            $list_alertes = $this->getDoctrine()->getRepository("SRVDVServerBundle:Alertes")->findAll();
            return $this->render('SRVDVServerBundle:admin:alertAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'list_alertes' => $list_alertes,
            ));
        }
    }

    /**
     * @Route("admin/modifier_alertes/{id}" ,name="Modifier_alerte"  )
     * @Template()
     */
    public function modifAlertAction(Request $req, Alertes $alert) {

        $user = $this->container->get('security.context')->getToken()->getUser();
        $alert->setUser($user);
        $alert->setDateCreation(new \Datetime());
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $alert);

        $formBuilder
                ->add('typeAlerte', 'choice', array(
                    'label' => 'Type Alerte',
                    'choices' => array("Tres_importants" => 'Très importants', "Importants" => 'Importants', "information" => "Informations"),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'data' => 'Tres_importants'
                ))
                ->add('message', 'textarea', array(
                    'label' => "Contenu du message d'alerte"
                ))
                ->add('save', 'submit');

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
        $form->handleRequest($req);

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $url = $this->get('router')->generate('alertes_admin');
            return new RedirectResponse($url);
        } else {
            $list_alertes = $this->getDoctrine()->getRepository("SRVDVServerBundle:Alertes")->findAll();
            return $this->render('SRVDVServerBundle:admin:alertAdmin.html.twig', array(
                        'f' => $form->createView(),
                        'list_alertes' => $list_alertes,
            ));
        }
    }

    /**
     * @Route("admin/supprimer_alertes/{id}" ,name="supprimer_alerte"  )
     * @Template()
     */
    public function supprimerAlertAction(Request $req, Alertes $alert) {

    $em = $this->getDoctrine()->getManager();
    $em->remove($alert);
    $em->flush();
    $url = $this->get('router')->generate('alertes_admin');
    return new RedirectResponse($url);
  }

   private function getAnneeActive() {
    $annee_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy(array('etat' => 1));
    foreach ($annee_actuelle as $key => $value) 
    {
      $anneeActive = $value;
    }
    return $anneeActive;
  }
 
}
