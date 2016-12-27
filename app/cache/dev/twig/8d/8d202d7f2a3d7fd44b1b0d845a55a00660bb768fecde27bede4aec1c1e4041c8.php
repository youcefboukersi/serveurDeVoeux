<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_eaf35c7aa8325a329974189ea809d869b2c9ff9aa355016f33e2f733a0947dbf extends Twig_Template
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
        $__internal_826647a5c674ea8ca2426d3d5f9b99e7b84468b4b73c0f0e401b58544f6c0ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826647a5c674ea8ca2426d3d5f9b99e7b84468b4b73c0f0e401b58544f6c0ac5->enter($__internal_826647a5c674ea8ca2426d3d5f9b99e7b84468b4b73c0f0e401b58544f6c0ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_826647a5c674ea8ca2426d3d5f9b99e7b84468b4b73c0f0e401b58544f6c0ac5->leave($__internal_826647a5c674ea8ca2426d3d5f9b99e7b84468b4b73c0f0e401b58544f6c0ac5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1c50b02f3524e43ecaddab37177e885f943f410f003ebea3ced0746184d99a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c50b02f3524e43ecaddab37177e885f943f410f003ebea3ced0746184d99a5->enter($__internal_a1c50b02f3524e43ecaddab37177e885f943f410f003ebea3ced0746184d99a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a1c50b02f3524e43ecaddab37177e885f943f410f003ebea3ced0746184d99a5->leave($__internal_a1c50b02f3524e43ecaddab37177e885f943f410f003ebea3ced0746184d99a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
