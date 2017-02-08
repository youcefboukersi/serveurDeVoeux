<?php

namespace SRVDV\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use SRVDV\ServerBundle\Entity\Annee;
use SRVDV\ServerBundle\Entity\Filiere;
use SRVDV\ServerBundle\Entity\Matiere;


class AnneeSuivanteController extends Controller {

    /**
     * @Route("/admin/anneeSuivante",name="annee_suivante")
     * @Template()
     */
    public function indexAction(Request $req) {

        $Filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findAll();
        $Annees = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findAll();
        return $this->render('SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig', array(
                    'Filieres' => $Filieres,
                    'Annees' => $Annees,
                    'supprimer' => 0,
        ));
    }

    /**
     * @Route("/admin/generateUsers/{id}",name="generate_Annee_users")
     * @Template()
     */
    public function generateUsersAction(Annee $annee, Request $req) {

        $filiere_annee_Suivante = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy(array('anneeFiliere' => $annee->getId()));
        if (empty($filiere_annee_Suivante)) {
            
            $idAnnee = $this->getAnneeActive()->getId();
            $annee_filiere_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy(array('anneeFiliere' => $idAnnee));
            foreach ($annee_filiere_actuelle as $key => $value) {
                $filiere = new Filiere();
                $filiere->setDateFiliere(new \Datetime("Y"));
                $filiere->setNom($value->getNom());
                $filiere->setUser($value->getUser());
                $filiere->setNiveau($value->getNiveau());
                $filiere->setAnneeFiliere($annee);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($filiere);
                $em->flush();

                $Matiere_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findBy(array('Filiere' => $value->getId()));

                foreach ($Matiere_actuelle as $key => $val) {
                    $matiere = new Matiere();
                    $matiere->setNom($val->getNom());
                    $matiere->setNbrHeurGroupe($val->getNbrHeurGroupe());
                    $matiere->setNombreGroupe($val->getNombreGroupe());
                    $matiere->setFiliere($filiere);
                    $matiere->setTypeEnseignant($val->getTypeEnseignant());
                    $matiere->setSemestre($val->getSemestre());
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($matiere);
                    $em->flush();
                }
            }
        }
        $Matieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findAll();
        return $this->render('SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig', array(
                    'Matieres' => $Matieres,
                    'idAnnee' => $annee->getId(),
                    'supprimer' => 0,
                ));
    }

    /**
     * @Route("/admin/SupprimerGenerate/{id}",name="supprimer_generate_Annee")
     * @Template()
     */
    public function SupprimerGenerateAction(Annee $annee, Request $req) {
       
        $inscriptions = $this->getDoctrine()->getRepository("SRVDVServerBundle:Inscription")->findAll();

        
        $filiere_annee_Suivante = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy(array('anneeFiliere' => $annee->getId()));
        if (!empty($filiere_annee_Suivante)) {
            $idAnnee = $annee->getId();
            $annee_filiere_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findBy(array('anneeFiliere' => $idAnnee));
            foreach ($annee_filiere_actuelle as $key => $value) {
                $Matiere_actuelle = $this->getDoctrine()->getRepository("SRVDVServerBundle:Matiere")->findBy(array('Filiere' => $value->getId()));
                foreach ($Matiere_actuelle as $key => $val) {
                    $access=0;
                    foreach ($inscriptions as $key => $inscription) {
                        if($inscription->getMatiere() == $val){
                          $access = 1;
                          break;
                        }
                    }
                   if($access==0){
                         $em = $this->getDoctrine()->getManager();
                        $em->remove($val);
                        $em->flush();

                   }else
                   {
                    $Filieres = $this->getDoctrine()->getRepository("SRVDVServerBundle:Filiere")->findAll();
                    $Annees = $this->getDoctrine()->getRepository("SRVDVServerBundle:Annee")->findAll();
                    return $this->render('SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig', array(
                                'Filieres' => $Filieres,
                                'Annees' => $Annees,
                                'supprimer' => 1,
                    ));

                   }
                    
                }

                

                
            }
        }
        $url = $this->get('router')->generate('annee_suivante');
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
