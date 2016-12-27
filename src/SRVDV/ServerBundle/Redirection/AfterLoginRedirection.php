<?php
/**
 * 
 * @package    SRVDV\ServerBundle\Redirection
 * @author     Josef
 */

namespace SRVDV\ServerBundle\Redirection;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;

    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        // Obtenir la liste des Rôles de l'utilisateur qui se connecte
        $roles = $token->getRoles();
        // Transformer la liste en un tableau
        $rolesTab = array_map(function($role){ 
          return $role->getRole(); 
        }, $roles);
        // If is a Administrator user we redirect to the Liste_form_utilisateur
        if (in_array('ROLE_ADMIN', $rolesTab, true) )
            $redirection = new RedirectResponse($this->router->generate('list_form_utilisateur'));
        // if is a Reponsable user we redirect to the 
        elseif (in_array('ROLE_RESP', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('list_form_Matiere'));
         // Role est ENSEIG -> (Enseignant)
        elseif (in_array('ROLE_ENSEIG', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('ChoixFiliereEns_enseignant'));
        else // autre 
            $redirection = new RedirectResponse($this->router->generate('/'));
        
        return $redirection;
    }
} 