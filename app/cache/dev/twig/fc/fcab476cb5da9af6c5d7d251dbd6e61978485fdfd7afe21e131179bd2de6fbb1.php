<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_fb83db60f9144f5949484dcbb5edfff9002752fdba962dda654a551746021441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f76aec09fc89841cd23686bf3255f28931abf93d4649464cd4437e5ea503ccbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76aec09fc89841cd23686bf3255f28931abf93d4649464cd4437e5ea503ccbd->enter($__internal_f76aec09fc89841cd23686bf3255f28931abf93d4649464cd4437e5ea503ccbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f76aec09fc89841cd23686bf3255f28931abf93d4649464cd4437e5ea503ccbd->leave($__internal_f76aec09fc89841cd23686bf3255f28931abf93d4649464cd4437e5ea503ccbd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
