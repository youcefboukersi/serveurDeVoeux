<?php

/* SRVDVServerBundle:responsable:MenuResponsable.html.twig */
class __TwigTemplate_fc2c9977eeddf5f274deb8920916a32dbd1fe0d7ac1a144149f0c4db5dfeb5d7 extends Twig_Template
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
        $__internal_3ef596681eb3fcc38b99716a333e93798dc07f5db56c7f6a77a32ff6a981ecd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef596681eb3fcc38b99716a333e93798dc07f5db56c7f6a77a32ff6a981ecd6->enter($__internal_3ef596681eb3fcc38b99716a333e93798dc07f5db56c7f6a77a32ff6a981ecd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:MenuResponsable.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SRV-Voeux-Responsable</title>
             

        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
         <link rel=stylesheet type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\"/>

        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 10
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
    <body>

";
        // line 33
        if (array_key_exists("etatConnect", $context)) {
            // line 34
            $context["etat"] = ($context["etatConnect"] ?? $this->getContext($context, "etatConnect"));
        } else {
            // line 36
            $context["etat"] = 999;
        }
        // line 38
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
        // line 49
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
        // line 57
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == "Accueil")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span>&nbsp;  Accueil</a></li>
                <li ";
        // line 58
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == "users")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeUsers");
        echo "\"> <span class=\"glyphicon glyphicon-list\"></span> &nbsp; Liste des utilisateurs</a></li>
                <li ";
        // line 59
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == "Filieres")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeFilieres");
        echo "\"><span class=\"glyphicon glyphicon-folder-close\"></span>&nbsp; Liste des filière</a></li>       
           
        </ul>
       
        <ul class=\"nav navbar-nav navbar-right\">
         
                       ";
        // line 65
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
                     <li ";
            // line 66
            if (((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) >= 30) && (($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) < 40))) {
                echo " class=\"active\"   ";
            }
            echo " >
                    <a  href=\" ";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" >  <span class=\"glyphicon glyphicon-user\"></span>  
                     ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_round(($context["somme"] ?? $this->getContext($context, "somme"))), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nombreHeurTheo", array()), "html", null, true);
            echo ")   </a></li>                  
                           
                        <li><a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        <span class=\"glyphicon glyphicon-log-out\"></span>
                      ";
        } else {
            // line 74
            echo "                      
                      <li><a href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                            ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        <span class=\"glyphicon glyphicon-log-in\"></span>  
                     ";
        }
        // line 79
        echo "                    </a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




";
        // line 88
        if (((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) >= 30) && (($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) < 40))) {
            // line 89
            echo "<div class=\"row\">
        <div class=\"btn-group btn-group-justified\">

            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "'\" >
                <button  type=\"button\"  ";
            // line 93
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 34)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo " >
                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                    <p >  Mon Profile</p>
                </button>
            </div>

            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "'\">
                <button type=\"button\" ";
            // line 100
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 33)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>
                    <p>Mot De Passe</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 105
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Matiere");
            echo "'\">
                <button type=\"button\" ";
            // line 106
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 32)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-time\"></span>
                    <p>G&eacute;rer Matières</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_responsable");
            echo "'\">
                <button type=\"button\" ";
            // line 112
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 31)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-star\"></span>
                    <p>Résérvation</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_matieres_responsable");
            echo "'\">
                <button type=\"button\" ";
            // line 118
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 30)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-refresh\"></span>
                    <p>Etat Matières</p>
                </button>
            </div>
        </div>
    </div>
 ";
        }
        // line 125
        echo " 
</div>      
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">

</script>
";
        
        $__internal_3ef596681eb3fcc38b99716a333e93798dc07f5db56c7f6a77a32ff6a981ecd6->leave($__internal_3ef596681eb3fcc38b99716a333e93798dc07f5db56c7f6a77a32ff6a981ecd6_prof);

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
        return array (  282 => 127,  278 => 125,  263 => 118,  259 => 117,  247 => 112,  243 => 111,  231 => 106,  227 => 105,  215 => 100,  211 => 99,  198 => 93,  194 => 92,  189 => 89,  187 => 88,  176 => 79,  170 => 76,  166 => 75,  163 => 74,  157 => 71,  153 => 70,  142 => 68,  138 => 67,  132 => 66,  128 => 65,  115 => 59,  107 => 58,  99 => 57,  86 => 49,  73 => 38,  70 => 36,  67 => 34,  65 => 33,  39 => 10,  34 => 8,  30 => 7,  22 => 1,);
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
    <body>

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
           <li  {% if etat == 'Accueil' %} class=\"active\"   {% endif %}><a href=\"{{ path('home')}}\"><span class=\"glyphicon glyphicon-home\"></span>&nbsp;  Accueil</a></li>
                <li {% if etat == 'users' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeUsers')}}\"> <span class=\"glyphicon glyphicon-list\"></span> &nbsp; Liste des utilisateurs</a></li>
                <li {% if etat == 'Filieres' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeFilieres')}}\"><span class=\"glyphicon glyphicon-folder-close\"></span>&nbsp; Liste des filière</a></li>       
           
        </ul>
       
        <ul class=\"nav navbar-nav navbar-right\">
         
                       {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %} 
                     <li {% if etatConnect >= 30 and  etatConnect < 40   %} class=\"active\"   {% endif %} >
                    <a  href=\" {{path('fos_user_profile_edit')}}\" >  <span class=\"glyphicon glyphicon-user\"></span>  
                     {{ app.user.nom }} {{ app.user.prenom }} ({{ somme|round }}/{{ app.user.nombreHeurTheo }})   </a></li>                  
                           
                        <li><a href=\"{{ path('fos_user_security_logout') }}\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        <span class=\"glyphicon glyphicon-log-out\"></span>
                      {% else %}
                      
                      <li><a href=\"{{ path('fos_user_security_login') }}\">
                            {{ 'layout.login'|trans({}, 'FOSUserBundle') }}
                        <span class=\"glyphicon glyphicon-log-in\"></span>  
                     {% endif %}
                    </a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




{% if etatConnect >= 30 and  etatConnect < 40   %}
<div class=\"row\">
        <div class=\"btn-group btn-group-justified\">

            <div class=\"btn-group\" onclick=\"self.location.href='{{path('fos_user_profile_edit')}}'\" >
                <button  type=\"button\"  {% if etatConnect == 34   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %} >
                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                    <p >  Mon Profile</p>
                </button>
            </div>

            <div class=\"btn-group\" onclick=\"self.location.href='{{path('fos_user_change_password')}}'\">
                <button type=\"button\" {% if etatConnect == 33  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>
                    <p>Mot De Passe</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='{{ path('list_form_Matiere')}}'\">
                <button type=\"button\" {% if etatConnect == 32  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-time\"></span>
                    <p>G&eacute;rer Matières</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='{{path('ChoixFiliereEns_responsable')}}'\">
                <button type=\"button\" {% if etatConnect == 31  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-star\"></span>
                    <p>Résérvation</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='{{path('Etat_matieres_responsable')}}'\">
                <button type=\"button\" {% if etatConnect == 30   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-refresh\"></span>
                    <p>Etat Matières</p>
                </button>
            </div>
        </div>
    </div>
 {% endif %} 
</div>      
<script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\">

</script>
", "SRVDVServerBundle:responsable:MenuResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MenuResponsable.html.twig");
    }
}
