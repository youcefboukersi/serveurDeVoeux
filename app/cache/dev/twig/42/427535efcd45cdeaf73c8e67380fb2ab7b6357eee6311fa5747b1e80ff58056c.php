<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_35a315d3588ae80d8faaa458f4eeeeb0774b9d8c7dabbd576bd23e4bcd0302b0 extends Twig_Template
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
        $__internal_e01ce5a80bd4f839f70dbde2c523641c720576ccafb7fd08b210964e76e2c854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01ce5a80bd4f839f70dbde2c523641c720576ccafb7fd08b210964e76e2c854->enter($__internal_e01ce5a80bd4f839f70dbde2c523641c720576ccafb7fd08b210964e76e2c854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e01ce5a80bd4f839f70dbde2c523641c720576ccafb7fd08b210964e76e2c854->leave($__internal_e01ce5a80bd4f839f70dbde2c523641c720576ccafb7fd08b210964e76e2c854_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
