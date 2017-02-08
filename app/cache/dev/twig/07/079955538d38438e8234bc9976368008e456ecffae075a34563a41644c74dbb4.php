<?php

/* SRVDVServerBundle:admin:MenuAdmin.html.twig */
class __TwigTemplate_13eb4e0f6c2d4cf70260b3a5bd67e1a7c2e7bce06a0dbe7e8f8a7a35a69eaa11 extends Twig_Template
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
        $__internal_4c27ff714f88231fae376ded673fa0d09a6535c8f67ce81d41efa1e83ad74d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c27ff714f88231fae376ded673fa0d09a6535c8f67ce81d41efa1e83ad74d78->enter($__internal_4c27ff714f88231fae376ded673fa0d09a6535c8f67ce81d41efa1e83ad74d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:MenuAdmin.html.twig"));

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
        // line 29
        if (array_key_exists("etatConnect", $context)) {
            // line 30
            echo "      ";
            $context["etat"] = (isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect"));
            // line 31
            echo "    ";
        } else {
            // line 32
            echo "      ";
            $context["etatConnect"] = "";
            // line 33
            echo "      ";
            $context["etat"] = "connect";
            // line 34
            echo "    ";
        }
        // line 35
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
        // line 47
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
        // line 55
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "Accueil")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span></br> Accueil</a></li>
            <li  ";
        // line 56
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "Reserves")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reservations");
        echo "\"><span class=\"glyphicon glyphicon-link\"></span></br> Réservations </a></li>
            <li ";
        // line 57
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "users")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeUsers");
        echo "\"> <span class=\"glyphicon glyphicon-list\"></span> </br>Liste des utilisateurs</a></li>
            <li ";
        // line 58
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "Filieres")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeFilieres");
        echo "\"><span class=\"glyphicon glyphicon-folder-close\"></span></br>Liste des filières</a></li> 


            ";
        // line 61
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 62
            echo "              <li class=\"dropdown mega-dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" onmouseover=\"dropdown\" > 
                  ";
            // line 64
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 21)) {
                echo " <span class=\"glyphicon glyphicon-user\"></span></br> Profile ";
            }
            // line 65
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 22)) {
                echo " <span class=\"glyphicon glyphicon-lock\"></span></br>Password ";
            }
            // line 66
            echo "                   ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 23)) {
                echo " <span class=\"glyphicon glyphicon-eye-open\"></span></br>Etat Res ";
            }
            // line 67
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 45)) {
                echo " <span class=\"glyphicon glyphicon-time\"></span></br>Année ";
            }
            // line 68
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 44)) {
                echo " <span class=\"glyphicon glyphicon-star\"></span></br>Statut ";
            }
            // line 69
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 43)) {
                echo " <span class=\"glyphicon glyphicon-globe\"></span></br>Users ";
            }
            // line 70
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 42)) {
                echo " <span class=\"glyphicon glyphicon-cog\"></span></br>Fili&egrave;re ";
            }
            // line 71
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 41)) {
                echo " <span class=\"glyphicon glyphicon-asterisk\"></span></br>Type ";
            }
            // line 72
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 40)) {
                echo " <span class=\"glyphicon glyphicon-share-alt\"></span></br>Basculer ";
            }
            // line 73
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 32)) {
                echo " <span class=\"glyphicon glyphicon-flag\"></span></br>Matières ";
            }
            // line 74
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 30)) {
                echo " <span class=\"glyphicon glyphicon-refresh\"></span></br>Etat ";
            }
            // line 75
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 20)) {
                echo " <span class=\"glyphicon glyphicon-signal\"></span></br>Réserver ";
            }
            // line 76
            echo "                  ";
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 51)) {
                echo " <span class=\"glyphicon glyphicon-alert\"></span></br>Alertes ";
            }
            // line 77
            echo "

                  (Admin)<span class=\"caret\"></span></a>               
                <div id=\"filters\" class=\"dropdown-menu mega-dropdown-menu\">
                  <div class=\"container-fluid2\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">                
                      <div class=\"tab-pane active\" id=\"kids\">
                        <ul class=\"nav-list list-inline\">

                          <div class=\"centreVerticalement\">
                          <li  ";
            // line 88
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 21)) {
                echo " class=\"active\" ";
            }
            echo "><a data-filter=\".89\"  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\"><span><span class=\"glyphicon glyphicon-user\"></span> Mon profil</span></a></li>
                          <li  ";
            // line 89
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 22)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\"><span><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Mot de passe</span></a></li>

                          <li  ";
            // line 91
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 23)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Liste_ReservationProf", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><span><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>Liste Réservations</span></a></li>

                          <li  ";
            // line 93
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 20)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_enseignant");
            echo "\"><span><span class=\"glyphicon glyphicon-signal\"></span> Réservation</a></li>

                          
                        
                        </div>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <div class=\"centreVerticalement\">
                            <li  ";
            // line 100
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 30)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_matieres_responsable");
            echo "\"><span><span class=\"glyphicon glyphicon-refresh\"></span> Etat des matières</a></li>
                            <li  ";
            // line 101
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 43)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><span><span class=\"glyphicon glyphicon-globe\"></span> Gestion des utilisateurs</a></li>

                               <li  ";
            // line 103
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 42)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_filiere");
            echo "\"><span><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Gestions des filières</a></li>
                                <li  ";
            // line 104
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 32)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Matiere");
            echo "\"><span><span class=\"glyphicon glyphicon-flag\"></span> Gestions des matières</span></a></li>
                          
                     
                         
                         
                        
                          
                        </div>

                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <div class=\"centreVerticalement\">
                          
                          <li  ";
            // line 116
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 51)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alertes_admin");
            echo "\"><span><span class=\"glyphicon glyphicon-alert\" aria-hidden=\"true\"></span> Alertes</a></li>
                           <li  ";
            // line 117
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 45)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Annee");
            echo "\"><span><span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span> Gestion des années</span></a></li>
                          <li  ";
            // line 118
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 40)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annee_suivante");
            echo "\"><span><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span> Basculer vers une nouvelle annnée</a></li>

                        </div>

                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <div class=\"centreVerticalement\">
                       
                          <li  ";
            // line 125
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 44)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Type");
            echo "\"><span><span class=\"glyphicon glyphicon-star\"></span> Gestion des statuts</a></li>
                         
                           
                          <li  ";
            // line 128
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 41)) {
                echo " class=\"active\" ";
            }
            echo "><a  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_typeens");
            echo "\"><span><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span> Type des enseignements</a></li>
                          
                        </div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>              
              </li>      
            ";
        }
        // line 137
        echo " 
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 140
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
              <li ";
            // line 141
            if ((((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) >= 20) && ((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) < 60))) {
                echo " class=\"active\"   ";
            }
            echo " >
                <a  href=\"";
            // line 142
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" > <span class=\"glyphicon glyphicon-user\"></span> 
                  </br>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "  (";
            echo twig_escape_filter($this->env, twig_round((isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme"))), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreHeurTheo", array()), "html", null, true);
            echo ") </a></li> 
              <li><a href=\"";
            // line 144
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                  <span class=\"glyphicon glyphicon-log-out\"></span>
                  </br>   ";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 148
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                      <span class=\"glyphicon glyphicon-log-in\"></span> 
                      </br> ";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    ";
        }
        // line 152
        echo "                  </a>
                </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>  
  <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">
  </script>

  

";
        
        $__internal_4c27ff714f88231fae376ded673fa0d09a6535c8f67ce81d41efa1e83ad74d78->leave($__internal_4c27ff714f88231fae376ded673fa0d09a6535c8f67ce81d41efa1e83ad74d78_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:MenuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 159,  416 => 152,  411 => 150,  405 => 148,  400 => 146,  395 => 144,  385 => 143,  381 => 142,  375 => 141,  371 => 140,  366 => 137,  349 => 128,  339 => 125,  325 => 118,  317 => 117,  309 => 116,  290 => 104,  282 => 103,  273 => 101,  265 => 100,  251 => 93,  242 => 91,  233 => 89,  225 => 88,  212 => 77,  207 => 76,  202 => 75,  197 => 74,  192 => 73,  187 => 72,  182 => 71,  177 => 70,  172 => 69,  167 => 68,  162 => 67,  157 => 66,  152 => 65,  148 => 64,  144 => 62,  142 => 61,  132 => 58,  124 => 57,  116 => 56,  108 => 55,  95 => 47,  81 => 35,  78 => 34,  75 => 33,  72 => 32,  69 => 31,  66 => 30,  64 => 29,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>SRV-Voeux-Admin</title>
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/runtime_favico.ico')}}\">
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\"/>
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('assets/css/home.css') }}\"/>
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('assets/css/menu.css') }}\"/>
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

    {% if etatConnect is defined %}
      {% set etat = etatConnect %}
    {% else %}
      {% set etatConnect = '' %}
      {% set etat = 'connect' %}
    {% endif %}


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
          <a  class=\"image\" href=\"{{ path('home')}}\"><img style=\"width:100px; height:70px;\" src=\"{{ asset ('assets/images/SVEDI-small.png') }}\"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"navbar-collapse style= collapse in\" id=\"bs-megadropdown-tabs\" style=\"
             padding-left: 0px;
             \">
          <ul class=\"nav navbar-nav\">
            <li  {% if etat == 'Accueil' %} class=\"active\"   {% endif %} ><a href=\"{{ path('home')}}\"><span class=\"glyphicon glyphicon-home\"></span></br> Accueil</a></li>
            <li  {% if etat == 'Reserves' %} class=\"active\"   {% endif %} ><a href=\"{{ path('Reservations')}}\"><span class=\"glyphicon glyphicon-link\"></span></br> Réservations </a></li>
            <li {% if etat == 'users' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeUsers')}}\"> <span class=\"glyphicon glyphicon-list\"></span> </br>Liste des utilisateurs</a></li>
            <li {% if etat == 'Filieres' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeFilieres')}}\"><span class=\"glyphicon glyphicon-folder-close\"></span></br>Liste des filières</a></li> 


            {% if is_granted(\"ROLE_ADMIN\") %}
              <li class=\"dropdown mega-dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" onmouseover=\"dropdown\" > 
                  {% if etatConnect == 21   %} <span class=\"glyphicon glyphicon-user\"></span></br> Profile {% endif %}
                  {% if etatConnect == 22   %} <span class=\"glyphicon glyphicon-lock\"></span></br>Password {% endif %}
                   {% if etatConnect == 23  %} <span class=\"glyphicon glyphicon-eye-open\"></span></br>Etat Res {% endif %}
                  {% if etatConnect == 45   %} <span class=\"glyphicon glyphicon-time\"></span></br>Année {% endif %}
                  {% if etatConnect == 44   %} <span class=\"glyphicon glyphicon-star\"></span></br>Statut {% endif %}
                  {% if etatConnect == 43   %} <span class=\"glyphicon glyphicon-globe\"></span></br>Users {% endif %}
                  {% if etatConnect == 42   %} <span class=\"glyphicon glyphicon-cog\"></span></br>Fili&egrave;re {% endif %}
                  {% if etatConnect == 41   %} <span class=\"glyphicon glyphicon-asterisk\"></span></br>Type {% endif %}
                  {% if etatConnect == 40   %} <span class=\"glyphicon glyphicon-share-alt\"></span></br>Basculer {% endif %}
                  {% if etatConnect == 32   %} <span class=\"glyphicon glyphicon-flag\"></span></br>Matières {% endif %}
                  {% if etatConnect == 30   %} <span class=\"glyphicon glyphicon-refresh\"></span></br>Etat {% endif %}
                  {% if etatConnect == 20   %} <span class=\"glyphicon glyphicon-signal\"></span></br>Réserver {% endif %}
                  {% if etatConnect == 51   %} <span class=\"glyphicon glyphicon-alert\"></span></br>Alertes {% endif %}


                  (Admin)<span class=\"caret\"></span></a>               
                <div id=\"filters\" class=\"dropdown-menu mega-dropdown-menu\">
                  <div class=\"container-fluid2\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">                
                      <div class=\"tab-pane active\" id=\"kids\">
                        <ul class=\"nav-list list-inline\">

                          <div class=\"centreVerticalement\">
                          <li  {% if etatConnect == 21   %} class=\"active\" {% endif %}><a data-filter=\".89\"  href=\"{{path('fos_user_profile_edit')}}\"><span><span class=\"glyphicon glyphicon-user\"></span> Mon profil</span></a></li>
                          <li  {% if etatConnect == 22   %} class=\"active\" {% endif %}><a  href=\"{{path('fos_user_change_password')}}\"><span><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Mot de passe</span></a></li>

                          <li  {% if etatConnect == 23   %} class=\"active\" {% endif %}><a  href=\"{{path('Liste_ReservationProf',{'id':app.user.id })}}\"><span><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>Liste Réservations</span></a></li>

                          <li  {% if etatConnect == 20   %} class=\"active\" {% endif %}><a  href=\"{{path('ChoixFiliereEns_enseignant')}}\"><span><span class=\"glyphicon glyphicon-signal\"></span> Réservation</a></li>

                          
                        
                        </div>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <div class=\"centreVerticalement\">
                            <li  {% if etatConnect == 30   %} class=\"active\" {% endif %}><a  href=\"{{path('Etat_matieres_responsable')}}\"><span><span class=\"glyphicon glyphicon-refresh\"></span> Etat des matières</a></li>
                            <li  {% if etatConnect == 43   %} class=\"active\" {% endif %}><a  href=\"{{path('fos_user_registration_register')}}\"><span><span class=\"glyphicon glyphicon-globe\"></span> Gestion des utilisateurs</a></li>

                               <li  {% if etatConnect == 42   %} class=\"active\" {% endif %}><a  href=\"{{path('list_form_filiere')}}\"><span><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Gestions des filières</a></li>
                                <li  {% if etatConnect == 32   %} class=\"active\" {% endif %}><a  href=\"{{path('list_form_Matiere')}}\"><span><span class=\"glyphicon glyphicon-flag\"></span> Gestions des matières</span></a></li>
                          
                     
                         
                         
                        
                          
                        </div>

                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <div class=\"centreVerticalement\">
                          
                          <li  {% if etatConnect == 51   %} class=\"active\" {% endif %}><a  href=\"{{path('alertes_admin')}}\"><span><span class=\"glyphicon glyphicon-alert\" aria-hidden=\"true\"></span> Alertes</a></li>
                           <li  {% if etatConnect == 45   %} class=\"active\" {% endif %}><a  href=\"{{path('list_form_Annee')}}\"><span><span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></span> Gestion des années</span></a></li>
                          <li  {% if etatConnect == 40   %} class=\"active\" {% endif %}><a  href=\"{{path('annee_suivante')}}\"><span><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span> Basculer vers une nouvelle annnée</a></li>

                        </div>

                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <div class=\"centreVerticalement\">
                       
                          <li  {% if etatConnect == 44  %} class=\"active\" {% endif %}><a  href=\"{{path('list_form_Type')}}\"><span><span class=\"glyphicon glyphicon-star\"></span> Gestion des statuts</a></li>
                         
                           
                          <li  {% if etatConnect == 41  %} class=\"active\" {% endif %}><a  href=\"{{path('list_form_typeens')}}\"><span><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span> Type des enseignements</a></li>
                          
                        </div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>              
              </li>      
            {% endif %} 
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %} 
              <li {% if etatConnect >= 20 and  etatConnect < 60   %} class=\"active\"   {% endif %} >
                <a  href=\"{{path('fos_user_profile_edit')}}\" > <span class=\"glyphicon glyphicon-user\"></span> 
                  </br>{{ app.user.nom }} {{ app.user.prenom }}  ({{ somme|round }}/{{ app.user.nombreHeurTheo }}) </a></li> 
              <li><a href=\"{{ path('fos_user_security_logout') }}\">
                  <span class=\"glyphicon glyphicon-log-out\"></span>
                  </br>   {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                {% else %}
                  <li><a href=\"{{ path('fos_user_security_login') }}\">
                      <span class=\"glyphicon glyphicon-log-in\"></span> 
                      </br> {{ 'layout.login'|trans({}, 'FOSUserBundle') }}
                    {% endif %}
                  </a>
                </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>  
  <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\">
  </script>

  

", "SRVDVServerBundle:admin:MenuAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/MenuAdmin.html.twig");
    }
}
