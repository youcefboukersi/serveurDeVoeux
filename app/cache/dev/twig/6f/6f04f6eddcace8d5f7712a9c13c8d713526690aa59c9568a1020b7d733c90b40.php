<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_cdb0e8d81630dc822c373e4e0057e725776191f524df7852abc64ebc6a868d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_142e98aea9a0450ef11790a7f8d95a2520f3fe97c5ea78ccd48c1f7e63cff675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142e98aea9a0450ef11790a7f8d95a2520f3fe97c5ea78ccd48c1f7e63cff675->enter($__internal_142e98aea9a0450ef11790a7f8d95a2520f3fe97c5ea78ccd48c1f7e63cff675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142e98aea9a0450ef11790a7f8d95a2520f3fe97c5ea78ccd48c1f7e63cff675->leave($__internal_142e98aea9a0450ef11790a7f8d95a2520f3fe97c5ea78ccd48c1f7e63cff675_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31528083085331c21fcc2bd2ff8e5831a6de07bcd8a9627dc2508758fa4a7dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31528083085331c21fcc2bd2ff8e5831a6de07bcd8a9627dc2508758fa4a7dd4->enter($__internal_31528083085331c21fcc2bd2ff8e5831a6de07bcd8a9627dc2508758fa4a7dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_31528083085331c21fcc2bd2ff8e5831a6de07bcd8a9627dc2508758fa4a7dd4->leave($__internal_31528083085331c21fcc2bd2ff8e5831a6de07bcd8a9627dc2508758fa4a7dd4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da0305157fb6c4b659039f1b1a3e63bac4c4e569121052fe03877e42effa27f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0305157fb6c4b659039f1b1a3e63bac4c4e569121052fe03877e42effa27f0->enter($__internal_da0305157fb6c4b659039f1b1a3e63bac4c4e569121052fe03877e42effa27f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_da0305157fb6c4b659039f1b1a3e63bac4c4e569121052fe03877e42effa27f0->leave($__internal_da0305157fb6c4b659039f1b1a3e63bac4c4e569121052fe03877e42effa27f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
