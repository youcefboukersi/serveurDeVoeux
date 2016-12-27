<?php

/* FOSUserBundle:Connexion:index.html.twig */
class __TwigTemplate_743a655d6e7bbcb914d122c4e5feda9e6f2c99c78138bfce3324e4bfda60b6ef extends Twig_Template
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
        $__internal_ee76fbf201e352c972960a86e17b6c337e0031720b34beab3aea7027db7bd511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee76fbf201e352c972960a86e17b6c337e0031720b34beab3aea7027db7bd511->enter($__internal_ee76fbf201e352c972960a86e17b6c337e0031720b34beab3aea7027db7bd511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Connexion:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SVEDI</title>
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/javascript/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/javascript/connexion.js"), "html", null, true);
        echo "\"></script>
    </head>
        
    <body>       
        <div id=\"svedi\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/svediMoyen.png"), "html", null, true);
        echo "\"/>
        </div>
            
        <div id=\"connexion\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/connexionTop.png"), "html", null, true);
        echo "\"/>
            <div>
                <div align=\"center\">
                    
                    <div>
                        ";
        // line 21
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "                    </div>
                    
                        
                        
                </div>
                    
                    
                    
                    
            </div>
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/connexionBtm.png"), "html", null, true);
        echo "\"/>
        </div>
    </body>
</html>";
        
        $__internal_ee76fbf201e352c972960a86e17b6c337e0031720b34beab3aea7027db7bd511->leave($__internal_ee76fbf201e352c972960a86e17b6c337e0031720b34beab3aea7027db7bd511_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3aca05aa0547629748feb7095546c42432f13fedafc0a9cf8c17eeb11e49b405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aca05aa0547629748feb7095546c42432f13fedafc0a9cf8c17eeb11e49b405->enter($__internal_3aca05aa0547629748feb7095546c42432f13fedafc0a9cf8c17eeb11e49b405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "                        ";
        
        $__internal_3aca05aa0547629748feb7095546c42432f13fedafc0a9cf8c17eeb11e49b405->leave($__internal_3aca05aa0547629748feb7095546c42432f13fedafc0a9cf8c17eeb11e49b405_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  85 => 21,  74 => 33,  62 => 23,  60 => 21,  52 => 16,  45 => 12,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
        <link rel=stylesheet type=\"text/css\" href=\"{{ asset('assets/css/home.css') }}\" />
        <script type=\"text/javascript\" src=\"{{ asset('assets/javascript/jquery-2.1.1.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/javascript/connexion.js')}}\"></script>
    </head>
        
    <body>       
        <div id=\"svedi\">
            <img src=\"{{ asset('assets/images/svediMoyen.png')}}\"/>
        </div>
            
        <div id=\"connexion\">
            <img src=\"{{ asset('assets/images/connexionTop.png')}}\"/>
            <div>
                <div align=\"center\">
                    
                    <div>
                        {% block fos_user_content %}
                        {% endblock fos_user_content %}
                    </div>
                    
                        
                        
                </div>
                    
                    
                    
                    
            </div>
            <img src=\"{{ asset('assets/images/connexionBtm.png')}}\"/>
        </div>
    </body>
</html>", "FOSUserBundle:Connexion:index.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Connexion/index.html.twig");
    }
}
