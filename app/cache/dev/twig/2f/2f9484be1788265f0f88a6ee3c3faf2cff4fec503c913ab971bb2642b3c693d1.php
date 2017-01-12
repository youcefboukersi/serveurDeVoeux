<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_56a07201472ac2c417dd77eef8aab2774efab007c921d744443eaac2a8af78d6 extends Twig_Template
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
        $__internal_e89c122a809f1417705660f992caa6f3015aa887c2435fa9185b1f4d23cef884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89c122a809f1417705660f992caa6f3015aa887c2435fa9185b1f4d23cef884->enter($__internal_e89c122a809f1417705660f992caa6f3015aa887c2435fa9185b1f4d23cef884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e89c122a809f1417705660f992caa6f3015aa887c2435fa9185b1f4d23cef884->leave($__internal_e89c122a809f1417705660f992caa6f3015aa887c2435fa9185b1f4d23cef884_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82d6fe7d60468c083213021ecc60fc0e506b100f2f26ae9632879d6559262586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d6fe7d60468c083213021ecc60fc0e506b100f2f26ae9632879d6559262586->enter($__internal_82d6fe7d60468c083213021ecc60fc0e506b100f2f26ae9632879d6559262586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_82d6fe7d60468c083213021ecc60fc0e506b100f2f26ae9632879d6559262586->leave($__internal_82d6fe7d60468c083213021ecc60fc0e506b100f2f26ae9632879d6559262586_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a84c5a1e993c13aa39a78fff5f6a93d49061e4bbb2dc3376dd0e7a794a96f56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84c5a1e993c13aa39a78fff5f6a93d49061e4bbb2dc3376dd0e7a794a96f56a->enter($__internal_a84c5a1e993c13aa39a78fff5f6a93d49061e4bbb2dc3376dd0e7a794a96f56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a84c5a1e993c13aa39a78fff5f6a93d49061e4bbb2dc3376dd0e7a794a96f56a->leave($__internal_a84c5a1e993c13aa39a78fff5f6a93d49061e4bbb2dc3376dd0e7a794a96f56a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bccde74a4bcec2232209cae80e34508491da3af06160ffe863dff75f37f0bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bccde74a4bcec2232209cae80e34508491da3af06160ffe863dff75f37f0bad->enter($__internal_9bccde74a4bcec2232209cae80e34508491da3af06160ffe863dff75f37f0bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9bccde74a4bcec2232209cae80e34508491da3af06160ffe863dff75f37f0bad->leave($__internal_9bccde74a4bcec2232209cae80e34508491da3af06160ffe863dff75f37f0bad_prof);

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
