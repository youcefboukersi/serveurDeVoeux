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
        $__internal_ea665e76f87206bef83291872b355eeb0fed74cf8c2f1f22e76f07493fd10f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea665e76f87206bef83291872b355eeb0fed74cf8c2f1f22e76f07493fd10f13->enter($__internal_ea665e76f87206bef83291872b355eeb0fed74cf8c2f1f22e76f07493fd10f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ea665e76f87206bef83291872b355eeb0fed74cf8c2f1f22e76f07493fd10f13->leave($__internal_ea665e76f87206bef83291872b355eeb0fed74cf8c2f1f22e76f07493fd10f13_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ba6eab365d10f1d30ac5c0ecb62cb9ef2639980c454957e8b9fda5c287ad6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba6eab365d10f1d30ac5c0ecb62cb9ef2639980c454957e8b9fda5c287ad6a5->enter($__internal_2ba6eab365d10f1d30ac5c0ecb62cb9ef2639980c454957e8b9fda5c287ad6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2ba6eab365d10f1d30ac5c0ecb62cb9ef2639980c454957e8b9fda5c287ad6a5->leave($__internal_2ba6eab365d10f1d30ac5c0ecb62cb9ef2639980c454957e8b9fda5c287ad6a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d207cc3db486db868f2c1b5f84e90ffcfcbc629f93f39e00155ae8a36ebd17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d207cc3db486db868f2c1b5f84e90ffcfcbc629f93f39e00155ae8a36ebd17a->enter($__internal_2d207cc3db486db868f2c1b5f84e90ffcfcbc629f93f39e00155ae8a36ebd17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2d207cc3db486db868f2c1b5f84e90ffcfcbc629f93f39e00155ae8a36ebd17a->leave($__internal_2d207cc3db486db868f2c1b5f84e90ffcfcbc629f93f39e00155ae8a36ebd17a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b145e7373574c8ae5ff66ee709c2857dd3bc904892a5a1260da422449cb4dcaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b145e7373574c8ae5ff66ee709c2857dd3bc904892a5a1260da422449cb4dcaf->enter($__internal_b145e7373574c8ae5ff66ee709c2857dd3bc904892a5a1260da422449cb4dcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b145e7373574c8ae5ff66ee709c2857dd3bc904892a5a1260da422449cb4dcaf->leave($__internal_b145e7373574c8ae5ff66ee709c2857dd3bc904892a5a1260da422449cb4dcaf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8513e13ac0d44449d404d5fd1c4f74aafc7380b9898c6a340040c09369e5f6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8513e13ac0d44449d404d5fd1c4f74aafc7380b9898c6a340040c09369e5f6aa->enter($__internal_8513e13ac0d44449d404d5fd1c4f74aafc7380b9898c6a340040c09369e5f6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8513e13ac0d44449d404d5fd1c4f74aafc7380b9898c6a340040c09369e5f6aa->leave($__internal_8513e13ac0d44449d404d5fd1c4f74aafc7380b9898c6a340040c09369e5f6aa_prof);

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
