<?php

namespace SRVDV\ServerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityRepository;
use SRVDV\ServerBundle\Entity\Matiere;
use SRVDV\ServerBundle\Entity\Inscription;
use SRVDV\ServerBundle\Entity\User;

class ResponsableController extends Controller {

    /**
     * @Route("/responsable/Matiere" ,name="list_form_Matiere")
     * @Template()
     */
     public function matiereAction(Request $req) {
        $ListeFiliere=0;
        $annee_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy(array('etat' => 1));
        foreach ($annee_actuelle as $key => $value) {
            $idAnnee = $value->getId();
        }
        $user = $this->container->get('security.context')->getToken()->getUser();
        $m = new Matiere();
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $m);
        if($user ->getRoles()[0] == "ROLE_ADMIN")
        {
            $formBuilder
                ->add('nom', 'text')
                ->add('nbrHeurGroupe', 'integer')
                ->add('NombreGroupe', 'integer')
                ->add('semestre', 'integer')
                ->add('Filiere', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\Filiere",
                    'query_builder' => function(EntityRepository $er)use($idAnnee, $user) {
                        return $er->createQueryBuilder('u')
                                ->where("u.anneeFiliere =   " . $idAnnee )->orderby("u.niveau");
                    },
                ))
                ->add('TypeEnseignant', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
                    "property" => "libelle"
                ))
                ->add('save', 'submit');    
        }else{
                $filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy(array('anneeFiliere' =>$idAnnee));
                    $listFiliereUser = '';
                    $depart = 0;
                foreach ($filieres as $key => $f){
                    foreach ($f->getUser() as $key => $u) {
                        
                        if($u == $user){
                            if($depart==0)
                            {
                               $listFiliereUser=$f->getId(); 
                                 $depart++;
                            }else{
                                $listFiliereUser=$listFiliereUser . ','.$f->getId();  
                               }                                     
                        }
                    }
                }

               if($listFiliereUser == ''){$ListeFiliere=1;} 
               
               if($ListeFiliere==0){
                         $formBuilder
                        ->add('nom', 'text')
                        ->add('nbrHeurGroupe', 'integer')
                        ->add('NombreGroupe', 'integer')
                        ->add('semestre', 'integer')
                        ->add('Filiere', 'entity', array(
                            "class" => "SRVDV\ServerBundle\Entity\Filiere",
                            'query_builder' => function(EntityRepository $er)use( $listFiliereUser) {
                                return $er->createQueryBuilder('u')
                                        ->where("u.id in (".$listFiliereUser.")" )->orderby("u.niveau");
                            },
                            
                        ))
                        ->add('TypeEnseignant', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
                    "property" => "libelle"
                ))
                        ->add('save', 'submit'); 
               }
               
        }
        
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
        } else {
            $ListeMatieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll();
            return $this->render('SRVDVServerBundle:responsable:MatiereResponsable.html.twig', array(
                        'f' => $form->createView(),
                        'ListeMatieres' => $ListeMatieres,
                        'idAnnee' => $idAnnee,
                        'supprimer'=>1,
                        'ListeFiliere'=>$ListeFiliere,
                    ));
        }
    }

    /**
     * @Route("/responsable/ModMatiere/{id}" ,name="Modifier_Matiere")
     * @Template()
     */
    public function ModmatiereAction(Matiere $m, Request $req) {
        $annee_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy(array('etat' => 1));

        foreach ($annee_actuelle as $key => $value) {
            $idAnnee = $value->getId();
        }

        $user = $this->container->get('security.context')->getToken()->getUser();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $m);

       if($user ->getRoles()[0] == "ROLE_ADMIN")
        {
            $formBuilder
                ->add('nom', 'text')
                ->add('nbrHeurGroupe', 'integer')
                ->add('NombreGroupe', 'integer')
                ->add('semestre', 'integer')
                ->add('Filiere', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\Filiere",
                    'query_builder' => function(EntityRepository $er)use($idAnnee, $user) {
                        return $er->createQueryBuilder('u')
                                ->where("u.anneeFiliere =   " . $idAnnee . " ")->orderby("u.niveau");
                    },
                ))
                ->add('TypeEnseignant', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
                    "property" => "libelle"
                ))
                ->add('save', 'submit');    
        }else{
                $filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy(array('anneeFiliere' =>$idAnnee));
                    $listFiliereUser = '';
                    $depart = 0;
                foreach ($filieres as $key => $f){
                    foreach ($f->getUser() as $key => $u) {
                        
                        if($u == $user){
                            if($depart==0)
                            {
                               $listFiliereUser=$f->getId(); 
                                 $depart++;
                            }else{
                                $listFiliereUser=$listFiliereUser . ','.$f->getId();  
                               }                                     
                        }
                    }
                }
               
                $formBuilder
                ->add('nom', 'text')
                ->add('nbrHeurGroupe', 'integer')
                ->add('NombreGroupe', 'integer')
                ->add('semestre', 'integer')
                ->add('Filiere', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\Filiere",
                    'query_builder' => function(EntityRepository $er)use( $listFiliereUser) {
                        return $er->createQueryBuilder('u')
                                ->where("u.id in (".$listFiliereUser.")" )->orderby("u.niveau");
                    },
                    
                ))
                ->add('TypeEnseignant', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
                    "property" => "libelle"
                ))
                
                ->add('save', 'submit'); 
        }
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        $form->handleRequest($req);

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $url = $this->get('router')->generate('list_form_Matiere');

            return new RedirectResponse($url);
        } else {
            $ListeMatieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll();
            return $this->render('SRVDVServerBundle:responsable:MatiereResponsable.html.twig', array(
                        'f' => $form->createView(),
                        'ListeMatieres' => $ListeMatieres,
                        'idAnnee' => $idAnnee,
                        'supprimer'=>1,
                    ));
        }
    }

    /**
     * @Route("responsable/SuppMatiere/{id}" , name="supprimer_matieres_responsable")
     * @Template()
     */
    public function SuppUsersAction(Matiere $m, Request $req) {



        $inscriptions = $this->getDoctrine()->getManager()->getRepository("SRVDVServerBundle:Inscription")->findAll();
        if($inscriptions != null)
        {
             foreach ($inscriptions as $key => $insc )
            {
              if($insc->getMatiere() == $m)
              {
                
                    $annee_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy(array('etat' => 1));

                    foreach ($annee_actuelle as $key => $value) {
                        $idAnnee = $value->getId();
                    }

                    $user = $this->container->get('security.context')->getToken()->getUser();
                    $m = new Matiere();
                    // On crée le FormBuilder grâce au service form factory
                    $formBuilder = $this->get('form.factory')->createBuilder('form', $m);

                   if($user ->getRoles()[0] == "ROLE_ADMIN")
        {
            $formBuilder
                ->add('nom', 'text')
                ->add('nbrHeurGroupe', 'integer')
                ->add('NombreGroupe', 'integer')
                ->add('semestre', 'integer')
                ->add('Filiere', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\Filiere",
                    'query_builder' => function(EntityRepository $er)use($idAnnee, $user) {
                        return $er->createQueryBuilder('u')
                                ->where("u.anneeFiliere =   " . $idAnnee . " ")->orderby("u.niveau");
                    },
                ))
                ->add('TypeEnseignant', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
                    "property" => "libelle"
                ))
                ->add('save', 'submit');    
        }else{
                $filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy(array('anneeFiliere' =>$idAnnee));
                    $listFiliereUser = '';
                    $depart = 0;
                foreach ($filieres as $key => $f){
                    foreach ($f->getUser() as $key => $u) {
                        
                        if($u == $user){
                            if($depart==0)
                            {
                               $listFiliereUser=$f->getId(); 
                                 $depart++;
                            }else{
                                $listFiliereUser=$listFiliereUser . ','.$f->getId();  
                               }                                     
                        }
                    }
                }
               
                $formBuilder
                ->add('nom', 'text')
                ->add('nbrHeurGroupe', 'integer')
                ->add('NombreGroupe', 'integer')
                ->add('semestre', 'integer')
                ->add('Filiere', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\Filiere",
                    'query_builder' => function(EntityRepository $er)use( $listFiliereUser) {
                        return $er->createQueryBuilder('u')
                                ->where("u.id in (".$listFiliereUser.")" )->orderby("u.niveau");
                    },
                    
                ))
                ->add('TypeEnseignant', 'entity', array(
                    "class" => "SRVDV\ServerBundle\Entity\TypeEnseignant",
                    "property" => "libelle"
                ))
                
                ->add('save', 'submit'); 
        }
                    // À partir du formBuilder, on génère le formulaire
                    $form = $formBuilder->getForm();
                     $ListeMatieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll();
                    return $this->render('SRVDVServerBundle:responsable:MatiereResponsable.html.twig', array(
                            'f' => $form->createView(),
                            'ListeMatieres' => $ListeMatieres,
                            'idAnnee' => $idAnnee,
                            'supprimer'=>0,
                        ));
                }
              
            }   
        }
        

        $em = $this->getDoctrine()->getManager();
        $em->remove($m);
        $em->flush();

        $url = $this->get('router')->generate('list_form_Matiere');

        return new RedirectResponse($url);
    }

    /**
     * @Route("/responsable/EtatMatiere" ,name="Etat_matieres_responsable")
     * @Template()
     */
    public function EtatMatiereAction(Request $req) {
        $annee_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy(array('etat' => 1));

        foreach ($annee_actuelle as $key => $value) {
            $idAnnee = $value->getId();
        }

        $Reserves = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();

        $matieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll();
        return $this->render('SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig', array(
                    'Reserves' => $Reserves,
                    'matieres' => $matieres,
                    'idAnnee' => $idAnnee,
                ));
    }

    /**
     * @Route("/responsable/inscriptionMatiereModifier/{id}" ,name="modifier_inscription_matieres_etat")
     * @Template()
     */
    public function inscriptionMatiereMODAction(Inscription $res, Request $req) {

        $matiere = $res->getMatiere();
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $res);

        $formBuilder
                ->add('nbHeur', 'integer')
                 ->add('User', 'entity', array(
                                "class" => "SRVDV\ServerBundle\Entity\User",
                                'query_builder' => function(EntityRepository $er) {
                                    return $er->createQueryBuilder('u')->orderBy(' u.nom');
                                },
                            ))
                ->add('save', 'submit')
                ->add('reset', 'reset');

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        $form->handleRequest($req);

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($res);
            $em->flush();

            $url = $this->get('router')->generate('list_form_inscription_matieres_etat', array('id' => $matiere->getId()));

            return new RedirectResponse($url);
        } else {

            $reservations = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findBy(array('Matiere' => $matiere->getId()));

            return $this->render('SRVDVServerBundle:responsable:CompleterMatiere.html.twig', array(
                        'f' => $form->createView(),
                        'reservations' => $reservations,
                        'matiere' => $matiere,
                    ));
        }
    }

    /**
     * @Route("/responsable/inscriptionMatiere/{id}" ,name="list_form_inscription_matieres_etat")
     * @Template()
     */
    public function inscriptionMatiereAction(Matiere $matiere, Request $req) {

        $res = new Inscription();

        $a = new \Datetime("Y");

        $res->setDateInscription($a);
        $res->setMatiere($matiere);



        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $res);

        $formBuilder
                ->add('nbHeur', 'integer')
                 ->add('User', 'entity', array(
                                "class" => "SRVDV\ServerBundle\Entity\User",
                                'query_builder' => function(EntityRepository $er) {
                                    return $er->createQueryBuilder('u')->orderBy(' u.nom');
                                },
                            ))
                ->add('save', 'submit')
                ->add('reset', 'reset');

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        $form->handleRequest($req);

        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($res);
            $em->flush();

            $url = $this->get('router')->generate('list_form_inscription_matieres_etat', array('id' => $matiere->getId()));

            return new RedirectResponse($url);
        } else {

            $reservations = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findBy(array('Matiere' => $matiere->getId()));

            return $this->render('SRVDVServerBundle:responsable:CompleterMatiere.html.twig', array(
                        'f' => $form->createView(),
                        'reservations' => $reservations,
                        'matiere' => $matiere,
                    ));
        }
    }

    /**
     * @Route("/responsable/SuppInscriptionMatiere/{id}" ,name="supprimer_matiere_inscription")
     * @Template()
     */
    public function SuppInscriptionMatiereAction(Inscription $res, Request $req) {
        $matiere = $res->getMatiere();
        $filiere = $res->getMatiere()->getFiliere();
        $em = $this->getDoctrine()->getManager();
        $em->remove($res);
        $em->flush();

        $url = $this->get('router')->generate('list_form_inscription_matieres_etat', array('id' => $matiere->getId()));

        return new RedirectResponse($url);
    }

}
