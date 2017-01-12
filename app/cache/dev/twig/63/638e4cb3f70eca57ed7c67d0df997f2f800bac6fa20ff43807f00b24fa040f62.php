<?php

/* SRVDVServerBundle:responsable:indexResponsable.html.twig */
class __TwigTemplate_ce9aa711d2eebb5e6517f33ded8e5b9d5048b6440be316e310e1ad138010c0a1 extends Twig_Template
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
        $__internal_4c8cf6a8b512fc82e8890af65847a491ae0ef3b50fedad51ec0fe22ac6e771d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8cf6a8b512fc82e8890af65847a491ae0ef3b50fedad51ec0fe22ac6e771d9->enter($__internal_4c8cf6a8b512fc82e8890af65847a491ae0ef3b50fedad51ec0fe22ac6e771d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:indexResponsable.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI - Responsable</title>
\t<link rel=stylesheet type=\"text/css\" href=\"../../assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/search.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/VerifFormulaire.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/Desinscription.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/Notification.js\"></script>


<?php 
\tif(@\$resp == \"Y\"){
\t\techo '<script type=\"text/javascript\" src=\"../../assets/javascript/isResp.js\"></script>';
\t\techo '<script type=\"text/javascript\" src=\"../../assets/javascript/Resp.js\"></script>';
\t}else{
\t\techo '<script type=\"text/javascript\" src=\"../../assets/javascript/popUp.js\"></script>';
\t}

?>

\t<style>
\t<?php 
\t\$role = \$this->session->userdata('Role');

if(\$role > 1){
\t?>
\t\t#listNotifs{
\t\t\tz-index:30;
\t\t\toverflow:auto;
\t\t\theight: calc(100% - 204px);
\t\t}
\t<?php
}else{
\t?>
\t\t#listNotifs{
\t\t\tz-index:30;
\t\t\toverflow:auto;
\t\t\theight: calc(100% - 163px);
\t\t}

<?php
}
?></style>
\t
</head>
<body>

<header>
<div id=\"logo\">
\t<a href=\"../controleurHome/\"><img alt=\"svedi\" src=\"../../assets/images/SVEDI-small.png\"/></a>
</div>
<div id=\"searchBar\">
\t\t<form id=\"newsearch\" method=\"get\" action=\"../controleurRecherche/\">
\t\t        <input type=\"text\" value=\"\" class=\"textinput\" name=\"search\" size=\"35\" maxlength=\"120\"><input id=\"btnLoupe\" type=\"submit\" value=\"\" class=\"buttonSearch\">
\t\t        <img id=\"loupeSearchBar\" alt=\"loupe\" src=\"../../assets/images/loupe.png\"/>
\t\t</form>

</div>


<p id=\"deconnexion\">
\t<a href=\"../enseignant/\">Enseignant </a>
\t<a href=\"../responsable/\">Responsable</a>
\t<a href=\"../admin/\">Admin</a>
</p>
</header>

<div id=\"nav\">
\t


\t<div id=\"responsable\" class=\"ouvert\">
\t\t<h2>Responsable</h2>
\t\t<ul>
\t\t\t<li><a href=\"\">Etat g&eacute;n&eacute;ral</a></li>
\t\t
\t\t\t
\t\t\t<li><a href=\"\">Modifier ma fili&egrave;re</a></li>
\t\t\t<li><a href=\"\">Inscrire un enseignant &agrave; une mati&egrave;re</a></li>
\t\t\t<li><a href=\"\">D&eacute;sinscrire un enseignant &agrave; une mati&egrave;re</a></li>
\t\t\t
\t\t\t
\t\t</ul>
\t</div>



\t<div id=\"notifications\">
\t\t<h3>Notifications</h3>

\t</div>
<!-- listes des notifications --->



";
        
        $__internal_4c8cf6a8b512fc82e8890af65847a491ae0ef3b50fedad51ec0fe22ac6e771d9->leave($__internal_4c8cf6a8b512fc82e8890af65847a491ae0ef3b50fedad51ec0fe22ac6e771d9_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:indexResponsable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
\t<link rel=stylesheet type=\"text/css\" href=\"../../assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/search.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/VerifFormulaire.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/Desinscription.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/Notification.js\"></script>


<?php 
\tif(@\$resp == \"Y\"){
\t\techo '<script type=\"text/javascript\" src=\"../../assets/javascript/isResp.js\"></script>';
\t\techo '<script type=\"text/javascript\" src=\"../../assets/javascript/Resp.js\"></script>';
\t}else{
\t\techo '<script type=\"text/javascript\" src=\"../../assets/javascript/popUp.js\"></script>';
\t}

?>

\t<style>
\t<?php 
\t\$role = \$this->session->userdata('Role');

if(\$role > 1){
\t?>
\t\t#listNotifs{
\t\t\tz-index:30;
\t\t\toverflow:auto;
\t\t\theight: calc(100% - 204px);
\t\t}
\t<?php
}else{
\t?>
\t\t#listNotifs{
\t\t\tz-index:30;
\t\t\toverflow:auto;
\t\t\theight: calc(100% - 163px);
\t\t}

<?php
}
?></style>
\t
</head>
<body>

<header>
<div id=\"logo\">
\t<a href=\"../controleurHome/\"><img alt=\"svedi\" src=\"../../assets/images/SVEDI-small.png\"/></a>
</div>
<div id=\"searchBar\">
\t\t<form id=\"newsearch\" method=\"get\" action=\"../controleurRecherche/\">
\t\t        <input type=\"text\" value=\"\" class=\"textinput\" name=\"search\" size=\"35\" maxlength=\"120\"><input id=\"btnLoupe\" type=\"submit\" value=\"\" class=\"buttonSearch\">
\t\t        <img id=\"loupeSearchBar\" alt=\"loupe\" src=\"../../assets/images/loupe.png\"/>
\t\t</form>

</div>


<p id=\"deconnexion\">
\t<a href=\"../enseignant/\">Enseignant </a>
\t<a href=\"../responsable/\">Responsable</a>
\t<a href=\"../admin/\">Admin</a>
</p>
</header>

<div id=\"nav\">
\t


\t<div id=\"responsable\" class=\"ouvert\">
\t\t<h2>Responsable</h2>
\t\t<ul>
\t\t\t<li><a href=\"\">Etat g&eacute;n&eacute;ral</a></li>
\t\t
\t\t\t
\t\t\t<li><a href=\"\">Modifier ma fili&egrave;re</a></li>
\t\t\t<li><a href=\"\">Inscrire un enseignant &agrave; une mati&egrave;re</a></li>
\t\t\t<li><a href=\"\">D&eacute;sinscrire un enseignant &agrave; une mati&egrave;re</a></li>
\t\t\t
\t\t\t
\t\t</ul>
\t</div>



\t<div id=\"notifications\">
\t\t<h3>Notifications</h3>

\t</div>
<!-- listes des notifications --->



", "SRVDVServerBundle:responsable:indexResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/indexResponsable.html.twig");
    }
}
