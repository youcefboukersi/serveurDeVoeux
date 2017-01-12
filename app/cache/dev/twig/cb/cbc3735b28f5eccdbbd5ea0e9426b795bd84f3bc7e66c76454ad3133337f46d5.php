<?php

/* SRVDVServerBundle:admin:MenuAdmin.html.twig */
class __TwigTemplate_1f9beaa20f9f696d2679c0efe9d7c6702ebc59734f5726de6e4573dbbd91c17d extends Twig_Template
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
        $__internal_ef0412a9543f15595e7ebaf7cd8cb4af7e5bcf2448e1dc68b8a2e080cc99a8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0412a9543f15595e7ebaf7cd8cb4af7e5bcf2448e1dc68b8a2e080cc99a8da->enter($__internal_ef0412a9543f15595e7ebaf7cd8cb4af7e5bcf2448e1dc68b8a2e080cc99a8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:MenuAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SRV-Voeux-Admin</title>
       
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 6
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
            li.active{
                background-color:orange;
            }
            

        </style>

    </head>
    <body>


";
        // line 37
        if (array_key_exists("etatConnect", $context)) {
            // line 38
            $context["etat"] = ($context["etatConnect"] ?? $this->getContext($context, "etatConnect"));
        } else {
            // line 40
            $context["etat"] = "connect";
        }
        // line 42
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
        // line 54
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
        // line 62
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == "Accueil")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span>&nbsp;  Accueil</a></li>
                <li ";
        // line 63
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == "users")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeUsers");
        echo "\"> <span class=\"glyphicon glyphicon-list\"></span> &nbsp; Liste des utilisateurs</a></li>
                <li ";
        // line 64
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == "Filieres")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeFilieres");
        echo "\"><span class=\"glyphicon glyphicon-folder-close\"></span>&nbsp; Liste des filière</a></li>       
           
        </ul>
       
        <ul class=\"nav navbar-nav navbar-right\">
         
                    ";
        // line 70
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " 
                      <li ";
            // line 71
            if (((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) >= 40) && (($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) < 60))) {
                echo " class=\"active\"   ";
            }
            echo " >
                    <a  href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" > <span class=\"glyphicon glyphicon-user\"></span> 
                     ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "  (";
            echo twig_escape_filter($this->env, twig_round(($context["somme"] ?? $this->getContext($context, "somme"))), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nombreHeurTheo", array()), "html", null, true);
            echo ") </a></li> 
                        <li><a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        <span class=\"glyphicon glyphicon-log-out\"></span>
                      ";
        } else {
            // line 78
            echo "
                      

                      <li><a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                            ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        <span class=\"glyphicon glyphicon-log-in\"></span>  
                     ";
        }
        // line 85
        echo "                    </a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


";
        // line 92
        if (((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) >= 40) && (($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) < 60))) {
            // line 93
            echo "<div class=\"row\">
        <div class=\"btn-group btn-group-justified\">

            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "'\" >
                <button  type=\"button\"  ";
            // line 97
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 47)) {
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
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "'\">
                <button type=\"button\" ";
            // line 104
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 46)) {
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
            // line 109
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Annee");
            echo "'\">
                <button type=\"button\" ";
            // line 110
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 45)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-time\"></span>
                    <p>G&eacute;rer Années</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Type");
            echo "'\">
                <button type=\"button\" ";
            // line 116
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 44)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-star\"></span>
                    <p>G&eacute;rer Statut</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "'\">
                <button type=\"button\" ";
            // line 122
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 43)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-refresh\"></span>
                    <p>G&eacute;rer Users</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_filiere");
            echo "'\">
                <button type=\"button\" ";
            // line 128
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 42)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                    <p>G&eacute;rer Fili&egrave;re</p>
                </button>
            </div>
             <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_typeens");
            echo "'\">
                <button type=\"button\" ";
            // line 134
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 41)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>
                    <p>Type Enseignement</p>
                </button>
            </div>
             <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annee_suivante");
            echo "'\">
                <button type=\"button\" ";
            // line 140
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 40)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>
                    <p>Basculer</p>
                </button>
            </div>
             <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_typeens");
            echo "'\">
                <button type=\"button\" ";
            // line 146
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 41)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>
                    <p>Liste Matieres</p>
                </button>
            </div>
             <div class=\"btn-group\" onclick=\"self.location.href='";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annee_suivante");
            echo "'\">
                <button type=\"button\" ";
            // line 152
            if ((($context["etatConnect"] ?? $this->getContext($context, "etatConnect")) == 40)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">
                    <span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>
                    <p>Réservation</p>
                </button>
            </div>
        </div>
    </div>
 ";
        }
        // line 159
        echo " 


</div>  




    
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">

</script>";
        
        $__internal_ef0412a9543f15595e7ebaf7cd8cb4af7e5bcf2448e1dc68b8a2e080cc99a8da->leave($__internal_ef0412a9543f15595e7ebaf7cd8cb4af7e5bcf2448e1dc68b8a2e080cc99a8da_prof);

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
        return array (  373 => 168,  362 => 159,  347 => 152,  343 => 151,  331 => 146,  327 => 145,  315 => 140,  311 => 139,  299 => 134,  295 => 133,  283 => 128,  279 => 127,  267 => 122,  263 => 121,  251 => 116,  247 => 115,  235 => 110,  231 => 109,  219 => 104,  215 => 103,  202 => 97,  198 => 96,  193 => 93,  191 => 92,  182 => 85,  176 => 82,  172 => 81,  167 => 78,  161 => 75,  157 => 74,  147 => 73,  143 => 72,  137 => 71,  133 => 70,  120 => 64,  112 => 63,  104 => 62,  91 => 54,  77 => 42,  74 => 40,  71 => 38,  69 => 37,  39 => 10,  34 => 8,  29 => 6,  22 => 1,);
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
    <body>


{% if etatConnect is defined %}
{% set etat = etatConnect %}
{% else %}
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
                      <li {% if etatConnect >= 40 and  etatConnect < 60   %} class=\"active\"   {% endif %} >
                    <a  href=\"{{path('fos_user_profile_edit')}}\" > <span class=\"glyphicon glyphicon-user\"></span> 
                     {{ app.user.nom }} {{ app.user.prenom }}  ({{ somme|round }}/{{ app.user.nombreHeurTheo }}) </a></li> 
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


{% if etatConnect >= 40 and  etatConnect < 60   %}
<div class=\"row\">
        <div class=\"btn-group btn-group-justified\">

            <div class=\"btn-group\" onclick=\"self.location.href='{{path('fos_user_profile_edit')}}'\" >
                <button  type=\"button\"  {% if etatConnect == 47   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %} >
                    <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                    <p >  Mon Profile</p>
                </button>
            </div>

            <div class=\"btn-group\" onclick=\"self.location.href='{{path('fos_user_change_password')}}'\">
                <button type=\"button\" {% if etatConnect == 46  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>
                    <p>Mot De Passe</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='{{path('list_form_Annee')}}'\">
                <button type=\"button\" {% if etatConnect == 45  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-time\"></span>
                    <p>G&eacute;rer Années</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='{{path('list_form_Type')}}'\">
                <button type=\"button\" {% if etatConnect == 44  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-star\"></span>
                    <p>G&eacute;rer Statut</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='{{path('fos_user_registration_register')}}'\">
                <button type=\"button\" {% if etatConnect == 43   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-refresh\"></span>
                    <p>G&eacute;rer Users</p>
                </button>
            </div>
            <div class=\"btn-group\" onclick=\"self.location.href='{{path('list_form_filiere')}}'\">
                <button type=\"button\" {% if etatConnect == 42   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                    <p>G&eacute;rer Fili&egrave;re</p>
                </button>
            </div>
             <div class=\"btn-group\" onclick=\"self.location.href='{{path('list_form_typeens')}}'\">
                <button type=\"button\" {% if etatConnect == 41   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>
                    <p>Type Enseignement</p>
                </button>
            </div>
             <div class=\"btn-group\" onclick=\"self.location.href='{{path('annee_suivante')}}'\">
                <button type=\"button\" {% if etatConnect == 40  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>
                    <p>Basculer</p>
                </button>
            </div>
             <div class=\"btn-group\" onclick=\"self.location.href='{{path('list_form_typeens')}}'\">
                <button type=\"button\" {% if etatConnect == 41   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>
                    <p>Liste Matieres</p>
                </button>
            </div>
             <div class=\"btn-group\" onclick=\"self.location.href='{{path('annee_suivante')}}'\">
                <button type=\"button\" {% if etatConnect == 40  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>
                    <span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>
                    <p>Réservation</p>
                </button>
            </div>
        </div>
    </div>
 {% endif %} 


</div>  




    
<script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\">

</script>", "SRVDVServerBundle:admin:MenuAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/MenuAdmin.html.twig");
    }
}
