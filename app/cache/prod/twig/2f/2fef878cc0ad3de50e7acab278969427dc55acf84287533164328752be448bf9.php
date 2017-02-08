<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fc1d8c67d694d1267b68f241079a14863be9bda46a7f5f2fa0abd39c9a71e611 extends Twig_Template
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
        $__internal_f955bdad29dd770c1ea44153fd8f821c592f72d15663593ea731e863cf891300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f955bdad29dd770c1ea44153fd8f821c592f72d15663593ea731e863cf891300->enter($__internal_f955bdad29dd770c1ea44153fd8f821c592f72d15663593ea731e863cf891300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f955bdad29dd770c1ea44153fd8f821c592f72d15663593ea731e863cf891300->leave($__internal_f955bdad29dd770c1ea44153fd8f821c592f72d15663593ea731e863cf891300_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6522e9cbe79c4e767bb755ecf6521f811562569b52f1d8171e489f6d8974281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6522e9cbe79c4e767bb755ecf6521f811562569b52f1d8171e489f6d8974281->enter($__internal_b6522e9cbe79c4e767bb755ecf6521f811562569b52f1d8171e489f6d8974281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6522e9cbe79c4e767bb755ecf6521f811562569b52f1d8171e489f6d8974281->leave($__internal_b6522e9cbe79c4e767bb755ecf6521f811562569b52f1d8171e489f6d8974281_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2075a3413eb8cd7f98c6fffc45f764c8f965fcc6b2f9dbb7782c9ab6bd9f9660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2075a3413eb8cd7f98c6fffc45f764c8f965fcc6b2f9dbb7782c9ab6bd9f9660->enter($__internal_2075a3413eb8cd7f98c6fffc45f764c8f965fcc6b2f9dbb7782c9ab6bd9f9660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2075a3413eb8cd7f98c6fffc45f764c8f965fcc6b2f9dbb7782c9ab6bd9f9660->leave($__internal_2075a3413eb8cd7f98c6fffc45f764c8f965fcc6b2f9dbb7782c9ab6bd9f9660_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0842eea632ae6adf725ba1aabe826ff22c22a20b6c7a0edb04c428d040ec003d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0842eea632ae6adf725ba1aabe826ff22c22a20b6c7a0edb04c428d040ec003d->enter($__internal_0842eea632ae6adf725ba1aabe826ff22c22a20b6c7a0edb04c428d040ec003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0842eea632ae6adf725ba1aabe826ff22c22a20b6c7a0edb04c428d040ec003d->leave($__internal_0842eea632ae6adf725ba1aabe826ff22c22a20b6c7a0edb04c428d040ec003d_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
