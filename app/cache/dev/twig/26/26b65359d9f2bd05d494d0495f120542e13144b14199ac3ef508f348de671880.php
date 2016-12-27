<?php

/* SRVDVServerBundle:home:Menu.html.twig */
class __TwigTemplate_51057b58ff875b4de1393beb0826b9f72f9762981ef341d7afe3cdf02403fbc4 extends Twig_Template
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
        $__internal_d19ab29c23f4d45fc2588a5ec27d14e166b0df73a7daae8924e08230abf006d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19ab29c23f4d45fc2588a5ec27d14e166b0df73a7daae8924e08230abf006d8->enter($__internal_d19ab29c23f4d45fc2588a5ec27d14e166b0df73a7daae8924e08230abf006d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:Menu.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI - Accueil</title>
\t<link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/assets/css/home.css\"/>
\t<link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/bootstrap/css/bootstrap.min.css\"/>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
\"fnRowCallback\": function( nRow, aData ) {

var id = aData.myID; // ID is returned by the server as part of the data

var \$nRow = \$(nRow); // cache the row wrapped up in jQuery

if (id == \"1\") { 

\$nRow.css({\"background-color\":\"red\"})

}

else if (id == \"2\") {

\$nRow.css({\"background-color\":\"blue\"}) 

}

return nRow

}\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
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
\t\t

</div>

<p id=\"deconnexion\">
\t<a>
             ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "!! <!-- pour se connecter -->
        </a>
\t
</p>

</header>





";
        
        $__internal_d19ab29c23f4d45fc2588a5ec27d14e166b0df73a7daae8924e08230abf006d8->leave($__internal_d19ab29c23f4d45fc2588a5ec27d14e166b0df73a7daae8924e08230abf006d8_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:home:Menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 70,  22 => 1,);
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
\t<title>SVEDI - Accueil</title>
\t<link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/assets/css/home.css\"/>
\t<link rel=stylesheet type=\"text/css\" href=\"http://localhost:8181/serveurdevoeux/web/bootstrap/css/bootstrap.min.css\"/>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
\"fnRowCallback\": function( nRow, aData ) {

var id = aData.myID; // ID is returned by the server as part of the data

var \$nRow = \$(nRow); // cache the row wrapped up in jQuery

if (id == \"1\") { 

\$nRow.css({\"background-color\":\"red\"})

}

else if (id == \"2\") {

\$nRow.css({\"background-color\":\"blue\"}) 

}

return nRow

}\t<script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
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
\t\t

</div>

<p id=\"deconnexion\">
\t<a>
             {{ 'layout.login'|trans({}, 'FOSUserBundle') }}!! <!-- pour se connecter -->
        </a>
\t
</p>

</header>





", "SRVDVServerBundle:home:Menu.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/home/Menu.html.twig");
    }
}
