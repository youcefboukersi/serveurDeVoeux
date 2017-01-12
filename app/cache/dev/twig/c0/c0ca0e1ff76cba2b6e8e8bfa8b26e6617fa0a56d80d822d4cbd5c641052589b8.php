<?php

/* SRVDVServerBundle::layout.html.twig */
class __TwigTemplate_694540571e4ac781a8fb645c1cd9dd44c3f68157c9d2007b6293745000917c1f extends Twig_Template
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
        $__internal_fafbfaf71e2765ac7253578e082f404120ad47208a29f4c9ecde6130d8ea81c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafbfaf71e2765ac7253578e082f404120ad47208a29f4c9ecde6130d8ea81c3->enter($__internal_fafbfaf71e2765ac7253578e082f404120ad47208a29f4c9ecde6130d8ea81c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SVEDI</title>
        <link rel=stylesheet type=\"text/css\" href=\"../assets/css/home.css\"/>
        <script type=\"text/javascript\" src=\"../assets/javascript/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../assets/javascript/connexion.js\"></script>
        <link rel=stylesheet type=\"text/css\" href='";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " '/>
        
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
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "                    </div>
            
                    <p ><a href=";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo ">Mot de passe oubli&eacute; ?</a></p>
                    <p class=\"full\"><?php echo @\$error_credentials; ?></p>
                </div>
                <!-->
                <div id=\"recup\"><br/>
                    <form action=\"";
        // line 33
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
        
        $__internal_fafbfaf71e2765ac7253578e082f404120ad47208a29f4c9ecde6130d8ea81c3->leave($__internal_fafbfaf71e2765ac7253578e082f404120ad47208a29f4c9ecde6130d8ea81c3_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84efbcb4e414f808545ad1b4f7a8de097a9ce3a397e387a2159855c0837dd77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84efbcb4e414f808545ad1b4f7a8de097a9ce3a397e387a2159855c0837dd77f->enter($__internal_84efbcb4e414f808545ad1b4f7a8de097a9ce3a397e387a2159855c0837dd77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        
        $__internal_84efbcb4e414f808545ad1b4f7a8de097a9ce3a397e387a2159855c0837dd77f->leave($__internal_84efbcb4e414f808545ad1b4f7a8de097a9ce3a397e387a2159855c0837dd77f_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  84 => 24,  65 => 33,  57 => 28,  53 => 26,  51 => 24,  32 => 8,  23 => 1,);
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
        <link rel=stylesheet type=\"text/css\" href='{{ asset(\"bootstrap/css/bootstrap.min.css\") }} '/>
        
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
</html>", "SRVDVServerBundle::layout.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/layout.html.twig");
    }
}
