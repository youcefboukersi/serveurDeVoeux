<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // list_form_utilisateur
            if ($pathinfo === '/admin/users') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::indexAction',  '_route' => 'list_form_utilisateur',);
            }

            // Modifier_Users
            if (0 === strpos($pathinfo, '/admin/ModUsers') && preg_match('#^/admin/ModUsers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_Users')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModUsersAction',));
            }

            // srvdv_server_admin_suppusers
            if (0 === strpos($pathinfo, '/admin/suppUsers') && preg_match('#^/admin/suppUsers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srvdv_server_admin_suppusers')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppUsersAction',));
            }

            // form_profile_user
            if ($pathinfo === '/admin/EditPofile') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::EditPofileAction',  '_route' => 'form_profile_user',);
            }

            // list_form_Annee
            if ($pathinfo === '/admin/addAnnee') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addAnneeAction',  '_route' => 'list_form_Annee',);
            }

            // Modifier_Annee
            if (0 === strpos($pathinfo, '/admin/ModAnnee') && preg_match('#^/admin/ModAnnee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_Annee')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModAnneeAction',));
            }

            // srvdv_server_admin_suppannee
            if (0 === strpos($pathinfo, '/admin/suppAnnee') && preg_match('#^/admin/suppAnnee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srvdv_server_admin_suppannee')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppAnneeAction',));
            }

            // list_form_Type
            if ($pathinfo === '/admin/addtype') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addTypeAction',  '_route' => 'list_form_Type',);
            }

            // Modifier_TypeUtilisateur
            if (0 === strpos($pathinfo, '/admin/ModType') && preg_match('#^/admin/ModType/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_TypeUtilisateur')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModTypeAction',));
            }

            // srvdv_server_admin_supptype
            if (0 === strpos($pathinfo, '/admin/suppType') && preg_match('#^/admin/suppType/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srvdv_server_admin_supptype')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppTypeAction',));
            }

            // list_form_filiere
            if ($pathinfo === '/admin/addFiliere') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addFiliereAction',  '_route' => 'list_form_filiere',);
            }

            // Modifier_filiere
            if (0 === strpos($pathinfo, '/admin/ModFiliere') && preg_match('#^/admin/ModFiliere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_filiere')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModFiliereAction',));
            }

            // Supprimer_filiere
            if (0 === strpos($pathinfo, '/admin/suppFiliere') && preg_match('#^/admin/suppFiliere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Supprimer_filiere')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppFiliereAction',));
            }

            // list_form_typeens
            if ($pathinfo === '/admin/TypeEns') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addTypeEnsAction',  '_route' => 'list_form_typeens',);
            }

            // Modifier_TypeEnseignant
            if (0 === strpos($pathinfo, '/admin/ModTypeEns') && preg_match('#^/admin/ModTypeEns/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_TypeEnseignant')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModTypeEnsAction',));
            }

            // srvdv_server_admin_supptypeens
            if (0 === strpos($pathinfo, '/admin/suppTypeEns') && preg_match('#^/admin/suppTypeEns/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srvdv_server_admin_supptypeens')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppTypeEnsAction',));
            }

        }

        // srvdv_server_default_index
        if (rtrim($pathinfo, '/') === '/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'srvdv_server_default_index');
            }

            return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'srvdv_server_default_index',);
        }

        if (0 === strpos($pathinfo, '/enseignant')) {
            // ChoixFiliereEns_enseignant
            if ($pathinfo === '/enseignant/ChoixFiliereEns') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::ChoixFiliereEnsAction',  '_route' => 'ChoixFiliereEns_enseignant',);
            }

            // list_form_inscription_enseignant
            if (0 === strpos($pathinfo, '/enseignant/inscription') && preg_match('#^/enseignant/inscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_form_inscription_enseignant')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::InscriptionEnsAction',));
            }

            // Modifier_inscription
            if (0 === strpos($pathinfo, '/enseignant/ModInscription') && preg_match('#^/enseignant/ModInscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_inscription')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::ModInscriptionEnsAction',));
            }

            // form_profile_user_ens
            if ($pathinfo === '/enseignant/EditPofile') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::EditPofileAction',  '_route' => 'form_profile_user_ens',);
            }

            // srvdv_server_enseignant_suppinscripens
            if (0 === strpos($pathinfo, '/enseignant/SuppInscription') && preg_match('#^/enseignant/SuppInscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srvdv_server_enseignant_suppinscripens')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::SuppInscripEnsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/responsable')) {
            if (0 === strpos($pathinfo, '/responsable/M')) {
                // list_form_Matiere
                if ($pathinfo === '/responsable/Matiere') {
                    return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::matiereAction',  '_route' => 'list_form_Matiere',);
                }

                // Modifier_Matiere
                if (0 === strpos($pathinfo, '/responsable/ModMatiere') && preg_match('#^/responsable/ModMatiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_Matiere')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::ModmatiereAction',));
                }

            }

            // srvdv_server_responsable_suppusers
            if (0 === strpos($pathinfo, '/responsable/SuppMatiere') && preg_match('#^/responsable/SuppMatiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srvdv_server_responsable_suppusers')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::SuppUsersAction',));
            }

            // form_profile_user_resp
            if ($pathinfo === '/responsable/EditPofile') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::EditPofileAction',  '_route' => 'form_profile_user_resp',);
            }

            // list_form_inscription
            if ($pathinfo === '/responsable/inscription') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::InscriptionAction',  '_route' => 'list_form_inscription',);
            }

            // srvdv_server_responsable_modinscription
            if (0 === strpos($pathinfo, '/responsable/ModInscription') && preg_match('#^/responsable/ModInscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srvdv_server_responsable_modinscription')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::ModInscriptionAction',));
            }

            // srvdv_server_responsable_suppinscrip
            if (0 === strpos($pathinfo, '/responsable/SuppInscription') && preg_match('#^/responsable/SuppInscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'srvdv_server_responsable_suppinscrip')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::SuppInscripAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // fos_user_security_login
        if ($pathinfo === '/Connexion') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_security_login;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if ($pathinfo === '/Deconnexion') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/inscription') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/inscription/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/inscription/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/inscription/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/inscription/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::indexAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/changer/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
