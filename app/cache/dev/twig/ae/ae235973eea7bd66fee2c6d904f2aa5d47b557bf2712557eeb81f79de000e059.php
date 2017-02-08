<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_61ab040451a07f7147b0b163a56407d55610dc46b8c7e7399b4053595bfe5d70 extends Twig_Template
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
        $__internal_9c83567b48026225581eb7c251e9615f20d273d4b9537d25f7a33a6ffda752a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c83567b48026225581eb7c251e9615f20d273d4b9537d25f7a33a6ffda752a8->enter($__internal_9c83567b48026225581eb7c251e9615f20d273d4b9537d25f7a33a6ffda752a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_9c83567b48026225581eb7c251e9615f20d273d4b9537d25f7a33a6ffda752a8->leave($__internal_9c83567b48026225581eb7c251e9615f20d273d4b9537d25f7a33a6ffda752a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
