<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e8a80dab4bbb9c46286312cf7f47c780b57831b844e72c14afff43e9e0e4866b extends Twig_Template
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
        $__internal_0514233ffc03929e1e2ab4c01d6fd831d444c157e4ac6a4911811c2a05b14bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0514233ffc03929e1e2ab4c01d6fd831d444c157e4ac6a4911811c2a05b14bc7->enter($__internal_0514233ffc03929e1e2ab4c01d6fd831d444c157e4ac6a4911811c2a05b14bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0514233ffc03929e1e2ab4c01d6fd831d444c157e4ac6a4911811c2a05b14bc7->leave($__internal_0514233ffc03929e1e2ab4c01d6fd831d444c157e4ac6a4911811c2a05b14bc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
