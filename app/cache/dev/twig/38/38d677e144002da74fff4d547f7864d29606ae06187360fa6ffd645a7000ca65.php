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
        $__internal_2cdf47efb5fe922c71475eae4d9b470f695a48804a68b638867b9d721a9d3c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdf47efb5fe922c71475eae4d9b470f695a48804a68b638867b9d721a9d3c61->enter($__internal_2cdf47efb5fe922c71475eae4d9b470f695a48804a68b638867b9d721a9d3c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cdf47efb5fe922c71475eae4d9b470f695a48804a68b638867b9d721a9d3c61->leave($__internal_2cdf47efb5fe922c71475eae4d9b470f695a48804a68b638867b9d721a9d3c61_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a48aa87eddc55d977813f765f6e8df5693df17d4a8dbf2be6fad4d4e642a8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a48aa87eddc55d977813f765f6e8df5693df17d4a8dbf2be6fad4d4e642a8e8->enter($__internal_0a48aa87eddc55d977813f765f6e8df5693df17d4a8dbf2be6fad4d4e642a8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a48aa87eddc55d977813f765f6e8df5693df17d4a8dbf2be6fad4d4e642a8e8->leave($__internal_0a48aa87eddc55d977813f765f6e8df5693df17d4a8dbf2be6fad4d4e642a8e8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33c48c38c84767046dd12e48b6978c4271c44e8b467ae9f60e536a704c85145d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c48c38c84767046dd12e48b6978c4271c44e8b467ae9f60e536a704c85145d->enter($__internal_33c48c38c84767046dd12e48b6978c4271c44e8b467ae9f60e536a704c85145d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33c48c38c84767046dd12e48b6978c4271c44e8b467ae9f60e536a704c85145d->leave($__internal_33c48c38c84767046dd12e48b6978c4271c44e8b467ae9f60e536a704c85145d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e83cb3b25d7d8727ffa90dccaf3e3cecfb485b6e8387270e3ee01d60d0baa041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83cb3b25d7d8727ffa90dccaf3e3cecfb485b6e8387270e3ee01d60d0baa041->enter($__internal_e83cb3b25d7d8727ffa90dccaf3e3cecfb485b6e8387270e3ee01d60d0baa041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e83cb3b25d7d8727ffa90dccaf3e3cecfb485b6e8387270e3ee01d60d0baa041->leave($__internal_e83cb3b25d7d8727ffa90dccaf3e3cecfb485b6e8387270e3ee01d60d0baa041_prof);

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
