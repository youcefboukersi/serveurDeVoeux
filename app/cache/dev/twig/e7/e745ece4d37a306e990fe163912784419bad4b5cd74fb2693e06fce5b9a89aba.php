<?php

/* base.html.twig */
class __TwigTemplate_16dfca7ecf67c371c61cb225bc3938b0384e373c03bb96be574f575c1c04f3c9 extends Twig_Template
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
        $__internal_2e9495ba87afcde1e5d012d0ab3c58bde62c55c23294c41f06b595756e8d1fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9495ba87afcde1e5d012d0ab3c58bde62c55c23294c41f06b595756e8d1fe8->enter($__internal_2e9495ba87afcde1e5d012d0ab3c58bde62c55c23294c41f06b595756e8d1fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2e9495ba87afcde1e5d012d0ab3c58bde62c55c23294c41f06b595756e8d1fe8->leave($__internal_2e9495ba87afcde1e5d012d0ab3c58bde62c55c23294c41f06b595756e8d1fe8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_768d2f195555967e998bc70777967128f0feb32a3ccc8d09311192050a933e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768d2f195555967e998bc70777967128f0feb32a3ccc8d09311192050a933e1e->enter($__internal_768d2f195555967e998bc70777967128f0feb32a3ccc8d09311192050a933e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_768d2f195555967e998bc70777967128f0feb32a3ccc8d09311192050a933e1e->leave($__internal_768d2f195555967e998bc70777967128f0feb32a3ccc8d09311192050a933e1e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc9c28fe73ff01b317c48a0a080708b90cddd01edb2b81ae554655d158cf46a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9c28fe73ff01b317c48a0a080708b90cddd01edb2b81ae554655d158cf46a6->enter($__internal_dc9c28fe73ff01b317c48a0a080708b90cddd01edb2b81ae554655d158cf46a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc9c28fe73ff01b317c48a0a080708b90cddd01edb2b81ae554655d158cf46a6->leave($__internal_dc9c28fe73ff01b317c48a0a080708b90cddd01edb2b81ae554655d158cf46a6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_29fa003f55dc0da4191919ae8bbb0830cd5137b5a0e5fe74244a17db8ba5a28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fa003f55dc0da4191919ae8bbb0830cd5137b5a0e5fe74244a17db8ba5a28f->enter($__internal_29fa003f55dc0da4191919ae8bbb0830cd5137b5a0e5fe74244a17db8ba5a28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_29fa003f55dc0da4191919ae8bbb0830cd5137b5a0e5fe74244a17db8ba5a28f->leave($__internal_29fa003f55dc0da4191919ae8bbb0830cd5137b5a0e5fe74244a17db8ba5a28f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22d34a1703b733f5f86a6e4e20f47342673c4a907ceaba6b0e13a0852007e342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d34a1703b733f5f86a6e4e20f47342673c4a907ceaba6b0e13a0852007e342->enter($__internal_22d34a1703b733f5f86a6e4e20f47342673c4a907ceaba6b0e13a0852007e342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_22d34a1703b733f5f86a6e4e20f47342673c4a907ceaba6b0e13a0852007e342->leave($__internal_22d34a1703b733f5f86a6e4e20f47342673c4a907ceaba6b0e13a0852007e342_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\app\\Resources\\views\\base.html.twig");
    }
}
