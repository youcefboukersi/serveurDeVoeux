<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7815f22ca3df55afd62231e296b92bbe5fca02e4b87a566d2672bf374e27014f extends Twig_Template
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
        $__internal_43aa3ffe160e23c0053390c64e8e549e7c49e02ea0b6a0c5a61f15ddc28249b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43aa3ffe160e23c0053390c64e8e549e7c49e02ea0b6a0c5a61f15ddc28249b6->enter($__internal_43aa3ffe160e23c0053390c64e8e549e7c49e02ea0b6a0c5a61f15ddc28249b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_43aa3ffe160e23c0053390c64e8e549e7c49e02ea0b6a0c5a61f15ddc28249b6->leave($__internal_43aa3ffe160e23c0053390c64e8e549e7c49e02ea0b6a0c5a61f15ddc28249b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
