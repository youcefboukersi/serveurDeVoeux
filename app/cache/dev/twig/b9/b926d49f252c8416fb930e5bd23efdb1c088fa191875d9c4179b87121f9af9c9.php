<?php

/* SRVDVServerBundle:Connexion:index.html.twig */
class __TwigTemplate_8db1cb764529c3d61a466918a7743930bf22461f76f134b24bfdbfed94729585 extends Twig_Template
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
        $__internal_fb55b1ef110e0bd555ae7f975f2e8c7d3de205087d363e23af96acd96096fd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb55b1ef110e0bd555ae7f975f2e8c7d3de205087d363e23af96acd96096fd29->enter($__internal_fb55b1ef110e0bd555ae7f975f2e8c7d3de205087d363e23af96acd96096fd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Connexion:index.html.twig"));

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
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/svediMoyen.png"), "html", null, true);
        echo "\"/></a>
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
        
        $__internal_fb55b1ef110e0bd555ae7f975f2e8c7d3de205087d363e23af96acd96096fd29->leave($__internal_fb55b1ef110e0bd555ae7f975f2e8c7d3de205087d363e23af96acd96096fd29_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d96da7e77899a441c640b7945940739704eecbaac64881252c8f6e0a0710c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d96da7e77899a441c640b7945940739704eecbaac64881252c8f6e0a0710c7c->enter($__internal_6d96da7e77899a441c640b7945940739704eecbaac64881252c8f6e0a0710c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "                        ";
        
        $__internal_6d96da7e77899a441c640b7945940739704eecbaac64881252c8f6e0a0710c7c->leave($__internal_6d96da7e77899a441c640b7945940739704eecbaac64881252c8f6e0a0710c7c_prof);

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
        return array (  93 => 22,  87 => 21,  76 => 33,  64 => 23,  62 => 21,  54 => 16,  45 => 12,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
            <a href=\"{{ path('home')}}\"><img src=\"{{ asset('assets/images/svediMoyen.png')}}\"/></a>
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
</html>", "SRVDVServerBundle:Connexion:index.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Connexion/index.html.twig");
    }
}
