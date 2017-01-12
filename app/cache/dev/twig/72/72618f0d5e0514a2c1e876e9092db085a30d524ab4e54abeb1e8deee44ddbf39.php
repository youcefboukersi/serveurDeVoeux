<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_5424ce620a255fd2bd1ff5dd4d2d7dd5fbe096c96a3983d9f7441eddfa1fd1c6 extends Twig_Template
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
        $__internal_775bbce27e30bd8062a5051e06f0d8b0cca29df463862f16c90cf5d031b36239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775bbce27e30bd8062a5051e06f0d8b0cca29df463862f16c90cf5d031b36239->enter($__internal_775bbce27e30bd8062a5051e06f0d8b0cca29df463862f16c90cf5d031b36239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_775bbce27e30bd8062a5051e06f0d8b0cca29df463862f16c90cf5d031b36239->leave($__internal_775bbce27e30bd8062a5051e06f0d8b0cca29df463862f16c90cf5d031b36239_prof);

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
", "@Twig/Exception/error.atom.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
