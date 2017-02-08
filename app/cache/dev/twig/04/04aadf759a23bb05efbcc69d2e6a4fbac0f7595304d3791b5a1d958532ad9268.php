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
        $__internal_112703085a2b357ec0603f1f6056b2539852eca1e0d5a30ebe1956bc5b4c7801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112703085a2b357ec0603f1f6056b2539852eca1e0d5a30ebe1956bc5b4c7801->enter($__internal_112703085a2b357ec0603f1f6056b2539852eca1e0d5a30ebe1956bc5b4c7801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_112703085a2b357ec0603f1f6056b2539852eca1e0d5a30ebe1956bc5b4c7801->leave($__internal_112703085a2b357ec0603f1f6056b2539852eca1e0d5a30ebe1956bc5b4c7801_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3cec38729fb762c3b4b89b300d218ca3d727d266226d15087fb43f4d2bca14b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cec38729fb762c3b4b89b300d218ca3d727d266226d15087fb43f4d2bca14b7->enter($__internal_3cec38729fb762c3b4b89b300d218ca3d727d266226d15087fb43f4d2bca14b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3cec38729fb762c3b4b89b300d218ca3d727d266226d15087fb43f4d2bca14b7->leave($__internal_3cec38729fb762c3b4b89b300d218ca3d727d266226d15087fb43f4d2bca14b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01d03fe0c5a679e0abbbda1946998fecd5524cd51b80d079022a699d30475ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d03fe0c5a679e0abbbda1946998fecd5524cd51b80d079022a699d30475ee1->enter($__internal_01d03fe0c5a679e0abbbda1946998fecd5524cd51b80d079022a699d30475ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_01d03fe0c5a679e0abbbda1946998fecd5524cd51b80d079022a699d30475ee1->leave($__internal_01d03fe0c5a679e0abbbda1946998fecd5524cd51b80d079022a699d30475ee1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de81558ee76941033d54b57bb8918e6d5a4c6ff88fc9048fbcfb8fafbbb99210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de81558ee76941033d54b57bb8918e6d5a4c6ff88fc9048fbcfb8fafbbb99210->enter($__internal_de81558ee76941033d54b57bb8918e6d5a4c6ff88fc9048fbcfb8fafbbb99210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de81558ee76941033d54b57bb8918e6d5a4c6ff88fc9048fbcfb8fafbbb99210->leave($__internal_de81558ee76941033d54b57bb8918e6d5a4c6ff88fc9048fbcfb8fafbbb99210_prof);

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
