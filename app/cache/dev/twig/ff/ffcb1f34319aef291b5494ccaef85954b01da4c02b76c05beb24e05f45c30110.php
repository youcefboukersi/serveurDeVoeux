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
        $__internal_707c2550636a8e4eea5e6548c3b47afb2911b16e040fb3dea6c206fbf7251e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707c2550636a8e4eea5e6548c3b47afb2911b16e040fb3dea6c206fbf7251e57->enter($__internal_707c2550636a8e4eea5e6548c3b47afb2911b16e040fb3dea6c206fbf7251e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707c2550636a8e4eea5e6548c3b47afb2911b16e040fb3dea6c206fbf7251e57->leave($__internal_707c2550636a8e4eea5e6548c3b47afb2911b16e040fb3dea6c206fbf7251e57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cc00b1444d39ffe4421de7d7ef9c11f0eccb3545d689d0e9723403a7c442c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc00b1444d39ffe4421de7d7ef9c11f0eccb3545d689d0e9723403a7c442c2e->enter($__internal_7cc00b1444d39ffe4421de7d7ef9c11f0eccb3545d689d0e9723403a7c442c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7cc00b1444d39ffe4421de7d7ef9c11f0eccb3545d689d0e9723403a7c442c2e->leave($__internal_7cc00b1444d39ffe4421de7d7ef9c11f0eccb3545d689d0e9723403a7c442c2e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b039318c4e9ce3461236d5c71bcecbfdfffd3757d1f1a45a74d81c68b83281b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b039318c4e9ce3461236d5c71bcecbfdfffd3757d1f1a45a74d81c68b83281b->enter($__internal_3b039318c4e9ce3461236d5c71bcecbfdfffd3757d1f1a45a74d81c68b83281b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b039318c4e9ce3461236d5c71bcecbfdfffd3757d1f1a45a74d81c68b83281b->leave($__internal_3b039318c4e9ce3461236d5c71bcecbfdfffd3757d1f1a45a74d81c68b83281b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2f9e5c0f296bae5d28ea4e715c801d635eaf25aec3f203b1bc0df561c5fd601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f9e5c0f296bae5d28ea4e715c801d635eaf25aec3f203b1bc0df561c5fd601->enter($__internal_c2f9e5c0f296bae5d28ea4e715c801d635eaf25aec3f203b1bc0df561c5fd601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c2f9e5c0f296bae5d28ea4e715c801d635eaf25aec3f203b1bc0df561c5fd601->leave($__internal_c2f9e5c0f296bae5d28ea4e715c801d635eaf25aec3f203b1bc0df561c5fd601_prof);

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
