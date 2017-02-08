<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_230ce919509bbccbc19b930e4322a47c70d8f2733ee126fca154b7d63c2e7816 extends Twig_Template
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
        $__internal_9c5db9ea774f0b91401f3a1bda2a65548a0344a5e7b8853eab401f666b44e0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5db9ea774f0b91401f3a1bda2a65548a0344a5e7b8853eab401f666b44e0a8->enter($__internal_9c5db9ea774f0b91401f3a1bda2a65548a0344a5e7b8853eab401f666b44e0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_9c5db9ea774f0b91401f3a1bda2a65548a0344a5e7b8853eab401f666b44e0a8->leave($__internal_9c5db9ea774f0b91401f3a1bda2a65548a0344a5e7b8853eab401f666b44e0a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
