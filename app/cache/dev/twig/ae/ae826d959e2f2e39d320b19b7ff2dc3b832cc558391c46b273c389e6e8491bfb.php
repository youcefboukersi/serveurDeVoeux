<?php

/* ::base.html.twig */
class __TwigTemplate_b7ed1355435a6b693358a76e94ba2111608cfa1e8b7ae210af40251feffbd765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d40ccaaf2d6f9efeb6e3072f39e03c274d3df1917b23f152407801509fe72f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d40ccaaf2d6f9efeb6e3072f39e03c274d3df1917b23f152407801509fe72f8->enter($__internal_1d40ccaaf2d6f9efeb6e3072f39e03c274d3df1917b23f152407801509fe72f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1d40ccaaf2d6f9efeb6e3072f39e03c274d3df1917b23f152407801509fe72f8->leave($__internal_1d40ccaaf2d6f9efeb6e3072f39e03c274d3df1917b23f152407801509fe72f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddfd8fcb53d5d33e16bac3aedffe64d67b709eda2d469b65427d9efecbc69928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfd8fcb53d5d33e16bac3aedffe64d67b709eda2d469b65427d9efecbc69928->enter($__internal_ddfd8fcb53d5d33e16bac3aedffe64d67b709eda2d469b65427d9efecbc69928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ddfd8fcb53d5d33e16bac3aedffe64d67b709eda2d469b65427d9efecbc69928->leave($__internal_ddfd8fcb53d5d33e16bac3aedffe64d67b709eda2d469b65427d9efecbc69928_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f84862a82656207267e2830a217281ef16b5404594f0762ecc23d90f864c88bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84862a82656207267e2830a217281ef16b5404594f0762ecc23d90f864c88bb->enter($__internal_f84862a82656207267e2830a217281ef16b5404594f0762ecc23d90f864c88bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f84862a82656207267e2830a217281ef16b5404594f0762ecc23d90f864c88bb->leave($__internal_f84862a82656207267e2830a217281ef16b5404594f0762ecc23d90f864c88bb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d32a10835857e275d47254712e4824daedf6d3148bb8eb7da4315e951a1e1f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32a10835857e275d47254712e4824daedf6d3148bb8eb7da4315e951a1e1f01->enter($__internal_d32a10835857e275d47254712e4824daedf6d3148bb8eb7da4315e951a1e1f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d32a10835857e275d47254712e4824daedf6d3148bb8eb7da4315e951a1e1f01->leave($__internal_d32a10835857e275d47254712e4824daedf6d3148bb8eb7da4315e951a1e1f01_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d07e6a00b35c79aa9ec335487037145c874940303ead81473c62efa87dc9283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d07e6a00b35c79aa9ec335487037145c874940303ead81473c62efa87dc9283->enter($__internal_0d07e6a00b35c79aa9ec335487037145c874940303ead81473c62efa87dc9283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d07e6a00b35c79aa9ec335487037145c874940303ead81473c62efa87dc9283->leave($__internal_0d07e6a00b35c79aa9ec335487037145c874940303ead81473c62efa87dc9283_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\app/Resources\\views/base.html.twig");
    }
}
