<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d7f55f519441a9e2908a47874182650a074021f2a3f87d5c3841cdf360f1db46 extends Twig_Template
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
        $__internal_4bf9bee6d81760bc009a68821b4c95f08cc18e390feffad9caef5ea6ae76d799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf9bee6d81760bc009a68821b4c95f08cc18e390feffad9caef5ea6ae76d799->enter($__internal_4bf9bee6d81760bc009a68821b4c95f08cc18e390feffad9caef5ea6ae76d799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4bf9bee6d81760bc009a68821b4c95f08cc18e390feffad9caef5ea6ae76d799->leave($__internal_4bf9bee6d81760bc009a68821b4c95f08cc18e390feffad9caef5ea6ae76d799_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
