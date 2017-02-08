<?php

/* @SRVDVServer/admin/MenuAdmin.html.twig */
class __TwigTemplate_2fde89762ff5107793471d896f6b12e6738c759c07d4f50e11ef50a1088745f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>SRV-Voeux-Admin</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/runtime_favico.ico"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\"/>
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\"/>
    <link rel=stylesheet type=\"text/css\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"/>
    <link rel=stylesheet type=\"text/css\" href=\"https://cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css\"/>
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js\"></script>

    <style>

      .centreVerticalement {
        display: inline-block;
        vertical-align: top;
        float: none;

      }
      li.active{
        background-color:orange;
      }


    </style>

  </head>
  <body  >

    ";
        // line 33
        if (array_key_exists("etatConnect", $context)) {
            // line 34
            echo "      ";
            $context["etat"] = (isset($context["etatConnect"]) ? $context["etatConnect"] : null);
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "      ";
            $context["etatConnect"] = "";
            // line 37
            echo "      ";
            $context["etat"] = "connect";
            // line 38
            echo "    ";
        }
        // line 39
        echo "

    <nav class=\"navbar navbar-default\" role=\"navigation\">
      <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a  class=\"image\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img style=\"width:100px; height:70px;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/SVEDI-small.png"), "html", null, true);
        echo "\"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"navbar-collapse style= collapse in\" id=\"bs-megadropdown-tabs\" style=\"
             padding-left: 0px;
             \">
          <ul class=\"nav navbar-nav\">
            <li  ";
        // line 59
        if (((isset($context["etat"]) ? $context["etat"] : null) == "Accueil")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span></br> Accueil</a></li>
            <li  ";
        // line 60
        if (((isset($context["etat"]) ? $context["etat"] : null) == "Reserves")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reservations");
        echo "\"><span class=\"glyphicon glyphicon-link\"></span></br> Réservations </a></li>
            <li ";
        // line 61
        if (((isset($context["etat"]) ? $context["etat"] : null) == "users")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeUsers");
        echo "\"> <span class=\"glyphicon glyphicon-list\"></span> </br>Liste des utilisateurs</a></li>
            <li ";
        // line 62
        if (((isset($context["etat"]) ? $context["etat"] : null) == "Filieres")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeFilieres");
        echo "\"><span class=\"glyphicon glyphicon-folder-close\"></span></br>Liste des filières</a></li> 


            ";
        // line 65
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 66
            echo "              <li class=\"dropdown mega-dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" onmouseover=\"dropdown\" > 
                  ";
            // line 68
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 21)) {
                echo " <span class=\"glyphicon glyphicon-user\"></span></br> Profile ";
            }
            // line 69
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 22)) {
                echo " <span class=\"glyphicon glyphicon-lock\"></span></br>Password ";
            }
            // line 70
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 45)) {
                echo " <span class=\"glyphicon glyphicon-time\"></span></br>Année ";
            }
            // line 71
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 44)) {
                echo " <span class=\"glyphicon glyphicon-star\"></span></br>Statut ";
            }
            // line 72
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 43)) {
                echo " <span class=\"glyphicon glyphicon-globe\"></span></br>Users ";
            }
            // line 73
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 42)) {
                echo " <span class=\"glyphicon glyphicon-cog\"></span></br>Fili&egrave;re ";
            }
            // line 74
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 41)) {
                echo " <span class=\"glyphicon glyphicon-asterisk\"></span></br>Type ";
            }
            // line 75
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 40)) {
                echo " <span class=\"glyphicon glyphicon-share-alt\"></span></br>Basculer ";
            }
            // line 76
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 32)) {
                echo " <span class=\"glyphicon glyphicon-flag\"></span></br>Matières ";
            }
            // line 77
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 30)) {
                echo " <span class=\"glyphicon glyphicon-refresh\"></span></br>Etat ";
            }
            // line 78
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 20)) {
                echo " <span class=\"glyphicon glyphicon-signal\"></span></br>Réserver ";
            }
            // line 79
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 51)) {
                echo " <span class=\"glyphicon glyphicon-alert\"></span>Alertes ";
            }
            // line 80
            echo "

                  (Admin)<span class=\"caret\"></span></a>               
                <div id=\"filters\" class=\"dropdown-menu mega-dropdown-menu\">
                  <div class=\"container-fluid2\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">                
                      <div class=\"tab-pane active\" id=\"kids\">
                        <ul class=\"nav-list list-inline\">
                          <li  ";
            // line 89
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 21)) {
                echo " class=\"active\" ";
            }
            echo "><a data-filter=\".89\"  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\"><span><span class=\"glyphicon glyphicon-user\"></span> Mon Profile</span></a></li>
                          <li  ";
            // line 90
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 22)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\"><span><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Mot De Passe</span></a></li>
                          <li  ";
            // line 91
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 45)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Annee");
            echo "\"><span><span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span> Gestion des années</span></a></li>
                          <li  ";
            // line 92
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 44)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Type");
            echo "\"><span><span class=\"glyphicon glyphicon-star\"></span> Gestion des statuts</a></li>
                          <li  ";
            // line 93
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 43)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><span><span class=\"glyphicon glyphicon-globe\"></span> Gestion des utilisateurs</a></li>
                          <li  ";
            // line 94
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 42)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_filiere");
            echo "\"><span><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Gestions des filières</a></li>
                          <li  ";
            // line 95
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 41)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_typeens");
            echo "\"><span><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span> Type des enseignements</a></li>
                          <li  ";
            // line 96
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 32)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Matiere");
            echo "\"><span><span class=\"glyphicon glyphicon-flag\"></span> Gestions des matières</span></a></li>
                          <li  ";
            // line 97
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 20)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_enseignant");
            echo "\"><span><span class=\"glyphicon glyphicon-signal\"></span> Résérvation</a></li>
                          <li  ";
            // line 98
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 30)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_matieres_responsable");
            echo "\"><span><span class=\"glyphicon glyphicon-refresh\"></span> Etat des matières</a></li>
                          <li  ";
            // line 99
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 51)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alertes_admin");
            echo "\"><span><span class=\"glyphicon glyphicon-alert\" aria-hidden=\"true\"></span> Alertes</a></li>
                          <li  ";
            // line 100
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 40)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annee_suivante");
            echo "\"><span><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span> Basculer vers une autre annnée</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>              
              </li>      
            ";
        }
        // line 107
        echo " 
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 110
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
              <li ";
            // line 111
            if ((((isset($context["etatConnect"]) ? $context["etatConnect"] : null) >= 20) && ((isset($context["etatConnect"]) ? $context["etatConnect"] : null) < 60))) {
                echo " class=\"active\"   ";
            }
            echo " >
                <a  href=\"";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" > <span class=\"glyphicon glyphicon-user\"></span> 
                  </br>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenom", array()), "html", null, true);
            echo "  (";
            echo twig_escape_filter($this->env, twig_round((isset($context["somme"]) ? $context["somme"] : null)), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombreHeurTheo", array()), "html", null, true);
            echo ") </a></li> 
              <li><a href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                  <span class=\"glyphicon glyphicon-log-out\"></span>
                  </br>   ";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 118
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                      <span class=\"glyphicon glyphicon-log-in\"></span> 
                      </br> ";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    ";
        }
        // line 122
        echo "                  </a>
                </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>



  </div>  





  <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">

  </script>";
    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/MenuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 137,  372 => 122,  367 => 120,  361 => 118,  356 => 116,  351 => 114,  341 => 113,  337 => 112,  331 => 111,  327 => 110,  322 => 107,  307 => 100,  299 => 99,  291 => 98,  283 => 97,  275 => 96,  267 => 95,  259 => 94,  251 => 93,  243 => 92,  235 => 91,  227 => 90,  219 => 89,  208 => 80,  203 => 79,  198 => 78,  193 => 77,  188 => 76,  183 => 75,  178 => 74,  173 => 73,  168 => 72,  163 => 71,  158 => 70,  153 => 69,  149 => 68,  145 => 66,  143 => 65,  133 => 62,  125 => 61,  117 => 60,  109 => 59,  96 => 51,  82 => 39,  79 => 38,  76 => 37,  73 => 36,  70 => 35,  67 => 34,  65 => 33,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SRVDVServer/admin/MenuAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\MenuAdmin.html.twig");
    }
}
