<?php

/* SRVDVServerBundle:Connexion:VueConnexion.html.twig */
class __TwigTemplate_01b6820d6a428122eed6ef73030b2277de2413193b7def214162b2beaec873f3 extends Twig_Template
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
        $__internal_be599897e860a260c1ff9c746cd60064dcd5dfc559f077c91845c9729314c685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be599897e860a260c1ff9c746cd60064dcd5dfc559f077c91845c9729314c685->enter($__internal_be599897e860a260c1ff9c746cd60064dcd5dfc559f077c91845c9729314c685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Connexion:VueConnexion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI</title>
\t<link rel=stylesheet type=\"text/css\" href=\"/SVEDI/assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"/SVEDI/assets/javascript/jquery-2.1.1.min.js\"></script>
</head>
<body>
<div  id=\"svedi\">
<img src=\"/SVEDI/assets/images/svediMoyen.png\"/></div>
<div id=\"connexion\">
<img src=\"/SVEDI/assets/images/connexionTop.png\"/>
<div>
<p>Connectez-vous :</p> 
<form action=\"login\" method=\"POST\">
<input type=\"text\" name=\"login\" placeholder=\"Login\"/>
<input type=\"password\" name=\"password\" placeholder=\"Password\"/>
<input class=\"buttonSearch\" type=\"submit\" name=\"valider\" value=\"Connexion\"/>
</form>

<?php

echo \$test;
echo @\$error_credentials;

?>

<p><a>Mot de passe oubli&eacute; ?</a></p>
</div>
<img src=\"/SVEDI/assets/images/connexionBtm.png\"/></div>

<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>

";
        
        $__internal_be599897e860a260c1ff9c746cd60064dcd5dfc559f077c91845c9729314c685->leave($__internal_be599897e860a260c1ff9c746cd60064dcd5dfc559f077c91845c9729314c685_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Connexion:VueConnexion.html.twig";
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
\t<title>SVEDI</title>
\t<link rel=stylesheet type=\"text/css\" href=\"/SVEDI/assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"/SVEDI/assets/javascript/jquery-2.1.1.min.js\"></script>
</head>
<body>
<div  id=\"svedi\">
<img src=\"/SVEDI/assets/images/svediMoyen.png\"/></div>
<div id=\"connexion\">
<img src=\"/SVEDI/assets/images/connexionTop.png\"/>
<div>
<p>Connectez-vous :</p> 
<form action=\"login\" method=\"POST\">
<input type=\"text\" name=\"login\" placeholder=\"Login\"/>
<input type=\"password\" name=\"password\" placeholder=\"Password\"/>
<input class=\"buttonSearch\" type=\"submit\" name=\"valider\" value=\"Connexion\"/>
</form>

<?php

echo \$test;
echo @\$error_credentials;

?>

<p><a>Mot de passe oubli&eacute; ?</a></p>
</div>
<img src=\"/SVEDI/assets/images/connexionBtm.png\"/></div>

<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>

", "SRVDVServerBundle:Connexion:VueConnexion.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Connexion/VueConnexion.html.twig");
    }
}
