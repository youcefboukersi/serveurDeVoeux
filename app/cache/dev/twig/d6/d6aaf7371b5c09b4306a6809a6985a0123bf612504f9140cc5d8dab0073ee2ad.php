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
        $__internal_c1b1e2fc407df062d566a814e71f5c6e4f78b66672da43efe0b5880f51040178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b1e2fc407df062d566a814e71f5c6e4f78b66672da43efe0b5880f51040178->enter($__internal_c1b1e2fc407df062d566a814e71f5c6e4f78b66672da43efe0b5880f51040178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1b1e2fc407df062d566a814e71f5c6e4f78b66672da43efe0b5880f51040178->leave($__internal_c1b1e2fc407df062d566a814e71f5c6e4f78b66672da43efe0b5880f51040178_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_962e387c1b9b325bbda87ff8c3d03d765485090bd3a68c9324e94735c1bd7a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962e387c1b9b325bbda87ff8c3d03d765485090bd3a68c9324e94735c1bd7a87->enter($__internal_962e387c1b9b325bbda87ff8c3d03d765485090bd3a68c9324e94735c1bd7a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_962e387c1b9b325bbda87ff8c3d03d765485090bd3a68c9324e94735c1bd7a87->leave($__internal_962e387c1b9b325bbda87ff8c3d03d765485090bd3a68c9324e94735c1bd7a87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fff371a25ad7e91e589de10f41427d2a9387c0d5e849df904ff10c596666f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fff371a25ad7e91e589de10f41427d2a9387c0d5e849df904ff10c596666f46->enter($__internal_1fff371a25ad7e91e589de10f41427d2a9387c0d5e849df904ff10c596666f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1fff371a25ad7e91e589de10f41427d2a9387c0d5e849df904ff10c596666f46->leave($__internal_1fff371a25ad7e91e589de10f41427d2a9387c0d5e849df904ff10c596666f46_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cceb6e584b925c942b0df4b4ebafc9cbc06e127d18975d1bee03242906804c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cceb6e584b925c942b0df4b4ebafc9cbc06e127d18975d1bee03242906804c5->enter($__internal_1cceb6e584b925c942b0df4b4ebafc9cbc06e127d18975d1bee03242906804c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1cceb6e584b925c942b0df4b4ebafc9cbc06e127d18975d1bee03242906804c5->leave($__internal_1cceb6e584b925c942b0df4b4ebafc9cbc06e127d18975d1bee03242906804c5_prof);

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
