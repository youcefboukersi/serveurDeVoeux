<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a4fe64978bc7ea4905b80ec285cb54dc6e1d8ec5fa990779b430c537053a503b extends Twig_Template
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
        $__internal_22534bfa05b6265e14a03d42108290a9eb091177fc30f326440e8d3c554d5b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22534bfa05b6265e14a03d42108290a9eb091177fc30f326440e8d3c554d5b42->enter($__internal_22534bfa05b6265e14a03d42108290a9eb091177fc30f326440e8d3c554d5b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_22534bfa05b6265e14a03d42108290a9eb091177fc30f326440e8d3c554d5b42->leave($__internal_22534bfa05b6265e14a03d42108290a9eb091177fc30f326440e8d3c554d5b42_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
