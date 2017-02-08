<?php

/* @SRVDVServer/enseignant/MenuEnseignant.html.twig */
class __TwigTemplate_629bdf5614760638469c11ca56a456b1da98389d9fb6c8e7fa51f02495bfa0c7 extends Twig_Template
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
    <title>SRV-Voeux-Enseignant</title>
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


    </style>

  </head>
  <body  >

    ";
        // line 30
        if (array_key_exists("etatConnect", $context)) {
            // line 31
            echo "      ";
            $context["etat"] = (isset($context["etatConnect"]) ? $context["etatConnect"] : null);
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "      ";
            $context["etat"] = 999;
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
          <a  href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img class=\"image\" src=\"";
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
        if (((isset($context["etat"]) ? $context["etat"] : null) == "Accueil")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> </br> Accueil</a></li>
            <li  ";
        // line 56
        if (((isset($context["etat"]) ? $context["etat"] : null) == "Reserves")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reservations");
        echo "\"><span class=\"glyphicon glyphicon-link\"></span> </br> Etat Réservations </a></li>
            <li ";
        // line 57
        if (((isset($context["etat"]) ? $context["etat"] : null) == "users")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeUsers");
        echo "\"> <span class=\"glyphicon glyphicon-list\"></span>  </br>Liste des utilisateurs</a></li>
            <li ";
        // line 58
        if (((isset($context["etat"]) ? $context["etat"] : null) == "Filieres")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeFilieres");
        echo "\"><span class=\"glyphicon glyphicon-folder-close\"></span> </br>Liste des filières</a></li>       

          </ul>

          <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 64
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "  
              <li  ";
            // line 65
            if ((((isset($context["etatConnect"]) ? $context["etatConnect"] : null) >= 20) && ((isset($context["etatConnect"]) ? $context["etatConnect"] : null) < 30))) {
                echo " class=\"active\"  ";
            }
            echo " ><a  href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" ><span class=\"glyphicon glyphicon-user\"></span>  </br>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenom", array()), "html", null, true);
            echo "  (";
            echo twig_escape_filter($this->env, twig_round((isset($context["somme"]) ? $context["somme"] : null)), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombreHeurTheo", array()), "html", null, true);
            echo ")  </a></li>

              <li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                  <span class=\"glyphicon glyphicon-log-out\"></span>
                  </br>
                  ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "

                ";
        } else {
            // line 73
            echo "


                  <li><a href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                      <span class=\"glyphicon glyphicon-log-in\"></span>   </br>
                      ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "

                    ";
        }
        // line 81
        echo "                  </a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    ";
        // line 87
        if ((((isset($context["etatConnect"]) ? $context["etatConnect"] : null) >= 20) && ((isset($context["etatConnect"]) ? $context["etatConnect"] : null) < 30))) {
            // line 88
            echo "      <div class=\"row\">
        <div class=\"btn-group btn-group-justified\">

          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "'\" >
            <button  type=\"button\"  ";
            // line 92
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 21)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo " >

              <p > <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Mon Profile</p>
            </button>
          </div>

          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "'\">
            <button type=\"button\" ";
            // line 99
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 22)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">

              <p><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Mot De Passe</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_enseignant");
            echo "'\">
            <button type=\"button\" ";
            // line 105
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : null) == 20)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">

              <p><span class=\"glyphicon glyphicon-star\"></span> Résérvation</p>
            </button>
          </div>
        </div>
      </div>
    ";
        }
        // line 112
        echo " 
  </div>      
  <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">

  </script>

";
    }

    public function getTemplateName()
    {
        return "@SRVDVServer/enseignant/MenuEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 114,  256 => 112,  241 => 105,  237 => 104,  225 => 99,  221 => 98,  208 => 92,  204 => 91,  199 => 88,  197 => 87,  189 => 81,  183 => 78,  178 => 76,  173 => 73,  167 => 70,  161 => 67,  144 => 65,  140 => 64,  127 => 58,  119 => 57,  111 => 56,  103 => 55,  90 => 47,  76 => 35,  73 => 34,  70 => 33,  67 => 32,  64 => 31,  62 => 30,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SRVDVServer/enseignant/MenuEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\enseignant\\MenuEnseignant.html.twig");
    }
}
