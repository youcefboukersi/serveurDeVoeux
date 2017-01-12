<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6376fd4b39859318ac6d6f84e7acb11769e49c74c0dbb91e6ae173d4294f2e2e extends Twig_Template
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
        $__internal_f5e77e057989fa41aa9eeaf2f8c0592aec658b7e8008d5adc2182dccecdbd3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e77e057989fa41aa9eeaf2f8c0592aec658b7e8008d5adc2182dccecdbd3fe->enter($__internal_f5e77e057989fa41aa9eeaf2f8c0592aec658b7e8008d5adc2182dccecdbd3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f5e77e057989fa41aa9eeaf2f8c0592aec658b7e8008d5adc2182dccecdbd3fe->leave($__internal_f5e77e057989fa41aa9eeaf2f8c0592aec658b7e8008d5adc2182dccecdbd3fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
