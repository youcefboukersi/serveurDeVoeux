<?php

/* SRVDVServerBundle:Connexion:index.html.twig */
class __TwigTemplate_723e506b2fa5c5c3ea573cb08868e491b3202449b6410785a7cceb44d6c52331 extends Twig_Template
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
        $__internal_ec8eb72e69c0b98e8735cb70284c5eb6b5b5ea928fcc944f25b93f6ec3b5147c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8eb72e69c0b98e8735cb70284c5eb6b5b5ea928fcc944f25b93f6ec3b5147c->enter($__internal_ec8eb72e69c0b98e8735cb70284c5eb6b5b5ea928fcc944f25b93f6ec3b5147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Connexion:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SVEDI</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/runtime_favico.ico"), "html", null, true);
        echo "\">
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\" />
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/javascript/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/javascript/connexion.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body> 
        <div align=\"center\">      
            <div id=\"svedi\">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img titre=\"home\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/svediMoyen.png"), "html", null, true);
        echo "\"/></a>
            </div>
            <div id=\"connexion\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/connexionTop.png"), "html", null, true);
        echo "\"/>
                ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/connexionBtm.png"), "html", null, true);
        echo "\"/>
            </div>
        </div>
    </body>
</html>";
        
        $__internal_ec8eb72e69c0b98e8735cb70284c5eb6b5b5ea928fcc944f25b93f6ec3b5147c->leave($__internal_ec8eb72e69c0b98e8735cb70284c5eb6b5b5ea928fcc944f25b93f6ec3b5147c_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f12de869116f2bcbd8175b3057c6c2ceab10984e330bbd8f96f9cf5ce19c0502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12de869116f2bcbd8175b3057c6c2ceab10984e330bbd8f96f9cf5ce19c0502->enter($__internal_f12de869116f2bcbd8175b3057c6c2ceab10984e330bbd8f96f9cf5ce19c0502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "                ";
        
        $__internal_f12de869116f2bcbd8175b3057c6c2ceab10984e330bbd8f96f9cf5ce19c0502->leave($__internal_f12de869116f2bcbd8175b3057c6c2ceab10984e330bbd8f96f9cf5ce19c0502_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Connexion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  80 => 18,  67 => 20,  65 => 18,  61 => 17,  53 => 14,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
        <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/runtime_favico.ico')}}\">
        <link rel=stylesheet type=\"text/css\" href=\"{{ asset('assets/css/home.css') }}\" />
        <link rel=stylesheet type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\"/>
        <script type=\"text/javascript\" src=\"{{ asset('assets/javascript/jquery-2.1.1.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/javascript/connexion.js')}}\"></script>
    </head>
    <body> 
        <div align=\"center\">      
            <div id=\"svedi\">
                <a href=\"{{ path('home')}}\"><img titre=\"home\" src=\"{{ asset('assets/images/svediMoyen.png')}}\"/></a>
            </div>
            <div id=\"connexion\">
                <img src=\"{{ asset('assets/images/connexionTop.png')}}\"/>
                {% block fos_user_content %}
                {% endblock fos_user_content %}
                <img src=\"{{ asset('assets/images/connexionBtm.png')}}\"/>
            </div>
        </div>
    </body>
</html>", "SRVDVServerBundle:Connexion:index.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Connexion/index.html.twig");
    }
}
