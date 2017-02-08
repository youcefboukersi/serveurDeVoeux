<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_446796e8a3367590b67b1b007155deacbc8159a7111702de0e8252f545d8d639 extends Twig_Template
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
        $__internal_72f170aed3edd3bc8516e9abd8fada5319a5b6623ad585b3e88cd06055dbd0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f170aed3edd3bc8516e9abd8fada5319a5b6623ad585b3e88cd06055dbd0f6->enter($__internal_72f170aed3edd3bc8516e9abd8fada5319a5b6623ad585b3e88cd06055dbd0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72f170aed3edd3bc8516e9abd8fada5319a5b6623ad585b3e88cd06055dbd0f6->leave($__internal_72f170aed3edd3bc8516e9abd8fada5319a5b6623ad585b3e88cd06055dbd0f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3de3bd0764fc8bc05105c1c342fd5f7aca90b1bf8d3eac8a512d83cb6f198f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3de3bd0764fc8bc05105c1c342fd5f7aca90b1bf8d3eac8a512d83cb6f198f7->enter($__internal_b3de3bd0764fc8bc05105c1c342fd5f7aca90b1bf8d3eac8a512d83cb6f198f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b3de3bd0764fc8bc05105c1c342fd5f7aca90b1bf8d3eac8a512d83cb6f198f7->leave($__internal_b3de3bd0764fc8bc05105c1c342fd5f7aca90b1bf8d3eac8a512d83cb6f198f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a392c334123455c9bdafe05f82762282d687f0b0f2b5c156a490c6d515802a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a392c334123455c9bdafe05f82762282d687f0b0f2b5c156a490c6d515802a21->enter($__internal_a392c334123455c9bdafe05f82762282d687f0b0f2b5c156a490c6d515802a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a392c334123455c9bdafe05f82762282d687f0b0f2b5c156a490c6d515802a21->leave($__internal_a392c334123455c9bdafe05f82762282d687f0b0f2b5c156a490c6d515802a21_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf295d34a99698a1675dd24a74583cddc71a03a147beaea60171829913a65a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf295d34a99698a1675dd24a74583cddc71a03a147beaea60171829913a65a8a->enter($__internal_bf295d34a99698a1675dd24a74583cddc71a03a147beaea60171829913a65a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bf295d34a99698a1675dd24a74583cddc71a03a147beaea60171829913a65a8a->leave($__internal_bf295d34a99698a1675dd24a74583cddc71a03a147beaea60171829913a65a8a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
