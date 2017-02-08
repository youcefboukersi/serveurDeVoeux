<?php

/* FOSUserBundle:Connexion:index.html.twig */
class __TwigTemplate_5494d8a3d6ed9138e3519ccaa9a3225857c8881f8c0442831234f29aa2425380 extends Twig_Template
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
        $__internal_7b5cf60aa4f41adfcb63bdf1947e1ad60176adeddda09e20acbfc7167f2dfdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5cf60aa4f41adfcb63bdf1947e1ad60176adeddda09e20acbfc7167f2dfdfd->enter($__internal_7b5cf60aa4f41adfcb63bdf1947e1ad60176adeddda09e20acbfc7167f2dfdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Connexion:index.html.twig"));

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
        
        $__internal_7b5cf60aa4f41adfcb63bdf1947e1ad60176adeddda09e20acbfc7167f2dfdfd->leave($__internal_7b5cf60aa4f41adfcb63bdf1947e1ad60176adeddda09e20acbfc7167f2dfdfd_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e12b2ba5e8fec9d01564de13f2b4d681c3f6210f8fa62fc30c98a9df5080b7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12b2ba5e8fec9d01564de13f2b4d681c3f6210f8fa62fc30c98a9df5080b7f3->enter($__internal_e12b2ba5e8fec9d01564de13f2b4d681c3f6210f8fa62fc30c98a9df5080b7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "                ";
        
        $__internal_e12b2ba5e8fec9d01564de13f2b4d681c3f6210f8fa62fc30c98a9df5080b7f3->leave($__internal_e12b2ba5e8fec9d01564de13f2b4d681c3f6210f8fa62fc30c98a9df5080b7f3_prof);

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
</html>", "FOSUserBundle:Connexion:index.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/Connexion/index.html.twig");
    }
}
