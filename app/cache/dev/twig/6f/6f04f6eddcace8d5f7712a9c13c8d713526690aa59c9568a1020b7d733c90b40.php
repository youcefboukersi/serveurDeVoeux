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
        $__internal_4cb468a5429fd352143d503f4812d94fe261b36763ce607ba748a4c709844661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb468a5429fd352143d503f4812d94fe261b36763ce607ba748a4c709844661->enter($__internal_4cb468a5429fd352143d503f4812d94fe261b36763ce607ba748a4c709844661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb468a5429fd352143d503f4812d94fe261b36763ce607ba748a4c709844661->leave($__internal_4cb468a5429fd352143d503f4812d94fe261b36763ce607ba748a4c709844661_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b115fafb8db0f4119dd5080bcaebcd6f4ab2c84eac2e0a1146206c4824096260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b115fafb8db0f4119dd5080bcaebcd6f4ab2c84eac2e0a1146206c4824096260->enter($__internal_b115fafb8db0f4119dd5080bcaebcd6f4ab2c84eac2e0a1146206c4824096260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b115fafb8db0f4119dd5080bcaebcd6f4ab2c84eac2e0a1146206c4824096260->leave($__internal_b115fafb8db0f4119dd5080bcaebcd6f4ab2c84eac2e0a1146206c4824096260_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2767683e22fb45bc71c503ebb24ade13f95021c3b98e3feef32c79db7e067ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2767683e22fb45bc71c503ebb24ade13f95021c3b98e3feef32c79db7e067ac1->enter($__internal_2767683e22fb45bc71c503ebb24ade13f95021c3b98e3feef32c79db7e067ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2767683e22fb45bc71c503ebb24ade13f95021c3b98e3feef32c79db7e067ac1->leave($__internal_2767683e22fb45bc71c503ebb24ade13f95021c3b98e3feef32c79db7e067ac1_prof);

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
