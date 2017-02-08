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
        $__internal_5aa7bbb45bb608571eb68672bf944374c0f4c85b34fb108f7a308a151b6c1673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa7bbb45bb608571eb68672bf944374c0f4c85b34fb108f7a308a151b6c1673->enter($__internal_5aa7bbb45bb608571eb68672bf944374c0f4c85b34fb108f7a308a151b6c1673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa7bbb45bb608571eb68672bf944374c0f4c85b34fb108f7a308a151b6c1673->leave($__internal_5aa7bbb45bb608571eb68672bf944374c0f4c85b34fb108f7a308a151b6c1673_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4366a486a1c5265f78cbd24ebfeed822191bda38670d9aefb3cea792f0c0d3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4366a486a1c5265f78cbd24ebfeed822191bda38670d9aefb3cea792f0c0d3c7->enter($__internal_4366a486a1c5265f78cbd24ebfeed822191bda38670d9aefb3cea792f0c0d3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4366a486a1c5265f78cbd24ebfeed822191bda38670d9aefb3cea792f0c0d3c7->leave($__internal_4366a486a1c5265f78cbd24ebfeed822191bda38670d9aefb3cea792f0c0d3c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_92be43a296237018c34027a65f8b917560f77866253ee9847f9a7ef6cbf48224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92be43a296237018c34027a65f8b917560f77866253ee9847f9a7ef6cbf48224->enter($__internal_92be43a296237018c34027a65f8b917560f77866253ee9847f9a7ef6cbf48224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92be43a296237018c34027a65f8b917560f77866253ee9847f9a7ef6cbf48224->leave($__internal_92be43a296237018c34027a65f8b917560f77866253ee9847f9a7ef6cbf48224_prof);

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
