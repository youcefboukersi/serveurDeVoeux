<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2f0c51172623642d9b76534c3b1be78bb62dc4a7106f386adf6a661d036aafba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bb057d09c8cdfb202457bf963a897704dad09afe41f7fe6dfc793a505169a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb057d09c8cdfb202457bf963a897704dad09afe41f7fe6dfc793a505169a48->enter($__internal_6bb057d09c8cdfb202457bf963a897704dad09afe41f7fe6dfc793a505169a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb057d09c8cdfb202457bf963a897704dad09afe41f7fe6dfc793a505169a48->leave($__internal_6bb057d09c8cdfb202457bf963a897704dad09afe41f7fe6dfc793a505169a48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_660c5a88512174c1a15df063f5bcdb411f47da87ba875f75f84fa31cb2022730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660c5a88512174c1a15df063f5bcdb411f47da87ba875f75f84fa31cb2022730->enter($__internal_660c5a88512174c1a15df063f5bcdb411f47da87ba875f75f84fa31cb2022730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_660c5a88512174c1a15df063f5bcdb411f47da87ba875f75f84fa31cb2022730->leave($__internal_660c5a88512174c1a15df063f5bcdb411f47da87ba875f75f84fa31cb2022730_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86a200c0c4de97525f009b51030387a4c46cee9215a8a11168deabd782dd7a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a200c0c4de97525f009b51030387a4c46cee9215a8a11168deabd782dd7a8e->enter($__internal_86a200c0c4de97525f009b51030387a4c46cee9215a8a11168deabd782dd7a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86a200c0c4de97525f009b51030387a4c46cee9215a8a11168deabd782dd7a8e->leave($__internal_86a200c0c4de97525f009b51030387a4c46cee9215a8a11168deabd782dd7a8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d77eafd7718c23bcf0f88397d342b287ae413885c736b2a39e37bc25b994b9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77eafd7718c23bcf0f88397d342b287ae413885c736b2a39e37bc25b994b9e2->enter($__internal_d77eafd7718c23bcf0f88397d342b287ae413885c736b2a39e37bc25b994b9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d77eafd7718c23bcf0f88397d342b287ae413885c736b2a39e37bc25b994b9e2->leave($__internal_d77eafd7718c23bcf0f88397d342b287ae413885c736b2a39e37bc25b994b9e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
