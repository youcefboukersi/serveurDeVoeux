<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3a86bfacbe4f9f141d7784aec8448ff62b1124bad8741fd8541c8d17eb091298 extends Twig_Template
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
        $__internal_fb6754eac7a126b91dea6209947fd7ebd18bd312affd692bf5ff2f14dadbd658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6754eac7a126b91dea6209947fd7ebd18bd312affd692bf5ff2f14dadbd658->enter($__internal_fb6754eac7a126b91dea6209947fd7ebd18bd312affd692bf5ff2f14dadbd658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb6754eac7a126b91dea6209947fd7ebd18bd312affd692bf5ff2f14dadbd658->leave($__internal_fb6754eac7a126b91dea6209947fd7ebd18bd312affd692bf5ff2f14dadbd658_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8fe80d0ab55a42e4ac4b0dcd542662ac6491e055472dd3868bbb7b15112ca78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe80d0ab55a42e4ac4b0dcd542662ac6491e055472dd3868bbb7b15112ca78a->enter($__internal_8fe80d0ab55a42e4ac4b0dcd542662ac6491e055472dd3868bbb7b15112ca78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8fe80d0ab55a42e4ac4b0dcd542662ac6491e055472dd3868bbb7b15112ca78a->leave($__internal_8fe80d0ab55a42e4ac4b0dcd542662ac6491e055472dd3868bbb7b15112ca78a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_791ab17f201ae98fe18b9df0ca15d805d6213503c2b191bee8feb63cb21466cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791ab17f201ae98fe18b9df0ca15d805d6213503c2b191bee8feb63cb21466cc->enter($__internal_791ab17f201ae98fe18b9df0ca15d805d6213503c2b191bee8feb63cb21466cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_791ab17f201ae98fe18b9df0ca15d805d6213503c2b191bee8feb63cb21466cc->leave($__internal_791ab17f201ae98fe18b9df0ca15d805d6213503c2b191bee8feb63cb21466cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6868ee2c45dcef48b21cf4a4b2fd8c5eac21fe0c12e8915ee8199b01c493b42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6868ee2c45dcef48b21cf4a4b2fd8c5eac21fe0c12e8915ee8199b01c493b42d->enter($__internal_6868ee2c45dcef48b21cf4a4b2fd8c5eac21fe0c12e8915ee8199b01c493b42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6868ee2c45dcef48b21cf4a4b2fd8c5eac21fe0c12e8915ee8199b01c493b42d->leave($__internal_6868ee2c45dcef48b21cf4a4b2fd8c5eac21fe0c12e8915ee8199b01c493b42d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
