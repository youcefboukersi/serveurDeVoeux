<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8fc943efae1cea2cf0d6de6816ce8991b098995176a93e7ef3578f9fa95ac497 extends Twig_Template
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
        $__internal_f6b31b9ba57f1d9081ebfd39ea42ec999628f54635fc02e917f435ad42678c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b31b9ba57f1d9081ebfd39ea42ec999628f54635fc02e917f435ad42678c8c->enter($__internal_f6b31b9ba57f1d9081ebfd39ea42ec999628f54635fc02e917f435ad42678c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b31b9ba57f1d9081ebfd39ea42ec999628f54635fc02e917f435ad42678c8c->leave($__internal_f6b31b9ba57f1d9081ebfd39ea42ec999628f54635fc02e917f435ad42678c8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b38c2c6a2cec569e3c9df501fda0a94bde226977cd85ddf52498f9ac67281434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38c2c6a2cec569e3c9df501fda0a94bde226977cd85ddf52498f9ac67281434->enter($__internal_b38c2c6a2cec569e3c9df501fda0a94bde226977cd85ddf52498f9ac67281434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b38c2c6a2cec569e3c9df501fda0a94bde226977cd85ddf52498f9ac67281434->leave($__internal_b38c2c6a2cec569e3c9df501fda0a94bde226977cd85ddf52498f9ac67281434_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db02830622983846c9349b2e11f2d4344ba87bfd7a9f718a2cbc255f5c949d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db02830622983846c9349b2e11f2d4344ba87bfd7a9f718a2cbc255f5c949d9d->enter($__internal_db02830622983846c9349b2e11f2d4344ba87bfd7a9f718a2cbc255f5c949d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_db02830622983846c9349b2e11f2d4344ba87bfd7a9f718a2cbc255f5c949d9d->leave($__internal_db02830622983846c9349b2e11f2d4344ba87bfd7a9f718a2cbc255f5c949d9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_500c281e9a781cd1a48d8d92a1dd3042d01499b7bb2dd51511594d6dc8fce0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500c281e9a781cd1a48d8d92a1dd3042d01499b7bb2dd51511594d6dc8fce0e8->enter($__internal_500c281e9a781cd1a48d8d92a1dd3042d01499b7bb2dd51511594d6dc8fce0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_500c281e9a781cd1a48d8d92a1dd3042d01499b7bb2dd51511594d6dc8fce0e8->leave($__internal_500c281e9a781cd1a48d8d92a1dd3042d01499b7bb2dd51511594d6dc8fce0e8_prof);

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
