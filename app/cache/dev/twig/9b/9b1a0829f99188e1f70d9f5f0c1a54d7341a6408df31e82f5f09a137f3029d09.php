<?php

/* FOSUserBundle:Connexion:index.html.twig */
class __TwigTemplate_a6a0884c1471338c65d91513b148a04d02035ab6e6f439fa2d9bfb37fe9800a5 extends Twig_Template
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
        $__internal_d2ba6b8aef3acda70a70f90f7e929424d4c79911ebdd597211b301c86cf1cc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ba6b8aef3acda70a70f90f7e929424d4c79911ebdd597211b301c86cf1cc3b->enter($__internal_d2ba6b8aef3acda70a70f90f7e929424d4c79911ebdd597211b301c86cf1cc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Connexion:index.html.twig"));

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
        
        $__internal_d2ba6b8aef3acda70a70f90f7e929424d4c79911ebdd597211b301c86cf1cc3b->leave($__internal_d2ba6b8aef3acda70a70f90f7e929424d4c79911ebdd597211b301c86cf1cc3b_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb9a33dd835d20214b56a07159ddebdf1779796fc3f7a229024918d8cff081d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9a33dd835d20214b56a07159ddebdf1779796fc3f7a229024918d8cff081d1->enter($__internal_eb9a33dd835d20214b56a07159ddebdf1779796fc3f7a229024918d8cff081d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "                        ";
        
        $__internal_eb9a33dd835d20214b56a07159ddebdf1779796fc3f7a229024918d8cff081d1->leave($__internal_eb9a33dd835d20214b56a07159ddebdf1779796fc3f7a229024918d8cff081d1_prof);

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
</html>", "FOSUserBundle:Connexion:index.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Connexion/index.html.twig");
    }
}
