<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a38f472d45b4ba75ff8a8830e9b6642a2bc9ddad52e79f6e90a2df4d87c5b550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72f271dc553477e75c1a73bd702602ba6f302769d789d9385a1d7ff02eb91200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f271dc553477e75c1a73bd702602ba6f302769d789d9385a1d7ff02eb91200->enter($__internal_72f271dc553477e75c1a73bd702602ba6f302769d789d9385a1d7ff02eb91200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72f271dc553477e75c1a73bd702602ba6f302769d789d9385a1d7ff02eb91200->leave($__internal_72f271dc553477e75c1a73bd702602ba6f302769d789d9385a1d7ff02eb91200_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21b28d5138243b99fd5596fc163f99b420c039be575ee3ec7bf8617cd39428f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b28d5138243b99fd5596fc163f99b420c039be575ee3ec7bf8617cd39428f4->enter($__internal_21b28d5138243b99fd5596fc163f99b420c039be575ee3ec7bf8617cd39428f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21b28d5138243b99fd5596fc163f99b420c039be575ee3ec7bf8617cd39428f4->leave($__internal_21b28d5138243b99fd5596fc163f99b420c039be575ee3ec7bf8617cd39428f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba34515bc97d6462184534c59afea984dabf97d285a2dc5e718c5005a55a2752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba34515bc97d6462184534c59afea984dabf97d285a2dc5e718c5005a55a2752->enter($__internal_ba34515bc97d6462184534c59afea984dabf97d285a2dc5e718c5005a55a2752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba34515bc97d6462184534c59afea984dabf97d285a2dc5e718c5005a55a2752->leave($__internal_ba34515bc97d6462184534c59afea984dabf97d285a2dc5e718c5005a55a2752_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a38e8ead726eb23056deaf0ef1d68e5d7b1c8e8653e41b6a655051320d4643a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a38e8ead726eb23056deaf0ef1d68e5d7b1c8e8653e41b6a655051320d4643a->enter($__internal_2a38e8ead726eb23056deaf0ef1d68e5d7b1c8e8653e41b6a655051320d4643a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a38e8ead726eb23056deaf0ef1d68e5d7b1c8e8653e41b6a655051320d4643a->leave($__internal_2a38e8ead726eb23056deaf0ef1d68e5d7b1c8e8653e41b6a655051320d4643a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
