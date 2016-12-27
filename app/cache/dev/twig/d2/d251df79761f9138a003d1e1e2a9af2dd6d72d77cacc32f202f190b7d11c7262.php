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
        $__internal_2f1b49271037044329cc4c11d43cb4adfb00b897dff3f97b8e5c69367aed892a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1b49271037044329cc4c11d43cb4adfb00b897dff3f97b8e5c69367aed892a->enter($__internal_2f1b49271037044329cc4c11d43cb4adfb00b897dff3f97b8e5c69367aed892a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:MenuResponsable.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI - Responsable</title>
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

</div>
<div id=\"searchBar\">
\t\t<form id=\"newsearch\" method=\"get\" action=\"../controleurRecherche/\">
\t\t        <input type=\"text\" value=\"\" class=\"textinput\" name=\"search\" size=\"35\" maxlength=\"120\"><input id=\"btnLoupe\" type=\"submit\" value=\"\" class=\"buttonSearch\">
\t\t        <img id=\"loupeSearchBar\" alt=\"loupe\" src=\"http://localhost:8181/serveurdevoeux/web/assets/images/loupe.png\"/>
\t\t</form>

</div>

<p id=\"deconnexion\">
        <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </a>
\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/enseignant/inscription\">Enseignant </a>
\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/responsable/inscription\">Responsable</a>
\t<a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\">Admin</a>
</p>

</header>





";
        
        $__internal_2f1b49271037044329cc4c11d43cb4adfb00b897dff3f97b8e5c69367aed892a->leave($__internal_2f1b49271037044329cc4c11d43cb4adfb00b897dff3f97b8e5c69367aed892a_prof);

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
        return array (  81 => 55,  77 => 54,  22 => 1,);
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
\t<title>SVEDI - Responsable</title>
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





", "SRVDVServerBundle:responsable:MenuResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MenuResponsable.html.twig");
    }
}
