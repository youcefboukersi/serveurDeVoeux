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

            // modifier_user_admin
            if (0 === strpos($pathinfo, '/admin/Updateuser') && preg_match('#^/admin/Updateuser/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_user_admin')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModifierUsersAction',));
            }

            // Modifier_Users
            if (0 === strpos($pathinfo, '/admin/ModUsers') && preg_match('#^/admin/ModUsers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_Users')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModUsersAction',));
            }

            // supprimer_utilisateur_admin
            if (0 === strpos($pathinfo, '/admin/suppUsers') && preg_match('#^/admin/suppUsers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_utilisateur_admin')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppUsersAction',));
            }

            // list_form_Annee
            if ($pathinfo === '/admin/addAnnee') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addAnneeAction',  '_route' => 'list_form_Annee',);
            }

            // Modifier_Annee
            if (0 === strpos($pathinfo, '/admin/ModAnnee') && preg_match('#^/admin/ModAnnee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_Annee')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModAnneeAction',));
            }

            // supprimer_annee_admin
            if (0 === strpos($pathinfo, '/admin/suppAnnee') && preg_match('#^/admin/suppAnnee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_annee_admin')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppAnneeAction',));
            }

            // list_form_Type
            if ($pathinfo === '/admin/addtype') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addTypeAction',  '_route' => 'list_form_Type',);
            }

            // Modifier_TypeUtilisateur
            if (0 === strpos($pathinfo, '/admin/ModType') && preg_match('#^/admin/ModType/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_TypeUtilisateur')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModTypeAction',));
            }

            // supprimer_statut_admin
            if (0 === strpos($pathinfo, '/admin/suppType') && preg_match('#^/admin/suppType/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_statut_admin')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppTypeAction',));
            }

            // list_form_filiere
            if ($pathinfo === '/admin/addFiliere') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addFiliereAction',  '_route' => 'list_form_filiere',);
            }

            // Modifier_filiere
            if (0 === strpos($pathinfo, '/admin/ModFiliere') && preg_match('#^/admin/ModFiliere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_filiere')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModFiliereAction',));
            }

            // supprimer_filiere_admin
            if (0 === strpos($pathinfo, '/admin/suppFiliere') && preg_match('#^/admin/suppFiliere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_filiere_admin')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppFiliereAction',));
            }

            // list_form_typeens
            if ($pathinfo === '/admin/TypeEns') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addTypeEnsAction',  '_route' => 'list_form_typeens',);
            }

            // Modifier_TypeEnseignant
            if (0 === strpos($pathinfo, '/admin/ModTypeEns') && preg_match('#^/admin/ModTypeEns/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_TypeEnseignant')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModTypeEnsAction',));
            }

            // supprimer_type_enseig_admin
            if (0 === strpos($pathinfo, '/admin/suppTypeEns') && preg_match('#^/admin/suppTypeEns/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_type_enseig_admin')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppTypeEnsAction',));
            }

            // alertes_admin
            if ($pathinfo === '/admin/Alertes') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::alertAction',  '_route' => 'alertes_admin',);
            }

            // Modifier_alerte
            if (0 === strpos($pathinfo, '/admin/modifier_alertes') && preg_match('#^/admin/modifier_alertes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_alerte')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::modifAlertAction',));
            }

            // supprimer_alerte
            if (0 === strpos($pathinfo, '/admin/supprimer_alertes') && preg_match('#^/admin/supprimer_alertes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_alerte')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::supprimerAlertAction',));
            }

            // annee_suivante
            if ($pathinfo === '/admin/anneeSuivante') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AnneeSuivanteController::indexAction',  '_route' => 'annee_suivante',);
            }

            // generate_Annee_users
            if (0 === strpos($pathinfo, '/admin/generateUsers') && preg_match('#^/admin/generateUsers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'generate_Annee_users')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AnneeSuivanteController::generateUsersAction',));
            }

            // supprimer_generate_Annee
            if (0 === strpos($pathinfo, '/admin/SupprimerGenerate') && preg_match('#^/admin/SupprimerGenerate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_generate_Annee')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AnneeSuivanteController::SupprimerGenerateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/home')) {
            // home_nbr_inscription
            if (0 === strpos($pathinfo, '/home/nombreInscription') && preg_match('#^/home/nombreInscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_nbr_inscription')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::nombreInscriptionAction',));
            }

            // home
            if (rtrim($pathinfo, '/') === '/home') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'home');
                }

                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
            }

        }

        // Reservations
        if (rtrim($pathinfo, '/') === '/reservation') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Reservations');
            }

            return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::reservationAction',  '_route' => 'Reservations',);
        }

        if (0 === strpos($pathinfo, '/home/Liste')) {
            // home_ListeUsers
            if ($pathinfo === '/home/ListeUsers') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::ListeUsersAction',  '_route' => 'home_ListeUsers',);
            }

            // home_ListeFilieres
            if ($pathinfo === '/home/ListeFilieres') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::ListeFilieresAction',  '_route' => 'home_ListeFilieres',);
            }

        }

        if (0 === strpos($pathinfo, '/enseignant')) {
            if (0 === strpos($pathinfo, '/enseignant/Choix')) {
                // ChoixFiliereEns_enseignant
                if ($pathinfo === '/enseignant/ChoixFiliereEns') {
                    return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::ChoixFiliereEnsAction',  '_route' => 'ChoixFiliereEns_enseignant',);
                }

                // Etat_reservation_responsable
                if (0 === strpos($pathinfo, '/enseignant/ChoixMatiereEns') && preg_match('#^/enseignant/ChoixMatiereEns/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Etat_reservation_responsable')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::EtatMatiereAction',));
                }

            }

            // list_form_inscription
            if (0 === strpos($pathinfo, '/enseignant/inscription') && preg_match('#^/enseignant/inscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_form_inscription')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::InscriptionEnsAction',));
            }

            // Modifier_inscription
            if (0 === strpos($pathinfo, '/enseignant/ModInscription') && preg_match('#^/enseignant/ModInscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Modifier_inscription')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::ModInscriptionEnsAction',));
            }

            if (0 === strpos($pathinfo, '/enseignant/EditPofile')) {
                // form_profile_user_ens
                if ($pathinfo === '/enseignant/EditPofile') {
                    return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::EditPofileAction',  '_route' => 'form_profile_user_ens',);
                }

                // form_profile_user_ens_motDePasse
                if ($pathinfo === '/enseignant/EditPofileMP') {
                    return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::EditPofileMPAction',  '_route' => 'form_profile_user_ens_motDePasse',);
                }

            }

            // supp_incription_responsable
            if (0 === strpos($pathinfo, '/enseignant/SuppInscription') && preg_match('#^/enseignant/SuppInscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_incription_responsable')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::SuppInscripEnsAction',));
            }

            // Liste_ReservationProf
            if (0 === strpos($pathinfo, '/enseignant/ReservationProf') && preg_match('#^/enseignant/ReservationProf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Liste_ReservationProf')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::ReservationProfAction',));
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

            // supprimer_matieres_responsable
            if (0 === strpos($pathinfo, '/responsable/SuppMatiere') && preg_match('#^/responsable/SuppMatiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_matieres_responsable')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::SuppUsersAction',));
            }

            // Etat_matieres_responsable
            if ($pathinfo === '/responsable/EtatMatiere') {
                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::EtatMatiereAction',  '_route' => 'Etat_matieres_responsable',);
            }

            if (0 === strpos($pathinfo, '/responsable/inscriptionMatiere')) {
                // modifier_inscription_matieres_etat
                if (0 === strpos($pathinfo, '/responsable/inscriptionMatiereModifier') && preg_match('#^/responsable/inscriptionMatiereModifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_inscription_matieres_etat')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::inscriptionMatiereMODAction',));
                }

                // list_form_inscription_matieres_etat
                if (preg_match('#^/responsable/inscriptionMatiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_form_inscription_matieres_etat')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::inscriptionMatiereAction',));
                }

            }

            // supprimer_matiere_inscription
            if (0 === strpos($pathinfo, '/responsable/SuppInscriptionMatiere') && preg_match('#^/responsable/SuppInscriptionMatiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_matiere_inscription')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::SuppInscriptionMatiereAction',));
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

            return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if ($pathinfo === '/Deconnexion') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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

                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
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

                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::indexAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/inscription/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/inscription/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/inscription/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\RegistrationController::confirmAction',));
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

                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/changer/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'SRVDV\\ServerBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
