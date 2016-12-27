<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d943ebdee23b7cf30f63f0b51f4dff1b9455533d5365db072e58e1b90d791f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_f167656e38eb096dfb9ea9934a868258d3f1d86a1a65a6987580966e98bf460c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f167656e38eb096dfb9ea9934a868258d3f1d86a1a65a6987580966e98bf460c->enter($__internal_f167656e38eb096dfb9ea9934a868258d3f1d86a1a65a6987580966e98bf460c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f167656e38eb096dfb9ea9934a868258d3f1d86a1a65a6987580966e98bf460c->leave($__internal_f167656e38eb096dfb9ea9934a868258d3f1d86a1a65a6987580966e98bf460c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dbb045edb7e18e8dc3ca51b8275c15a9821f7d57e3dd2ae44acf0847252cc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbb045edb7e18e8dc3ca51b8275c15a9821f7d57e3dd2ae44acf0847252cc8c->enter($__internal_5dbb045edb7e18e8dc3ca51b8275c15a9821f7d57e3dd2ae44acf0847252cc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5dbb045edb7e18e8dc3ca51b8275c15a9821f7d57e3dd2ae44acf0847252cc8c->leave($__internal_5dbb045edb7e18e8dc3ca51b8275c15a9821f7d57e3dd2ae44acf0847252cc8c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6005b5e728eabcba4cf257bbb88324c20844450fce5423c307904a0d8b3c646c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6005b5e728eabcba4cf257bbb88324c20844450fce5423c307904a0d8b3c646c->enter($__internal_6005b5e728eabcba4cf257bbb88324c20844450fce5423c307904a0d8b3c646c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_6005b5e728eabcba4cf257bbb88324c20844450fce5423c307904a0d8b3c646c->leave($__internal_6005b5e728eabcba4cf257bbb88324c20844450fce5423c307904a0d8b3c646c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
