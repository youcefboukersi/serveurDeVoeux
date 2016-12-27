<?php

/* @SRVDVServer/layout.html.twig */
class __TwigTemplate_b819a735503aa36054ea1419d70d8b3284e8cd75f53c5e33a682d76391b257ae extends Twig_Template
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
        $__internal_8f15068d73abc7704c70f51924fde30f3a12885dcfc4586f02f5683656eac75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f15068d73abc7704c70f51924fde30f3a12885dcfc4586f02f5683656eac75d->enter($__internal_8f15068d73abc7704c70f51924fde30f3a12885dcfc4586f02f5683656eac75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/layout.html.twig"));

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
        
        $__internal_8f15068d73abc7704c70f51924fde30f3a12885dcfc4586f02f5683656eac75d->leave($__internal_8f15068d73abc7704c70f51924fde30f3a12885dcfc4586f02f5683656eac75d_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cf531d7c581906bf99b715ce5a9cea0531e17a714fe44ce562ccb0b1eb83133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf531d7c581906bf99b715ce5a9cea0531e17a714fe44ce562ccb0b1eb83133->enter($__internal_3cf531d7c581906bf99b715ce5a9cea0531e17a714fe44ce562ccb0b1eb83133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                        ";
        
        $__internal_3cf531d7c581906bf99b715ce5a9cea0531e17a714fe44ce562ccb0b1eb83133->leave($__internal_3cf531d7c581906bf99b715ce5a9cea0531e17a714fe44ce562ccb0b1eb83133_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/layout.html.twig";
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
</html>", "@SRVDVServer/layout.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\layout.html.twig");
    }
}
