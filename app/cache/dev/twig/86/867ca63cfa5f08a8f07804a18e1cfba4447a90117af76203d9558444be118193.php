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
        $__internal_2d8c87c66f4a1b3a29e874d39dfe31b7d4ddf421a45cc97c978ad72e141e1f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8c87c66f4a1b3a29e874d39dfe31b7d4ddf421a45cc97c978ad72e141e1f7e->enter($__internal_2d8c87c66f4a1b3a29e874d39dfe31b7d4ddf421a45cc97c978ad72e141e1f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8c87c66f4a1b3a29e874d39dfe31b7d4ddf421a45cc97c978ad72e141e1f7e->leave($__internal_2d8c87c66f4a1b3a29e874d39dfe31b7d4ddf421a45cc97c978ad72e141e1f7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_651ae1bd5ff85a717b0ad40c6c60dd78d42c28f744aa480cb067ab5c652c5a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651ae1bd5ff85a717b0ad40c6c60dd78d42c28f744aa480cb067ab5c652c5a46->enter($__internal_651ae1bd5ff85a717b0ad40c6c60dd78d42c28f744aa480cb067ab5c652c5a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_651ae1bd5ff85a717b0ad40c6c60dd78d42c28f744aa480cb067ab5c652c5a46->leave($__internal_651ae1bd5ff85a717b0ad40c6c60dd78d42c28f744aa480cb067ab5c652c5a46_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20bbbc997b4472f62424f8923b05b9bfd32bb70990c5c5f5e77e5aae3ffa812c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bbbc997b4472f62424f8923b05b9bfd32bb70990c5c5f5e77e5aae3ffa812c->enter($__internal_20bbbc997b4472f62424f8923b05b9bfd32bb70990c5c5f5e77e5aae3ffa812c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_20bbbc997b4472f62424f8923b05b9bfd32bb70990c5c5f5e77e5aae3ffa812c->leave($__internal_20bbbc997b4472f62424f8923b05b9bfd32bb70990c5c5f5e77e5aae3ffa812c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c224bc316ff8c832440a4a6e530e47c1c0ef4b49a301bb9741e0e72e1916de35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c224bc316ff8c832440a4a6e530e47c1c0ef4b49a301bb9741e0e72e1916de35->enter($__internal_c224bc316ff8c832440a4a6e530e47c1c0ef4b49a301bb9741e0e72e1916de35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c224bc316ff8c832440a4a6e530e47c1c0ef4b49a301bb9741e0e72e1916de35->leave($__internal_c224bc316ff8c832440a4a6e530e47c1c0ef4b49a301bb9741e0e72e1916de35_prof);

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
