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

use SRVDV\ServerBundle\Entity\User;
use SRVDV\ServerBundle\Entity\Role;
use SRVDV\ServerBundle\Entity\TypeUtilisateur;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\Matiere;
use SRVDV\ServerBundle\Entity\Inscription;




class DefaultController extends Controller
{

     /**
     * @Route("/home/nombreInscription/{id}", name="home_nbr_inscription")
     * @Template()
     */
    public function nombreInscriptionAction(string $id)
    {
             $annee_actuelle= $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy( array('etat' => 1)); 

                foreach ($annee_actuelle as $key => $value) {
                    $idAnnee=$value->getId();
                }

         

         $Reserves=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll(); 
               $somme = 0;
               $user = $this->container->get('security.context')->getToken()->getUser();
                 foreach ($Reserves as $key => $value) {
                    if(( $value->getMatiere()->getFiliere()->getAnneeFiliere()->getId() == $idAnnee )  and ( $value->getUser()->getId() ==  $user->getId() )  ) {

                         $somme += $value->getNbHeur() * $value->getMatiere()->getTypeEnseignant()->getCoef();
                    }
                }

       

                   $roles=$user->getRoles();
                                
                              
                              if($roles[0]=="ROLE_ADMIN"){
                                    return $this->render('SRVDVServerBundle:admin:MenuAdmin.html.twig', array(
                                    'somme' => $somme,
                                    'etatConnect'=>$id,
                                    ));
                              }
                              if($roles[0]=="ROLE_RESP"){
                                   return $this->render('SRVDVServerBundle:responsable:MenuResponsable.html.twig', array(
                                    'somme' => $somme,
                                    'etatConnect'=>$id,
                                    ));
                              }
                              if($roles[0]=="ROLE_ENSEIG"){
                                  return $this->render('SRVDVServerBundle:enseignant:MenuEnseignant.html.twig', array(
                                    'somme' => $somme,
                                    'etatConnect'=>$id,
                                    ));
                              }

                

                 
    
    }


    /**
     * @Route("/home/", name="home")
     * @Template()
     */
    public function indexAction()
    {
             $annee_actuelle= $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy( array('etat' => 1)); 

                foreach ($annee_actuelle as $key => $value) {
                    $idAnnee=$value->getId();
                }

                $Annees= $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findAll( ); 

               
         

         $Reserves=$this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll(); 
         
                 return $this->render('SRVDVServerBundle:home:index.html.twig', array(
                  'Reserves' => $Reserves,
                  'idAnnee' =>$idAnnee,
                  'etatConnect'=>'Accueil',
                  'Annees'=>$Annees,
                  ));

    
    }



    /**
     * @Route("/home/ListeUsers", name="home_ListeUsers")
     * @Template()
     */
    public function ListeUsersAction()
    {


         $users=$this->getDoctrine()->getRepository("SRVDVServerBundle:User")->findAll(); 
         
                 return $this->render('SRVDVServerBundle:home:ListeUsers.html.twig', array(
                  'users' => $users,
                  'etatConnect'=>'users',));

    
    }



/**
     * @Route("/home/ListeFilieres", name="home_ListeFilieres")
     * @Template()
     */
    public function ListeFilieresAction()
    {
         

           $annee_actuelle= $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy( array('etat' => 1)); 

                foreach ($annee_actuelle as $key => $value) {
                    $idAnnee=$value->getId();
                }


         $Matieres=$this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll(); 
         
                 return $this->render('SRVDVServerBundle:home:ListeFilieres.html.twig', array(
                  'Matieres' => $Matieres,
                     'idAnnee' =>$idAnnee,
                  'etatConnect'=>'Filieres',));

    
    }
   
}
