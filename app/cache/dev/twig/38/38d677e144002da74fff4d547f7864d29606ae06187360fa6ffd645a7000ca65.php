<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_646b0c6c667f22414fc84c4633984168dafd4413e3706f98b0ffb34c2bf7f860 extends Twig_Template
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
        $__internal_f422c51598f08cf682f2833dc6462966455bbd40cc4b6b46e474a856a38183dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f422c51598f08cf682f2833dc6462966455bbd40cc4b6b46e474a856a38183dd->enter($__internal_f422c51598f08cf682f2833dc6462966455bbd40cc4b6b46e474a856a38183dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f422c51598f08cf682f2833dc6462966455bbd40cc4b6b46e474a856a38183dd->leave($__internal_f422c51598f08cf682f2833dc6462966455bbd40cc4b6b46e474a856a38183dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b28c194d343558b3fb2ba778c8f659c3be75c1bdae5383738581d23dff2df8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b28c194d343558b3fb2ba778c8f659c3be75c1bdae5383738581d23dff2df8d->enter($__internal_4b28c194d343558b3fb2ba778c8f659c3be75c1bdae5383738581d23dff2df8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b28c194d343558b3fb2ba778c8f659c3be75c1bdae5383738581d23dff2df8d->leave($__internal_4b28c194d343558b3fb2ba778c8f659c3be75c1bdae5383738581d23dff2df8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e606864abf685db73a1cedca5c38c936c083cbce7b9dde0d077cea3d1c2039d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e606864abf685db73a1cedca5c38c936c083cbce7b9dde0d077cea3d1c2039d0->enter($__internal_e606864abf685db73a1cedca5c38c936c083cbce7b9dde0d077cea3d1c2039d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e606864abf685db73a1cedca5c38c936c083cbce7b9dde0d077cea3d1c2039d0->leave($__internal_e606864abf685db73a1cedca5c38c936c083cbce7b9dde0d077cea3d1c2039d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63b9109935d56cec5cfda0c97d59408a868b942752579caa96a220cb09b3d805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b9109935d56cec5cfda0c97d59408a868b942752579caa96a220cb09b3d805->enter($__internal_63b9109935d56cec5cfda0c97d59408a868b942752579caa96a220cb09b3d805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63b9109935d56cec5cfda0c97d59408a868b942752579caa96a220cb09b3d805->leave($__internal_63b9109935d56cec5cfda0c97d59408a868b942752579caa96a220cb09b3d805_prof);

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
