<?php

namespace SRVDV\ServerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use SRVDV\ServerBundle\Entity\User;
use SRVDV\ServerBundle\Entity\Matiere;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\Inscription;

class EnseignantController extends Controller {

  /**
   * @Route("/enseignant/ChoixFiliereEns" ,name="ChoixFiliereEns_enseignant")
   * @Template()
   */
  public function ChoixFiliereEnsAction() {
    
    $idAnnee = $this->getAnneeActive()->getId();    
    $Filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy(array('anneeFiliere' => $idAnnee));
    return $this->render('SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig', array(
              'Filieres' => $Filieres,
    ));
  }

  /**
   * @Route("/enseignant/ChoixMatiereEns/{id}" ,name="Etat_reservation_responsable")
   * @Template()
   */
  public function EtatMatiereAction(Filiere $filiere, Request $req) {
    $idAnnee = $this->getAnneeActive()->getId(); 
    $Reserves = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();
    $matieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findBy(array('Filiere' => $filiere->getId()));
    return $this->render('SRVDVServerBundle:enseignant:ReserveMatiereEnseignant.html.twig', array(
              'Reserves' => $Reserves,
              'matieres' => $matieres,
              'idAnnee' => $idAnnee,
    ));
  }

  /**
   * @Route("/enseignant/inscription/{id}" ,name="list_form_inscription")
   * @Template()
   */
  public function InscriptionEnsAction(Matiere $matiere, Request $req) {

    $res = new Inscription();
    $a = new \Datetime("Y");
    $res->setDateInscription($a);
    $user = $this->container->get('security.context')->getToken()->getUser();
    $res->setUser($user);
    $res->setMatiere($matiere);

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form', $res);
    $formBuilder
          ->add('nbHeur', 'integer')
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

      $url = $this->get('router')->generate('list_form_inscription', array('id' => $matiere->getId()));
      return new RedirectResponse($url);
    } else {
      $reservations = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();
      return $this->render('SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig', array(
                'f' => $form->createView(),
                'reservations' => $reservations,
                'fil' => $matiere->getFiliere(),
                'matiere' => $matiere
      ));
    }
  }

  /**
   * @Route("/enseignant/ModInscription/{id}" ,name="Modifier_inscription")
   * @Template()
   */
  public function ModInscriptionEnsAction(Inscription $res, Request $req) {

    $matiere = $res->getMatiere();
    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form', $res);
    $formBuilder
          ->add('nbHeur', 'integer')
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
      $url = $this->get('router')->generate('list_form_inscription', array('id' => $matiere->getId()));
      return new RedirectResponse($url);
    } else {
      $reservations = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();
      return $this->render('SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig', array(
                'f' => $form->createView(),
                'reservations' => $reservations,
                'fil' => $matiere->getFiliere(),
                'matiere' => $matiere
      ));
    }
  }

  /**
   * @Route("enseignant/EditPofile", name="form_profile_user_ens")
   * @Template()
   */
  public function EditPofileAction() {
    return $this->render('SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig', array(
              'profile' => 1,
    ));
  }

  /**
   * @Route("enseignant/EditPofileMP", name="form_profile_user_ens_motDePasse")
   * @Template()
   */
  public function EditPofileMPAction() {
    return $this->render('SRVDVServerBundle:enseignant:MotDePasse.html.twig', array(
              'motDePasse' => 1,
    ));
  }

  /**
   * @Route("enseignant/SuppInscription/{id}" , name="supp_incription_responsable")
   * @Template()
   */
  public function SuppInscripEnsAction(Inscription $res, Request $req) {
    $id = $res->getMatiere()->getId();
    $em = $this->getDoctrine()->getManager();
    $em->remove($res);
    $em->flush();
    $url = $this->get('router')->generate('list_form_inscription', array('id' => $id));
    return new RedirectResponse($url);
  }
  
   private function getAnneeActive() {
    $annee_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy(array('etat' => 1));
    foreach ($annee_actuelle as $key => $value) {
      $anneeActive = $value;
    }
    return $anneeActive;
  }




  /**
   * @Route("/enseignant/ReservationProf/{id}" ,name="Liste_ReservationProf")
   * @Template()
   */
  public function ReservationProfAction(User $user, Request $req) {

   
      $reservations = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findBy(array('User' =>$user->getId() ));
      return $this->render('SRVDVServerBundle:enseignant:ProfReservationEnseignant.html.twig', array(
                  'reservations' => $reservations,
                  'user'=> $user
                
      ));
    
  }


}
