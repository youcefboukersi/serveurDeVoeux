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
        $__internal_b14bcd515e99bc3d8eafbaf729d56eff8e8134c6d2db0907c43d230bac63dd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14bcd515e99bc3d8eafbaf729d56eff8e8134c6d2db0907c43d230bac63dd3a->enter($__internal_b14bcd515e99bc3d8eafbaf729d56eff8e8134c6d2db0907c43d230bac63dd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Connexion:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SVEDI</title>
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\" />
              <link rel=stylesheet type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/javascript/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/javascript/connexion.js"), "html", null, true);
        echo "\"></script>
    </head>
        
    <body>       
        <div id=\"svedi\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/svediMoyen.png"), "html", null, true);
        echo "\"/></a>
        </div>
            
        <div id=\"connexion\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/connexionTop.png"), "html", null, true);
        echo "\"/>
            <div>
                <div align=\"center\">
                    
                        ";
        // line 21
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "                   
                    
                        
                        
                </div>
                    
                    
                    
                    
            </div>
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/connexionBtm.png"), "html", null, true);
        echo "\"/>
        </div>
    </body>
</html>";
        
        $__internal_b14bcd515e99bc3d8eafbaf729d56eff8e8134c6d2db0907c43d230bac63dd3a->leave($__internal_b14bcd515e99bc3d8eafbaf729d56eff8e8134c6d2db0907c43d230bac63dd3a_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b7dd21b1021bf988db3bb89101ed56e88a64b8e0964b3de424ed4ed1f62d1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7dd21b1021bf988db3bb89101ed56e88a64b8e0964b3de424ed4ed1f62d1b0->enter($__internal_5b7dd21b1021bf988db3bb89101ed56e88a64b8e0964b3de424ed4ed1f62d1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "                        ";
        
        $__internal_5b7dd21b1021bf988db3bb89101ed56e88a64b8e0964b3de424ed4ed1f62d1b0->leave($__internal_5b7dd21b1021bf988db3bb89101ed56e88a64b8e0964b3de424ed4ed1f62d1b0_prof);

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
        return array (  96 => 22,  90 => 21,  79 => 33,  67 => 23,  65 => 21,  58 => 17,  49 => 13,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
              <link rel=stylesheet type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\"/>
        <script type=\"text/javascript\" src=\"{{ asset('assets/javascript/jquery-2.1.1.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/javascript/connexion.js')}}\"></script>
    </head>
        
    <body>       
        <div id=\"svedi\">
            <a href=\"{{ path('home')}}\"><img src=\"{{ asset('assets/images/svediMoyen.png')}}\"/></a>
        </div>
            
        <div id=\"connexion\">
            <img src=\"{{ asset('assets/images/connexionTop.png')}}\"/>
            <div>
                <div align=\"center\">
                    
                        {% block fos_user_content %}
                        {% endblock fos_user_content %}
                   
                    
                        
                        
                </div>
                    
                    
                    
                    
            </div>
            <img src=\"{{ asset('assets/images/connexionBtm.png')}}\"/>
        </div>
    </body>
</html>", "FOSUserBundle:Connexion:index.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Connexion/index.html.twig");
    }
}
