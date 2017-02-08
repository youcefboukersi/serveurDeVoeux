<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f401747226d9f31e50c9edfe371b05bd3d25bd47e0cf2d4660062223e43b63f4 extends Twig_Template
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
        $__internal_373b932e126a4b78acc42f3a406e58e18465a9645050dcf06e3a03d4af47e3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373b932e126a4b78acc42f3a406e58e18465a9645050dcf06e3a03d4af47e3e2->enter($__internal_373b932e126a4b78acc42f3a406e58e18465a9645050dcf06e3a03d4af47e3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_373b932e126a4b78acc42f3a406e58e18465a9645050dcf06e3a03d4af47e3e2->leave($__internal_373b932e126a4b78acc42f3a406e58e18465a9645050dcf06e3a03d4af47e3e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fab7d53e17134379baf10d1985db0a6ef9bf126b78f34e44cc63d828e7c10829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab7d53e17134379baf10d1985db0a6ef9bf126b78f34e44cc63d828e7c10829->enter($__internal_fab7d53e17134379baf10d1985db0a6ef9bf126b78f34e44cc63d828e7c10829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fab7d53e17134379baf10d1985db0a6ef9bf126b78f34e44cc63d828e7c10829->leave($__internal_fab7d53e17134379baf10d1985db0a6ef9bf126b78f34e44cc63d828e7c10829_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8334cc464fac42d90f79ebc1af9aeaef0d886d6f3ec17836940cc0e8fab028a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8334cc464fac42d90f79ebc1af9aeaef0d886d6f3ec17836940cc0e8fab028a2->enter($__internal_8334cc464fac42d90f79ebc1af9aeaef0d886d6f3ec17836940cc0e8fab028a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8334cc464fac42d90f79ebc1af9aeaef0d886d6f3ec17836940cc0e8fab028a2->leave($__internal_8334cc464fac42d90f79ebc1af9aeaef0d886d6f3ec17836940cc0e8fab028a2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a64234ed5721b023194ba4b186488fbb51dd4907989597600965bc66c947895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a64234ed5721b023194ba4b186488fbb51dd4907989597600965bc66c947895->enter($__internal_9a64234ed5721b023194ba4b186488fbb51dd4907989597600965bc66c947895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9a64234ed5721b023194ba4b186488fbb51dd4907989597600965bc66c947895->leave($__internal_9a64234ed5721b023194ba4b186488fbb51dd4907989597600965bc66c947895_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
