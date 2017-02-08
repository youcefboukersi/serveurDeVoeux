<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_07d999982fa2eb361dbb5be524c2ac30feb4f0a6b9e68006ee9dc361e5764333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16a64d5dc4e69bed491958922d44d8972cef555615c058c01627b017454a00b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a64d5dc4e69bed491958922d44d8972cef555615c058c01627b017454a00b9->enter($__internal_16a64d5dc4e69bed491958922d44d8972cef555615c058c01627b017454a00b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_16a64d5dc4e69bed491958922d44d8972cef555615c058c01627b017454a00b9->leave($__internal_16a64d5dc4e69bed491958922d44d8972cef555615c058c01627b017454a00b9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bfe5d1da3367a572d31f14042cac7da2921f6a48c9b14722e08d013d758ae907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe5d1da3367a572d31f14042cac7da2921f6a48c9b14722e08d013d758ae907->enter($__internal_bfe5d1da3367a572d31f14042cac7da2921f6a48c9b14722e08d013d758ae907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bfe5d1da3367a572d31f14042cac7da2921f6a48c9b14722e08d013d758ae907->leave($__internal_bfe5d1da3367a572d31f14042cac7da2921f6a48c9b14722e08d013d758ae907_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
