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
        $__internal_be0158ee57ed19469bca635c84f0d6e68d1e35b3e662a70efe4e14cd57d1b8d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0158ee57ed19469bca635c84f0d6e68d1e35b3e662a70efe4e14cd57d1b8d1->enter($__internal_be0158ee57ed19469bca635c84f0d6e68d1e35b3e662a70efe4e14cd57d1b8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0158ee57ed19469bca635c84f0d6e68d1e35b3e662a70efe4e14cd57d1b8d1->leave($__internal_be0158ee57ed19469bca635c84f0d6e68d1e35b3e662a70efe4e14cd57d1b8d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36815405acd887e11cb00fbb64400f0b32e8e340e72ef44eb9e09b143d3d1dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36815405acd887e11cb00fbb64400f0b32e8e340e72ef44eb9e09b143d3d1dd3->enter($__internal_36815405acd887e11cb00fbb64400f0b32e8e340e72ef44eb9e09b143d3d1dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_36815405acd887e11cb00fbb64400f0b32e8e340e72ef44eb9e09b143d3d1dd3->leave($__internal_36815405acd887e11cb00fbb64400f0b32e8e340e72ef44eb9e09b143d3d1dd3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_98434ae1c4da67efe4e9d67a397adc212e4cf8869cd046639d58cfd4cd69f295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98434ae1c4da67efe4e9d67a397adc212e4cf8869cd046639d58cfd4cd69f295->enter($__internal_98434ae1c4da67efe4e9d67a397adc212e4cf8869cd046639d58cfd4cd69f295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_98434ae1c4da67efe4e9d67a397adc212e4cf8869cd046639d58cfd4cd69f295->leave($__internal_98434ae1c4da67efe4e9d67a397adc212e4cf8869cd046639d58cfd4cd69f295_prof);

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
