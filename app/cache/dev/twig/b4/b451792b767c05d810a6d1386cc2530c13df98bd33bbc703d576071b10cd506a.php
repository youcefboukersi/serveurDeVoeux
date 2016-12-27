<?php

/* @SRVDVServer/Connexion/VueConnexion.html.twig */
class __TwigTemplate_ae3c1a38f7681f0dccdde698fc121fcf3c4ba8b0cd9a466ccb2e32fb1e804dbd extends Twig_Template
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
        $__internal_94ad8f581d11fb7c552f402e7d1846f8a6d5e2fcc41c482b16b4c4a94f894659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ad8f581d11fb7c552f402e7d1846f8a6d5e2fcc41c482b16b4c4a94f894659->enter($__internal_94ad8f581d11fb7c552f402e7d1846f8a6d5e2fcc41c482b16b4c4a94f894659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Connexion/VueConnexion.html.twig"));

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
        
        $__internal_94ad8f581d11fb7c552f402e7d1846f8a6d5e2fcc41c482b16b4c4a94f894659->leave($__internal_94ad8f581d11fb7c552f402e7d1846f8a6d5e2fcc41c482b16b4c4a94f894659_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Connexion/VueConnexion.html.twig";
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

", "@SRVDVServer/Connexion/VueConnexion.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Connexion\\VueConnexion.html.twig");
    }
}
