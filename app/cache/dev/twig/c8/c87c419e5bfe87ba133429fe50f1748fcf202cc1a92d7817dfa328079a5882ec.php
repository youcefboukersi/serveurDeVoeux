<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3df6a0372fc8469df5d249c9b5463c991443d374edf92a299ac2f76514ccf082 extends Twig_Template
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
        $__internal_3e30b711f47731654438581d2db85f9034970ed6978b42e5ef0a13ae6b2b9641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e30b711f47731654438581d2db85f9034970ed6978b42e5ef0a13ae6b2b9641->enter($__internal_3e30b711f47731654438581d2db85f9034970ed6978b42e5ef0a13ae6b2b9641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e30b711f47731654438581d2db85f9034970ed6978b42e5ef0a13ae6b2b9641->leave($__internal_3e30b711f47731654438581d2db85f9034970ed6978b42e5ef0a13ae6b2b9641_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e97309d5f8439baacfbca7f1468ca0c8c735a99b304e72ac338281f03801f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e97309d5f8439baacfbca7f1468ca0c8c735a99b304e72ac338281f03801f44->enter($__internal_9e97309d5f8439baacfbca7f1468ca0c8c735a99b304e72ac338281f03801f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9e97309d5f8439baacfbca7f1468ca0c8c735a99b304e72ac338281f03801f44->leave($__internal_9e97309d5f8439baacfbca7f1468ca0c8c735a99b304e72ac338281f03801f44_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d75a09343ca1bfb1c3450f5b1c308d26c7894c6f93f46410d8c853c6183127e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d75a09343ca1bfb1c3450f5b1c308d26c7894c6f93f46410d8c853c6183127e->enter($__internal_1d75a09343ca1bfb1c3450f5b1c308d26c7894c6f93f46410d8c853c6183127e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d75a09343ca1bfb1c3450f5b1c308d26c7894c6f93f46410d8c853c6183127e->leave($__internal_1d75a09343ca1bfb1c3450f5b1c308d26c7894c6f93f46410d8c853c6183127e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9eb3a47e63b2572c568b57aa8a4c3a01641cac29cfa34378d9539cc785c428f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb3a47e63b2572c568b57aa8a4c3a01641cac29cfa34378d9539cc785c428f1->enter($__internal_9eb3a47e63b2572c568b57aa8a4c3a01641cac29cfa34378d9539cc785c428f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9eb3a47e63b2572c568b57aa8a4c3a01641cac29cfa34378d9539cc785c428f1->leave($__internal_9eb3a47e63b2572c568b57aa8a4c3a01641cac29cfa34378d9539cc785c428f1_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
