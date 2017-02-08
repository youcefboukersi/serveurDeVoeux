<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_13e950efc50f9a9979a25a0dfa4a60d4a557bf28df4e5de577feaf678a199693 extends Twig_Template
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
        $__internal_e9b95a614d98878eb7015308650c0fd2eabbb11ade4b0f554f431b53309cb0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b95a614d98878eb7015308650c0fd2eabbb11ade4b0f554f431b53309cb0ca->enter($__internal_e9b95a614d98878eb7015308650c0fd2eabbb11ade4b0f554f431b53309cb0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e9b95a614d98878eb7015308650c0fd2eabbb11ade4b0f554f431b53309cb0ca->leave($__internal_e9b95a614d98878eb7015308650c0fd2eabbb11ade4b0f554f431b53309cb0ca_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
