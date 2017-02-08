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
        $__internal_2ce7761d224a8417c6a2c5ea3b52075caa9d253684b39201f7aed15463af91e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce7761d224a8417c6a2c5ea3b52075caa9d253684b39201f7aed15463af91e1->enter($__internal_2ce7761d224a8417c6a2c5ea3b52075caa9d253684b39201f7aed15463af91e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce7761d224a8417c6a2c5ea3b52075caa9d253684b39201f7aed15463af91e1->leave($__internal_2ce7761d224a8417c6a2c5ea3b52075caa9d253684b39201f7aed15463af91e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c009d70428848e3916b006cd808e22ed4d9292c7488a2939650e0a572501f050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c009d70428848e3916b006cd808e22ed4d9292c7488a2939650e0a572501f050->enter($__internal_c009d70428848e3916b006cd808e22ed4d9292c7488a2939650e0a572501f050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c009d70428848e3916b006cd808e22ed4d9292c7488a2939650e0a572501f050->leave($__internal_c009d70428848e3916b006cd808e22ed4d9292c7488a2939650e0a572501f050_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bb96bfcabc6369eaa0ddcce17059efb62fd3ecbf02e6b8587fc7e6e5af84ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb96bfcabc6369eaa0ddcce17059efb62fd3ecbf02e6b8587fc7e6e5af84ab2->enter($__internal_3bb96bfcabc6369eaa0ddcce17059efb62fd3ecbf02e6b8587fc7e6e5af84ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3bb96bfcabc6369eaa0ddcce17059efb62fd3ecbf02e6b8587fc7e6e5af84ab2->leave($__internal_3bb96bfcabc6369eaa0ddcce17059efb62fd3ecbf02e6b8587fc7e6e5af84ab2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca9e0efe9b3b42efb1c5e2b3ac7d42501a0f76682e38a84c0e3a9e3d37130cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9e0efe9b3b42efb1c5e2b3ac7d42501a0f76682e38a84c0e3a9e3d37130cfd->enter($__internal_ca9e0efe9b3b42efb1c5e2b3ac7d42501a0f76682e38a84c0e3a9e3d37130cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca9e0efe9b3b42efb1c5e2b3ac7d42501a0f76682e38a84c0e3a9e3d37130cfd->leave($__internal_ca9e0efe9b3b42efb1c5e2b3ac7d42501a0f76682e38a84c0e3a9e3d37130cfd_prof);

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
