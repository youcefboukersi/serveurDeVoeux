<?php

/* @SRVDVServer/Default/index.html.twig */
class __TwigTemplate_232462d51ca1f281b80f87a5f6cfbeb1deb1155881d3381680519531e14cd2e2 extends Twig_Template
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
        $__internal_73da28425cdd8d3fac4c36c64452e0e2a7d525bfebb602d04ffc03db7c20bf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73da28425cdd8d3fac4c36c64452e0e2a7d525bfebb602d04ffc03db7c20bf49->enter($__internal_73da28425cdd8d3fac4c36c64452e0e2a7d525bfebb602d04ffc03db7c20bf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Default/index.html.twig"));

        // line 1
        echo "<html>
<html>
<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI</title>
\t<link rel=stylesheet type=\"text/css\" href=\"../../assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/connexion.js\"></script>
</head>

<body><div id=\"svedi\">

<img src=\"../../assets/images/svediMoyen.png\"/>
</div>
<div id=\"connexion\">
\t<img src=\"../../assets/images/connexionTop.png\"/>
\t\t<div>
\t\t\t<div id=\"connect\">
\t\t\t<p>Connectez-vous :</p> 
\t\t\t<form action=\"login\" method=\"POST\">
\t\t\t\t<input type=\"text\" name=\"login\" placeholder=\"Login\"/>
\t\t\t\t<input type=\"password\" name=\"password\" placeholder=\"Password\"/>
\t\t\t\t<input class=\"buttonSearch\" type=\"submit\" name=\"valider\" value=\"Connexion\"/>
\t\t\t</form>
\t\t\t<p ><a id=\"forgot\">Mot de passe oubli&eacute; ?</a></p>
\t\t\t<p class=\"full\"><?php echo @\$error_credentials; ?></p>
\t\t\t</div>
\t\t\t<div id=\"recup\"><br/>
\t\t\t\t<form action=\"recupMdp\" method=\"POST\">
\t\t\t\t<p>Veuillez saisir votre email,<br/>un mot de passe temporaire vous sera envoy&eacute;.</p><br/>
\t\t\t\t<input type=\"text\" id=\"mail\" name=\"mailRecup\" placeholder=\"Adresse email\"/>
\t\t\t\t<input class=\"button\" type=\"submit\" name=\"envoiMdp\" id=\"envoiMdp\" value=\"Envoyer\"/>
\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t<img src=\"../../assets/images/connexionBtm.png\"/>
</div>
</body>
</html>";
        
        $__internal_73da28425cdd8d3fac4c36c64452e0e2a7d525bfebb602d04ffc03db7c20bf49->leave($__internal_73da28425cdd8d3fac4c36c64452e0e2a7d525bfebb602d04ffc03db7c20bf49_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Default/index.html.twig";
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
        return new Twig_Source("<html>
<html>
<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI</title>
\t<link rel=stylesheet type=\"text/css\" href=\"../../assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/connexion.js\"></script>
</head>

<body><div id=\"svedi\">

<img src=\"../../assets/images/svediMoyen.png\"/>
</div>
<div id=\"connexion\">
\t<img src=\"../../assets/images/connexionTop.png\"/>
\t\t<div>
\t\t\t<div id=\"connect\">
\t\t\t<p>Connectez-vous :</p> 
\t\t\t<form action=\"login\" method=\"POST\">
\t\t\t\t<input type=\"text\" name=\"login\" placeholder=\"Login\"/>
\t\t\t\t<input type=\"password\" name=\"password\" placeholder=\"Password\"/>
\t\t\t\t<input class=\"buttonSearch\" type=\"submit\" name=\"valider\" value=\"Connexion\"/>
\t\t\t</form>
\t\t\t<p ><a id=\"forgot\">Mot de passe oubli&eacute; ?</a></p>
\t\t\t<p class=\"full\"><?php echo @\$error_credentials; ?></p>
\t\t\t</div>
\t\t\t<div id=\"recup\"><br/>
\t\t\t\t<form action=\"recupMdp\" method=\"POST\">
\t\t\t\t<p>Veuillez saisir votre email,<br/>un mot de passe temporaire vous sera envoy&eacute;.</p><br/>
\t\t\t\t<input type=\"text\" id=\"mail\" name=\"mailRecup\" placeholder=\"Adresse email\"/>
\t\t\t\t<input class=\"button\" type=\"submit\" name=\"envoiMdp\" id=\"envoiMdp\" value=\"Envoyer\"/>
\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t<img src=\"../../assets/images/connexionBtm.png\"/>
</div>
</body>
</html>", "@SRVDVServer/Default/index.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
