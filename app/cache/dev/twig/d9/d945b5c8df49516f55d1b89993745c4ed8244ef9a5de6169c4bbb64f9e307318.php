<?php

/* SRVDVServerBundle:admin:MenuAdmin.html.twig */
class __TwigTemplate_e93a1e3c92dcf110fecb0efb9d6a7552ffe9000a20a92960d41d30c1cc581626 extends Twig_Template
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
        $__internal_af467b3d6c6bad646112dfb1c35a9c7cc57a83fa95e7623cb1cbf89529ecb18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af467b3d6c6bad646112dfb1c35a9c7cc57a83fa95e7623cb1cbf89529ecb18e->enter($__internal_af467b3d6c6bad646112dfb1c35a9c7cc57a83fa95e7623cb1cbf89529ecb18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:MenuAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SRV-Voeux</title>
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\"/>
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Notification.js\"></script>


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
        // line 35
        if (array_key_exists("etatConnect", $context)) {
            // line 36
            $context["etat"] = ($context["etatConnect"] ?? $this->getContext($context, "etatConnect"));
        } else {
            // line 38
            $context["etat"] = "connect";
        }
        // line 40
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a  href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"> <img alt=\"serveur_voeux\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/SVEDI-small.png"), "html", null, true);
        echo "\" /></a>
        </div>
        &nbsp;
        <div class=\"container\" style=\"font-size:17px\">
            <ul class=\"nav navbar-nav\" >
                <li  ";
        // line 48
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == "Accueil")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span>&nbsp;  Accueil</a></li>
                <li ";
        // line 49
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == "users")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeUsers");
        echo "\"> <span class=\"glyphicon glyphicon-list\"></span> &nbsp; Liste des utilisateurs</a></li>
                <li ";
        // line 50
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == "Filieres")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeFilieres");
        echo "\"><span class=\"glyphicon glyphicon-folder-close\"></span>&nbsp; Liste des filière</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\" >
                
                    
                     ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIG")) {
            echo "  
                       <li ";
            // line 56
            if ((($context["etat"] ?? $this->getContext($context, "etat")) == "connect")) {
                echo " class=\"active\"   ";
            }
            echo " ><a  href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" ><span class=\"glyphicon glyphicon-user\"></span>   ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "  (ENS)  </a></li>
                     ";
        }
        // line 58
        echo "                                 

                    ";
        // line 60
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            echo "  
                       <li ";
            // line 61
            if ((($context["etat"] ?? $this->getContext($context, "etat")) == "connect")) {
                echo " class=\"active\"   ";
            }
            echo " >
                    <a  href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" > <span class=\"glyphicon glyphicon-user\"></span>   
                     ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " (Admin) </a></li>
                        
                    ";
        }
        // line 66
        echo "                                       
                         
                    ";
        // line 68
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESP")) {
            echo "  
                       <li ";
            // line 69
            if ((($context["etat"] ?? $this->getContext($context, "etat")) == "connect")) {
                echo " class=\"active\"   ";
            }
            echo " >
                    <a  href=\" ";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" >  <span class=\"glyphicon glyphicon-user\"></span>  
                     ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " (RESP)   </a></li>                  
                          
                    ";
        }
        // line 74
        echo "                    
                    
                    ";
        // line 76
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "  
                        <li><a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        <span class=\"glyphicon glyphicon-log-out\"></span>
                      ";
        } else {
            // line 81
            echo "                      
                      <li><a href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                            ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        <span class=\"glyphicon glyphicon-log-in\"></span>  
                     ";
        }
        // line 86
        echo "                    </a></li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_af467b3d6c6bad646112dfb1c35a9c7cc57a83fa95e7623cb1cbf89529ecb18e->leave($__internal_af467b3d6c6bad646112dfb1c35a9c7cc57a83fa95e7623cb1cbf89529ecb18e_prof);

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
        return array (  215 => 86,  209 => 83,  205 => 82,  202 => 81,  196 => 78,  192 => 77,  188 => 76,  184 => 74,  176 => 71,  172 => 70,  166 => 69,  162 => 68,  158 => 66,  150 => 63,  146 => 62,  140 => 61,  136 => 60,  132 => 58,  119 => 56,  115 => 55,  103 => 50,  95 => 49,  87 => 48,  77 => 43,  72 => 40,  69 => 38,  66 => 36,  64 => 35,  32 => 6,  28 => 5,  22 => 1,);
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
        <title>SRV-Voeux</title>
        <link rel=stylesheet type=\"text/css\" href=\"{{ asset('assets/css/home.css') }}\"/>
        <link rel=stylesheet type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\"/>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Notification.js\"></script>


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
{% set etat= etatConnect %}
{% else %}
{% set etat= 'connect' %}
{% endif %}
<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a  href=\"{{ path('home')}}\"> <img alt=\"serveur_voeux\" src=\"{{ asset ('assets/images/SVEDI-small.png') }}\" /></a>
        </div>
        &nbsp;
        <div class=\"container\" style=\"font-size:17px\">
            <ul class=\"nav navbar-nav\" >
                <li  {% if etat == 'Accueil' %} class=\"active\"   {% endif %}><a href=\"{{ path('home')}}\"><span class=\"glyphicon glyphicon-home\"></span>&nbsp;  Accueil</a></li>
                <li {% if etat == 'users' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeUsers')}}\"> <span class=\"glyphicon glyphicon-list\"></span> &nbsp; Liste des utilisateurs</a></li>
                <li {% if etat == 'Filieres' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeFilieres')}}\"><span class=\"glyphicon glyphicon-folder-close\"></span>&nbsp; Liste des filière</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\" >
                
                    
                     {% if is_granted(\"ROLE_ENSEIG\") %}  
                       <li {% if etat == 'connect' %} class=\"active\"   {% endif %} ><a  href=\" {{path('fos_user_profile_edit')}}\" ><span class=\"glyphicon glyphicon-user\"></span>   {{ app.user.nom }} {{ app.user.prenom }}  (ENS)  </a></li>
                     {% endif %}
                                 

                    {% if is_granted(\"ROLE_ADMIN\") %}  
                       <li {% if etat == 'connect' %} class=\"active\"   {% endif %} >
                    <a  href=\"{{path('fos_user_profile_edit')}}\" > <span class=\"glyphicon glyphicon-user\"></span>   
                     {{ app.user.nom }} {{ app.user.prenom }} (Admin) </a></li>
                        
                    {% endif %}
                                       
                         
                    {% if is_granted(\"ROLE_RESP\") %}  
                       <li {% if etat == 'connect' %} class=\"active\"   {% endif %} >
                    <a  href=\" {{path('fos_user_profile_edit')}}\" >  <span class=\"glyphicon glyphicon-user\"></span>  
                     {{ app.user.nom }} {{ app.user.prenom }} (RESP)   </a></li>                  
                          
                    {% endif %}
                    
                    
                    {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}  
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
        </div>
    </div>
</nav>", "SRVDVServerBundle:admin:MenuAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/MenuAdmin.html.twig");
    }
}
