<?php

/* SRVDVServerBundle:responsable:MenuResponsable.html.twig */
class __TwigTemplate_616099a86a91d8d980c95151c15bf15d9375c5985dc7dcc40c69d717ace14a13 extends Twig_Template
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
        $__internal_c2f4a0c2b254040a6f1e70f82c75059fa48cbc74462c88da7158b1486e582c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f4a0c2b254040a6f1e70f82c75059fa48cbc74462c88da7158b1486e582c52->enter($__internal_c2f4a0c2b254040a6f1e70f82c75059fa48cbc74462c88da7158b1486e582c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:MenuResponsable.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>SRV-Voeux-Responsable</title>
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
            $context["etat"] = (isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect"));
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
        // line 46
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
        // line 54
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "Accueil")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span></br>Accueil</a></li>
            <li  ";
        // line 55
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "Reserves")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reservations");
        echo "\"><span class=\"glyphicon glyphicon-link\"></span></br> Etat Réservations </a></li>
            <li ";
        // line 56
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "users")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeUsers");
        echo "\"> <span class=\"glyphicon glyphicon-list\"></span> </br>Liste des utilisateurs</a></li>
            <li ";
        // line 57
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "Filieres")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeFilieres");
        echo "\"><span class=\"glyphicon glyphicon-folder-close\"></span></br>Liste des filières</a></li>   

          </ul>

          <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 63
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
              <li ";
            // line 64
            if ((((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) >= 20) && ((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) < 40))) {
                echo " class=\"active\"   ";
            }
            echo " >
                <a  href=\" ";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" >  <span class=\"glyphicon glyphicon-user\"></span>  
                  </br>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_round((isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme"))), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreHeurTheo", array()), "html", null, true);
            echo ")   </a></li>                  

              <li><a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                  <span class=\"glyphicon glyphicon-log-out\"></span>
                  </br>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "

                ";
        } else {
            // line 73
            echo "
                  <li><a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                      <span class=\"glyphicon glyphicon-log-in\"></span> 
                      </br> ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "

                    ";
        }
        // line 79
        echo "                  </a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    ";
        // line 84
        if ((((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) >= 20) && ((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) < 40))) {
            // line 85
            echo "      <div class=\"row\">
        <div class=\"btn-group btn-group-justified\">
          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "'\" >
            <button  type=\"button\"  ";
            // line 88
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 34)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo " >
              <p >   <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Mon profile</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "'\">
            <button type=\"button\" ";
            // line 93
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 33)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
              <p><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Mot de passe</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Matiere");
            echo "'\">
            <button type=\"button\" ";
            // line 98
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 32)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">

              <p><span class=\"glyphicon glyphicon-time\"></span> Gestion des matières</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_enseignant");
            echo "'\">
            <button type=\"button\" ";
            // line 104
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 20)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">

              <p><span class=\"glyphicon glyphicon-star\"></span> Résérvation</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 109
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_matieres_responsable");
            echo "'\">
            <button type=\"button\" ";
            // line 110
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 30)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">

              <p><span class=\"glyphicon glyphicon-refresh\"></span> Etat des matières</p>
            </button>
          </div>
        </div>
      </div>
    ";
        }
        // line 117
        echo " 
  </div>      
  <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">

  </script>
";
        
        $__internal_c2f4a0c2b254040a6f1e70f82c75059fa48cbc74462c88da7158b1486e582c52->leave($__internal_c2f4a0c2b254040a6f1e70f82c75059fa48cbc74462c88da7158b1486e582c52_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:MenuResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 119,  286 => 117,  271 => 110,  267 => 109,  255 => 104,  251 => 103,  239 => 98,  235 => 97,  224 => 93,  220 => 92,  209 => 88,  205 => 87,  201 => 85,  199 => 84,  192 => 79,  186 => 76,  181 => 74,  178 => 73,  172 => 70,  167 => 68,  156 => 66,  152 => 65,  146 => 64,  142 => 63,  129 => 57,  121 => 56,  113 => 55,  105 => 54,  92 => 46,  79 => 35,  76 => 34,  73 => 33,  70 => 32,  67 => 31,  65 => 30,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
    <title>SRV-Voeux-Responsable</title>
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


    </style>

  </head>
  <body  >

    {% if etatConnect is defined %}
      {% set etat = etatConnect %}
    {% else %}
      {% set etat = 999 %}
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
          <a  href=\"{{ path('home')}}\"><img class=\"image\" src=\"{{ asset ('assets/images/SVEDI-small.png') }}\"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"navbar-collapse style= collapse in\" id=\"bs-megadropdown-tabs\" style=\"
             padding-left: 0px;
             \">
          <ul class=\"nav navbar-nav\">
            <li  {% if etat == 'Accueil' %} class=\"active\"   {% endif %} ><a href=\"{{ path('home')}}\"><span class=\"glyphicon glyphicon-home\"></span></br>Accueil</a></li>
            <li  {% if etat == 'Reserves' %} class=\"active\"   {% endif %} ><a href=\"{{ path('Reservations')}}\"><span class=\"glyphicon glyphicon-link\"></span></br> Etat Réservations </a></li>
            <li {% if etat == 'users' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeUsers')}}\"> <span class=\"glyphicon glyphicon-list\"></span> </br>Liste des utilisateurs</a></li>
            <li {% if etat == 'Filieres' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeFilieres')}}\"><span class=\"glyphicon glyphicon-folder-close\"></span></br>Liste des filières</a></li>   

          </ul>

          <ul class=\"nav navbar-nav navbar-right\">

            {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %} 
              <li {% if etatConnect >= 20 and  etatConnect < 40   %} class=\"active\"   {% endif %} >
                <a  href=\" {{path('fos_user_profile_edit')}}\" >  <span class=\"glyphicon glyphicon-user\"></span>  
                  </br>{{ app.user.nom }} {{ app.user.prenom }} ({{ somme|round }}/{{ app.user.nombreHeurTheo }})   </a></li>                  

              <li><a href=\"{{ path('fos_user_security_logout') }}\">
                  <span class=\"glyphicon glyphicon-log-out\"></span>
                  </br>{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}

                {% else %}

                  <li><a href=\"{{ path('fos_user_security_login') }}\">
                      <span class=\"glyphicon glyphicon-log-in\"></span> 
                      </br> {{ 'layout.login'|trans({}, 'FOSUserBundle') }}

                    {% endif %}
                  </a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    {% if etatConnect >= 20 and  etatConnect < 40   %}
      <div class=\"row\">
        <div class=\"btn-group btn-group-justified\">
          <div class=\"btn-group\" onclick=\"self.location.href = '{{path('fos_user_profile_edit')}}'\" >
            <button  type=\"button\"  {% if etatConnect == 34   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %} >
              <p >   <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Mon profile</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '{{path('fos_user_change_password')}}'\">
            <button type=\"button\" {% if etatConnect == 33  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
              <p><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Mot de passe</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '{{ path('list_form_Matiere')}}'\">
            <button type=\"button\" {% if etatConnect == 32  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>

              <p><span class=\"glyphicon glyphicon-time\"></span> Gestion des matières</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '{{path('ChoixFiliereEns_enseignant')}}'\">
            <button type=\"button\" {% if etatConnect == 20  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>

              <p><span class=\"glyphicon glyphicon-star\"></span> Résérvation</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '{{path('Etat_matieres_responsable')}}'\">
            <button type=\"button\" {% if etatConnect == 30   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>

              <p><span class=\"glyphicon glyphicon-refresh\"></span> Etat des matières</p>
            </button>
          </div>
        </div>
      </div>
    {% endif %} 
  </div>      
  <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\">

  </script>
", "SRVDVServerBundle:responsable:MenuResponsable.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MenuResponsable.html.twig");
    }
}
