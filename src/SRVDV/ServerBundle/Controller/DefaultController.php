<?php

namespace SRVDV\ServerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller {

  /**
   * @Route("/home/nombreInscription/{id}", name="home_nbr_inscription")
   * @Template()
   */
  public function nombreInscriptionAction($id) {

    $idAnnee = $this->getAnneeActive()->getId();
    $Reserves = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();
    $somme = 0;
    $user = $this->container->get('security.context')->getToken()->getUser();

    if ("anon." === $user) {
      return $this->render('SRVDVServerBundle:admin:MenuAdmin.html.twig', array(
                'somme' => $somme,
                'etatConnect' => $id,));
    } else {

      foreach ($Reserves as $key => $value) {
        if (( $value->getMatiere()->getFiliere()->getAnneeFiliere()->getId() == $idAnnee ) and ( $value->getUser()->getId() == $user->getId() )) {
          $somme += $value->getNbHeur() * $value->getMatiere()->getTypeEnseignant()->getCoef();
        }
      }
      $roles = $user->getRoles();
      if ($roles[0] == "ROLE_ADMIN") {
        return $this->render('SRVDVServerBundle:admin:MenuAdmin.html.twig', array(
                  'somme' => $somme,
                  'etatConnect' => $id,
        ));
      }
      if ($roles[0] == "ROLE_RESP") {
        return $this->render('SRVDVServerBundle:responsable:MenuResponsable.html.twig', array(
                  'somme' => $somme,
                  'etatConnect' => $id,
        ));
      }
      if ($roles[0] == "ROLE_ENSEIG") {
        return $this->render('SRVDVServerBundle:enseignant:MenuEnseignant.html.twig', array(
                  'somme' => $somme,
                  'etatConnect' => $id,
        ));
      }
    }
  }

  /**
   * @Route("/home/", name="home")
   * @Template()
   */
  public function indexAction() {
    $Alertes = $this->getDoctrine()->getRepository("SRVDVServerBundle:Alertes")->findAll();
    return $this->render('SRVDVServerBundle:home:accueil.html.twig', array(
              'Alertes' => $Alertes,));
  }

  /**
   * @Route("/reservation/", name="Reservations")
   * @Template()
   */
  public function reservationAction() {

    $Annees = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findAll();
    $Reserves = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();
    return $this->render('SRVDVServerBundle:home:index.html.twig', array(
              'Reserves' => $Reserves,
              'idAnnee' => $this->getAnneeActive()->getId(),
              'etatConnect' => 'Reserves',
              'Annees' => $Annees,
    ));
  }

  /**
   * @Route("/home/ListeUsers", name="home_ListeUsers")
   * @Template()
   */
  public function ListeUsersAction() {

    $users = $this->getDoctrine()->getRepository("SRVDVServerBundle:User")->findAll();
    $reservations = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();
    

    return $this->render('SRVDVServerBundle:home:ListeUsers.html.twig', array(
              'users' => $users,
              'etatConnect' => 'users',
              'IdAnnee'=> $this->getAnneeActive()->getId(),
              'Reserves'=>$reservations,
              ));
  }

  /**
   * @Route("/home/ListeFilieres", name="home_ListeFilieres")
   * @Template()
   */
  public function ListeFilieresAction() {
    $Annees = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findAll();

    $Matieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll();
    return $this->render('SRVDVServerBundle:home:ListeFilieres.html.twig', array(
              'Matieres' => $Matieres,
              'idAnnee' => $this->getAnneeActive()->getId(),
              'Annees' => $Annees,
              'etatConnect' => 'Filieres',));
  }

  private function getAnneeActive() {
    $annee_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findBy(array('etat' => 1));
    foreach ($annee_actuelle as $key => $value) {
      $anneeActive = $value;
    }
    return $anneeActive;
  }
  
}
