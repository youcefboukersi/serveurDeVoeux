<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e817b9cb3728ebf1c00ee7bbfd2552dbb0ed66c012c3bd2f19055b4babf21568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ddf4c93af37fdf9067eaacb24cce2bc65fe714f520a56f2d7d4c32c8dc33f899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf4c93af37fdf9067eaacb24cce2bc65fe714f520a56f2d7d4c32c8dc33f899->enter($__internal_ddf4c93af37fdf9067eaacb24cce2bc65fe714f520a56f2d7d4c32c8dc33f899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf4c93af37fdf9067eaacb24cce2bc65fe714f520a56f2d7d4c32c8dc33f899->leave($__internal_ddf4c93af37fdf9067eaacb24cce2bc65fe714f520a56f2d7d4c32c8dc33f899_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa28c0d8d12f18d93124b647ebc8a7c67a44808255c34f079c34072dfbbfb7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa28c0d8d12f18d93124b647ebc8a7c67a44808255c34f079c34072dfbbfb7d0->enter($__internal_aa28c0d8d12f18d93124b647ebc8a7c67a44808255c34f079c34072dfbbfb7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa28c0d8d12f18d93124b647ebc8a7c67a44808255c34f079c34072dfbbfb7d0->leave($__internal_aa28c0d8d12f18d93124b647ebc8a7c67a44808255c34f079c34072dfbbfb7d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca067ff4f9133f3358f1c7eca91a529b19fbae5b2824fe3068d1ec34c5365ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca067ff4f9133f3358f1c7eca91a529b19fbae5b2824fe3068d1ec34c5365ba2->enter($__internal_ca067ff4f9133f3358f1c7eca91a529b19fbae5b2824fe3068d1ec34c5365ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca067ff4f9133f3358f1c7eca91a529b19fbae5b2824fe3068d1ec34c5365ba2->leave($__internal_ca067ff4f9133f3358f1c7eca91a529b19fbae5b2824fe3068d1ec34c5365ba2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3ccee6b1807a9120bd31d13dfef760de051fba9150c3b5e507baf2f9b57a3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ccee6b1807a9120bd31d13dfef760de051fba9150c3b5e507baf2f9b57a3ec->enter($__internal_b3ccee6b1807a9120bd31d13dfef760de051fba9150c3b5e507baf2f9b57a3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3ccee6b1807a9120bd31d13dfef760de051fba9150c3b5e507baf2f9b57a3ec->leave($__internal_b3ccee6b1807a9120bd31d13dfef760de051fba9150c3b5e507baf2f9b57a3ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
