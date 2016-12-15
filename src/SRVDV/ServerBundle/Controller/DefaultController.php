<?php

namespace SRVDV\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/home/")
     * @Template()
     */
    public function indexAction()
    {

         return $this->render('SRVDVServerBundle:home:index.html.twig');
    }

    /**
     * @Route("/accueil/{a}/{b}")
     * @Template()
     */
    public function accueilAction($a,$b)
    {
    	 $somme=$a+$b;
        return array('somme' => $somme);
    }
}
