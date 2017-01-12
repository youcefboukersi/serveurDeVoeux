<?php

/* SRVDVServerBundle:enseignant:MenuEnseignant.html.twig */
class __TwigTemplate_795d5bfc8b2ac853412b757f6f254acd15bbeeeba2cfab7ee827850ed0ac1859 extends Twig_Template
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
        $__internal_ec81ae32ab0539c69881764e559b478bc69ad4d040e3864fd52d222e662004f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec81ae32ab0539c69881764e559b478bc69ad4d040e3864fd52d222e662004f9->enter($__internal_ec81ae32ab0539c69881764e559b478bc69ad4d040e3864fd52d222e662004f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:MenuEnseignant.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SRV-Voeux-Enseignant</title>
     
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
          <link rel=stylesheet type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\"/>

        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 9
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
        // line 32
        if (array_key_exists("etatConnect", $context)) {
            // line 33
            $context["etat"] = ($context["etatConnect"] ?? $this->getContext($context, "etatConnect"));
        } else {
            // line 35
            $context["etat"] = 999;
        }
        // line 37
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
                    <li  ";
            // line 66
            if (((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) >= 20) && (($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) < 30))) {
                echo " class=\"active\"  ";
            }
            echo " ><a  href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" ><span class=\"glyphicon glyphicon-user\"></span>   ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "  (";
            echo twig_escape_filter($this->env, twig_round(($context["somme"] ?? $this->getContext($context, "somme"))), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nombreHeurTheo", array()), "html", null, true);
            echo ")  </a></li>

                        <li><a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        <span class=\"glyphicon glyphicon-log-out\"></span>
                      ";
        } else {
            // line 72
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
        // line 85
        if (((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) >= 20) && (($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) < 30))) {
            // line 86
            echo "<div class=\"row\">
        <div class=\"btn-group btn-group-justified\">

            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "'\" >
                <button  type=\"button\"  ";
            // line 90
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 21)) {
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
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "'\">
                <button type=\"button\" ";
            // line 97
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 22)) {
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
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_enseignant");
            echo "'\">
                <button type=\"button\" ";
            // line 103
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 20)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-star\"></span>
                    <p>Résérvation</p>
                </button>
            </div>
        </div>
    </div>
 ";
        }
        // line 110
        echo " 
</div>      
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">

</script>

";
        
        $__internal_ec81ae32ab0539c69881764e559b478bc69ad4d040e3864fd52d222e662004f9->leave($__internal_ec81ae32ab0539c69881764e559b478bc69ad4d040e3864fd52d222e662004f9_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:enseignant:MenuEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 112,  241 => 110,  226 => 103,  222 => 102,  210 => 97,  206 => 96,  193 => 90,  189 => 89,  184 => 86,  182 => 85,  174 => 79,  168 => 76,  164 => 75,  159 => 72,  153 => 69,  149 => 68,  132 => 66,  128 => 65,  115 => 59,  107 => 58,  99 => 57,  86 => 49,  72 => 37,  69 => 35,  66 => 33,  64 => 32,  38 => 9,  33 => 7,  29 => 6,  22 => 1,);
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
        <title>SRV-Voeux-Enseignant</title>
     
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
                    <li  {% if etatConnect >= 20 and  etatConnect < 30   %} class=\"active\"  {% endif %} ><a  href=\" {{path('fos_user_profile_edit')}}\" ><span class=\"glyphicon glyphicon-user\"></span>   {{ app.user.nom }} {{ app.user.prenom }}  ({{ somme|round }}/{{ app.user.nombreHeurTheo }})  </a></li>

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

{% if etatConnect >= 20 and  etatConnect < 30   %}
<div class=\"row\">
        <div class=\"btn-group btn-group-justified\">

            <div class=\"btn-group\" onclick=\"self.location.href='{{path('fos_user_profile_edit')}}'\" >
                <button  type=\"button\"  {% if etatConnect == 21   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %} >
                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                    <p >  Mon Profile</p>
                </button>
            </div>

            <div class=\"btn-group\" onclick=\"self.location.href='{{path('fos_user_change_password')}}'\">
                <button type=\"button\" {% if etatConnect == 22  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>
                    <p>Mot De Passe</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='{{path('ChoixFiliereEns_enseignant')}}'\">
                <button type=\"button\" {% if etatConnect == 20  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-star\"></span>
                    <p>Résérvation</p>
                </button>
            </div>
        </div>
    </div>
 {% endif %} 
</div>      
<script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\">

</script>

", "SRVDVServerBundle:enseignant:MenuEnseignant.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/MenuEnseignant.html.twig");
    }
}
