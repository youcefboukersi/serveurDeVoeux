<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_12c072c16b1d6cebd82d64e5846461631e4794b50e5084f2bddf6be3bb1be7b0 extends Twig_Template
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
        $__internal_73e747e522b91d7aad12a6a55a0d742bd82601601536cffa7f21c40414ea65d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e747e522b91d7aad12a6a55a0d742bd82601601536cffa7f21c40414ea65d6->enter($__internal_73e747e522b91d7aad12a6a55a0d742bd82601601536cffa7f21c40414ea65d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e747e522b91d7aad12a6a55a0d742bd82601601536cffa7f21c40414ea65d6->leave($__internal_73e747e522b91d7aad12a6a55a0d742bd82601601536cffa7f21c40414ea65d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfc90624980d002c6927c29984d88586ae6cd4c68c954751887de9c2b3292c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc90624980d002c6927c29984d88586ae6cd4c68c954751887de9c2b3292c94->enter($__internal_bfc90624980d002c6927c29984d88586ae6cd4c68c954751887de9c2b3292c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bfc90624980d002c6927c29984d88586ae6cd4c68c954751887de9c2b3292c94->leave($__internal_bfc90624980d002c6927c29984d88586ae6cd4c68c954751887de9c2b3292c94_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78b08bd39744a5a948d95fb3cfb6cee510ee95527fe19326c2c50fdeb8644692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b08bd39744a5a948d95fb3cfb6cee510ee95527fe19326c2c50fdeb8644692->enter($__internal_78b08bd39744a5a948d95fb3cfb6cee510ee95527fe19326c2c50fdeb8644692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_78b08bd39744a5a948d95fb3cfb6cee510ee95527fe19326c2c50fdeb8644692->leave($__internal_78b08bd39744a5a948d95fb3cfb6cee510ee95527fe19326c2c50fdeb8644692_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
