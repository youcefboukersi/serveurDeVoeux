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
        $__internal_cf33c72f2be3d4d884d08717b0c3b482380a2181c3912740640e6d5e7c448b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf33c72f2be3d4d884d08717b0c3b482380a2181c3912740640e6d5e7c448b41->enter($__internal_cf33c72f2be3d4d884d08717b0c3b482380a2181c3912740640e6d5e7c448b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:MenuEnseignant.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI - Enseignant</title>
\t<link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/assets/css/home.css\"/>
\t<link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/bootstrap/css/bootstrap.min.css\"/>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Notification.js\"></script>


<link rel=stylesheet type=\"text/css\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"/>
<link rel=stylesheet type=\"text/css\" href=\"https://cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css\"/>
<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
\t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
\t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js\"></script>

\t\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/isResp.js\"></script>;
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Resp.js\"></script>;
\t
\t<style>
\t
\t\t.centreVerticalement {
\t\tdisplay: inline-block;
\t\tvertical-align: top;
\t\tfloat: none;
\t\t}


</style>
\t
</head>
<body>



<header>
<div id=\"logo\">

\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/home/\"><img alt=\"svedi\" src=\"http://localhost:8181/serveurdevoeux/web/assets/images/SVEDI-small.png\"/></a>

\t
</div>
<div id=\"searchBar\">
\t\t<form id=\"newsearch\" method=\"get\" action=\"../controleurRecherche/\">
\t\t        <input type=\"text\" value=\"\" class=\"textinput\" name=\"search\" size=\"35\" maxlength=\"120\"><input id=\"btnLoupe\" type=\"submit\" value=\"\" class=\"buttonSearch\">
\t\t        <img id=\"loupeSearchBar\" alt=\"loupe\" src=\"http://localhost:8181/serveurdevoeux/web/assets/images/loupe.png\"/>
\t\t</form>

</div>

<p id=\"deconnexion\">
        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                    ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </a>
\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/enseignant/inscription\">Enseignant </a>
\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/responsable/inscription\">Responsable</a>
\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\">Admin</a>
</p>

</header>





";
        
        $__internal_cf33c72f2be3d4d884d08717b0c3b482380a2181c3912740640e6d5e7c448b41->leave($__internal_cf33c72f2be3d4d884d08717b0c3b482380a2181c3912740640e6d5e7c448b41_prof);

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
        return array (  82 => 56,  78 => 55,  22 => 1,);
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
\t<title>SVEDI - Enseignant</title>
\t<link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/assets/css/home.css\"/>
\t<link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/bootstrap/css/bootstrap.min.css\"/>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Notification.js\"></script>


<link rel=stylesheet type=\"text/css\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"/>
<link rel=stylesheet type=\"text/css\" href=\"https://cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css\"/>
<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
\t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
\t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js\"></script>

\t\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/isResp.js\"></script>;
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Resp.js\"></script>;
\t
\t<style>
\t
\t\t.centreVerticalement {
\t\tdisplay: inline-block;
\t\tvertical-align: top;
\t\tfloat: none;
\t\t}


</style>
\t
</head>
<body>



<header>
<div id=\"logo\">

\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/home/\"><img alt=\"svedi\" src=\"http://localhost:8181/serveurdevoeux/web/assets/images/SVEDI-small.png\"/></a>

\t
</div>
<div id=\"searchBar\">
\t\t<form id=\"newsearch\" method=\"get\" action=\"../controleurRecherche/\">
\t\t        <input type=\"text\" value=\"\" class=\"textinput\" name=\"search\" size=\"35\" maxlength=\"120\"><input id=\"btnLoupe\" type=\"submit\" value=\"\" class=\"buttonSearch\">
\t\t        <img id=\"loupeSearchBar\" alt=\"loupe\" src=\"http://localhost:8181/serveurdevoeux/web/assets/images/loupe.png\"/>
\t\t</form>

</div>

<p id=\"deconnexion\">
        <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/enseignant/inscription\">Enseignant </a>
\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/responsable/inscription\">Responsable</a>
\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\">Admin</a>
</p>

</header>





", "SRVDVServerBundle:enseignant:MenuEnseignant.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/MenuEnseignant.html.twig");
    }
}
