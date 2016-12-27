<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fcb4f5060390b340d702ed8d10405d6da2b11cc93fd9bbe743b53e635d16041 extends Twig_Template
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
        $__internal_f038f4055600f53e7a99beae258938953cc4997d0f07bc2a88f98633d0029cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f038f4055600f53e7a99beae258938953cc4997d0f07bc2a88f98633d0029cbc->enter($__internal_f038f4055600f53e7a99beae258938953cc4997d0f07bc2a88f98633d0029cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f038f4055600f53e7a99beae258938953cc4997d0f07bc2a88f98633d0029cbc->leave($__internal_f038f4055600f53e7a99beae258938953cc4997d0f07bc2a88f98633d0029cbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84ee3edc1a7d76b19ba8a6d7b3d5879fbd7dc010ee836c44094fb88ff3bbb8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ee3edc1a7d76b19ba8a6d7b3d5879fbd7dc010ee836c44094fb88ff3bbb8a2->enter($__internal_84ee3edc1a7d76b19ba8a6d7b3d5879fbd7dc010ee836c44094fb88ff3bbb8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_84ee3edc1a7d76b19ba8a6d7b3d5879fbd7dc010ee836c44094fb88ff3bbb8a2->leave($__internal_84ee3edc1a7d76b19ba8a6d7b3d5879fbd7dc010ee836c44094fb88ff3bbb8a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_402dae73f13cfeafde3c97889dfc26fd3e015c44efb0381f46476340802f742d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402dae73f13cfeafde3c97889dfc26fd3e015c44efb0381f46476340802f742d->enter($__internal_402dae73f13cfeafde3c97889dfc26fd3e015c44efb0381f46476340802f742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_402dae73f13cfeafde3c97889dfc26fd3e015c44efb0381f46476340802f742d->leave($__internal_402dae73f13cfeafde3c97889dfc26fd3e015c44efb0381f46476340802f742d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_afafa9d9c2a3e05342974c5cb6a3ac8bea7ed2e2f5e8b88cc54faee0a1cf947f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afafa9d9c2a3e05342974c5cb6a3ac8bea7ed2e2f5e8b88cc54faee0a1cf947f->enter($__internal_afafa9d9c2a3e05342974c5cb6a3ac8bea7ed2e2f5e8b88cc54faee0a1cf947f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_afafa9d9c2a3e05342974c5cb6a3ac8bea7ed2e2f5e8b88cc54faee0a1cf947f->leave($__internal_afafa9d9c2a3e05342974c5cb6a3ac8bea7ed2e2f5e8b88cc54faee0a1cf947f_prof);

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
", "@Twig/Exception/exception_full.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
