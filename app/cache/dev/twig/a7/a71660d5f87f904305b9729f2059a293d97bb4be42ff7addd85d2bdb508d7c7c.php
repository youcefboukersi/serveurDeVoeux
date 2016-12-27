<?php

/* FOSUserBundle::layout1.html.twig */
class __TwigTemplate_beea8a53e1815e8c4a911b85695cee27f900e11ddd9e60d1357585e5234c8cb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_988cddaa8cfcec5307b3232f369d83b32f0865289b2a1e271c0175a4c743bae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988cddaa8cfcec5307b3232f369d83b32f0865289b2a1e271c0175a4c743bae6->enter($__internal_988cddaa8cfcec5307b3232f369d83b32f0865289b2a1e271c0175a4c743bae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SVEDI</title>
        <link rel=stylesheet type=\"text/css\" href=\"../assets/css/home.css\"/>
        <script type=\"text/javascript\" src=\"../assets/javascript/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../assets/javascript/connexion.js\"></script>
    </head>
    
    <body>
        <h1>Test Lyout</h1>
        <div id=\"svedi\">
            <img src=\"../assets/images/svediMoyen.png\"/>
        </div>
    
        <div id=\"connexion\">
            <img src=\"../assets/images/connexionTop.png\"/>
            <div>
                <div id=\"connect\">
                    <p>Connectez-vous :</p> 
                    <div>
                        ";
        // line 22
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "                    </div>
            
                    <p ><a href=";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo ">Mot de passe oubli&eacute; ?</a></p>
                    <p class=\"full\"><?php echo @\$error_credentials; ?></p>
                </div>
                <!-->
                <div id=\"recup\"><br/>
                    <form action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <p>Veuillez saisir votre email,<br/>un mot de passe temporaire vous sera envoy&eacute;.</p><br/>
                        <input type=\"text\" id=\"mail\" name=\"mailRecup\" placeholder=\"Adresse email\"/>
                        <input class=\"button\" type=\"submit\" name=\"envoiMdp\" id=\"envoiMdp\" value=\"Envoyer\"/>
                    </form>
                </div>
                -->
            </div>
            <img src=\"../assets/images/connexionBtm.png\"/>
        </div>
    </body>
</html>";
        
        $__internal_988cddaa8cfcec5307b3232f369d83b32f0865289b2a1e271c0175a4c743bae6->leave($__internal_988cddaa8cfcec5307b3232f369d83b32f0865289b2a1e271c0175a4c743bae6_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a1ef6bf138b79b5766b783c90a9f0dfc1d46c68ed96fbb89ed0c8677482718d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1ef6bf138b79b5766b783c90a9f0dfc1d46c68ed96fbb89ed0c8677482718d->enter($__internal_5a1ef6bf138b79b5766b783c90a9f0dfc1d46c68ed96fbb89ed0c8677482718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "                        ";
        
        $__internal_5a1ef6bf138b79b5766b783c90a9f0dfc1d46c68ed96fbb89ed0c8677482718d->leave($__internal_5a1ef6bf138b79b5766b783c90a9f0dfc1d46c68ed96fbb89ed0c8677482718d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  79 => 22,  60 => 31,  52 => 26,  48 => 24,  46 => 22,  23 => 1,);
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
        <title>SVEDI</title>
        <link rel=stylesheet type=\"text/css\" href=\"../assets/css/home.css\"/>
        <script type=\"text/javascript\" src=\"../assets/javascript/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../assets/javascript/connexion.js\"></script>
    </head>
    
    <body>
        <h1>Test Lyout</h1>
        <div id=\"svedi\">
            <img src=\"../assets/images/svediMoyen.png\"/>
        </div>
    
        <div id=\"connexion\">
            <img src=\"../assets/images/connexionTop.png\"/>
            <div>
                <div id=\"connect\">
                    <p>Connectez-vous :</p> 
                    <div>
                        {% block fos_user_content %}
                        {% endblock fos_user_content %}
                    </div>
            
                    <p ><a href={{path ('fos_user_resetting_request')}}>Mot de passe oubli&eacute; ?</a></p>
                    <p class=\"full\"><?php echo @\$error_credentials; ?></p>
                </div>
                <!-->
                <div id=\"recup\"><br/>
                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                        <p>Veuillez saisir votre email,<br/>un mot de passe temporaire vous sera envoy&eacute;.</p><br/>
                        <input type=\"text\" id=\"mail\" name=\"mailRecup\" placeholder=\"Adresse email\"/>
                        <input class=\"button\" type=\"submit\" name=\"envoiMdp\" id=\"envoiMdp\" value=\"Envoyer\"/>
                    </form>
                </div>
                -->
            </div>
            <img src=\"../assets/images/connexionBtm.png\"/>
        </div>
    </body>
</html>", "FOSUserBundle::layout1.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/layout1.html.twig");
    }
}
