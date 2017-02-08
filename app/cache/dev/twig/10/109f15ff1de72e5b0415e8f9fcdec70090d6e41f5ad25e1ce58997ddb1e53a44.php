<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_28406d81934c99ad39d3a44ca0e9dc1d19d80c7ee9cd81fa352a10f32e129c52 extends Twig_Template
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
        $__internal_e061f34d71fb9e12e676176946694dc85149c3236db0b80007e45ed62b8fb43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e061f34d71fb9e12e676176946694dc85149c3236db0b80007e45ed62b8fb43a->enter($__internal_e061f34d71fb9e12e676176946694dc85149c3236db0b80007e45ed62b8fb43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e061f34d71fb9e12e676176946694dc85149c3236db0b80007e45ed62b8fb43a->leave($__internal_e061f34d71fb9e12e676176946694dc85149c3236db0b80007e45ed62b8fb43a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
