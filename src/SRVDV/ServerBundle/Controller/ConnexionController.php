<?php 

namespace SRVDV\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class ConnexionController extends Controller {

    

    /**
     * @Route("/Connexion/")
     * @Template()
     */
public function indexAction()
	{
	//	$this->rendre('ServerBundle:VueConnexion:vueHeader.html.twig');
  // return $this->rendre('SRVDVServerBundle:Connexion:vueConnexionContent.html.twig', array('name' => "DJo"));
   return $this->render('SRVDVServerBundle:Connexion:index.html.twig');
	//	$this->rendre('ServerBundle:VueConnexion:vueFooter.html.twig');


		
}

}

?>