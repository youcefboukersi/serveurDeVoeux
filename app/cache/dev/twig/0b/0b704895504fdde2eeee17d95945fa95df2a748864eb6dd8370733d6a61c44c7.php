<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3c307e10d43a5080ed393260173f9315d90dba34cab7420d6f4ca6766c59dee6 extends Twig_Template
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
        $__internal_ff66783b2d0f4d7a7894c17f5b47def626fc3e3f73ea493850199d14571f554a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff66783b2d0f4d7a7894c17f5b47def626fc3e3f73ea493850199d14571f554a->enter($__internal_ff66783b2d0f4d7a7894c17f5b47def626fc3e3f73ea493850199d14571f554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ff66783b2d0f4d7a7894c17f5b47def626fc3e3f73ea493850199d14571f554a->leave($__internal_ff66783b2d0f4d7a7894c17f5b47def626fc3e3f73ea493850199d14571f554a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
