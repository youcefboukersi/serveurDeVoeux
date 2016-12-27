<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_d96963f3c9bb3ea004921044df9974dccc29f6c36570a924427b7c2f1695f88e extends Twig_Template
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
        $__internal_4d339d43ed72e25a9612b8c914b5be68d83fb918c0904f7d0cd24686c6c5b055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d339d43ed72e25a9612b8c914b5be68d83fb918c0904f7d0cd24686c6c5b055->enter($__internal_4d339d43ed72e25a9612b8c914b5be68d83fb918c0904f7d0cd24686c6c5b055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_4d339d43ed72e25a9612b8c914b5be68d83fb918c0904f7d0cd24686c6c5b055->leave($__internal_4d339d43ed72e25a9612b8c914b5be68d83fb918c0904f7d0cd24686c6c5b055_prof);

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
", "@Twig/Exception/error.rdf.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
