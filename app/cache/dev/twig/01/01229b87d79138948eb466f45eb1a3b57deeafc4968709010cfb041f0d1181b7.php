<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b4c1c7d5f7ae963a1df1e066886aad9e8f6c5496a37e2deb0c47ba0bf4da893b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_ff8c03f924423195a65d5d5404d6b0fc0fc09e7165ebeec20c64e79e3850a69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8c03f924423195a65d5d5404d6b0fc0fc09e7165ebeec20c64e79e3850a69e->enter($__internal_ff8c03f924423195a65d5d5404d6b0fc0fc09e7165ebeec20c64e79e3850a69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8c03f924423195a65d5d5404d6b0fc0fc09e7165ebeec20c64e79e3850a69e->leave($__internal_ff8c03f924423195a65d5d5404d6b0fc0fc09e7165ebeec20c64e79e3850a69e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a42a7acbb9ff97d56b0cc1bf7e3ff0d4c3a05e6e8d198ff8e7083c201a7b819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a42a7acbb9ff97d56b0cc1bf7e3ff0d4c3a05e6e8d198ff8e7083c201a7b819->enter($__internal_1a42a7acbb9ff97d56b0cc1bf7e3ff0d4c3a05e6e8d198ff8e7083c201a7b819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a42a7acbb9ff97d56b0cc1bf7e3ff0d4c3a05e6e8d198ff8e7083c201a7b819->leave($__internal_1a42a7acbb9ff97d56b0cc1bf7e3ff0d4c3a05e6e8d198ff8e7083c201a7b819_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58cdc3819bd0b0e4c4702c9cfd8def373a16d6ae8bd59ea5b19228f8a5658035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cdc3819bd0b0e4c4702c9cfd8def373a16d6ae8bd59ea5b19228f8a5658035->enter($__internal_58cdc3819bd0b0e4c4702c9cfd8def373a16d6ae8bd59ea5b19228f8a5658035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_58cdc3819bd0b0e4c4702c9cfd8def373a16d6ae8bd59ea5b19228f8a5658035->leave($__internal_58cdc3819bd0b0e4c4702c9cfd8def373a16d6ae8bd59ea5b19228f8a5658035_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_40bc33bc8aaeaa43b3dc7670c26b89181fd59f4bc4856f49246c73e56c1e4fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bc33bc8aaeaa43b3dc7670c26b89181fd59f4bc4856f49246c73e56c1e4fcf->enter($__internal_40bc33bc8aaeaa43b3dc7670c26b89181fd59f4bc4856f49246c73e56c1e4fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_40bc33bc8aaeaa43b3dc7670c26b89181fd59f4bc4856f49246c73e56c1e4fcf->leave($__internal_40bc33bc8aaeaa43b3dc7670c26b89181fd59f4bc4856f49246c73e56c1e4fcf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
