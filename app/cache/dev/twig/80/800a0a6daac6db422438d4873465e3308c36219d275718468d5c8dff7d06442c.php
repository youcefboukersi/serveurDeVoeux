<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9cd1749b78c28a51dfef1de3570201e464c6477c9a181fefeb14454c521eba3e extends Twig_Template
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
        $__internal_eb101891d80602a22ea022ec4a2b43d13e3eadc42023c375aa65e937817af759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb101891d80602a22ea022ec4a2b43d13e3eadc42023c375aa65e937817af759->enter($__internal_eb101891d80602a22ea022ec4a2b43d13e3eadc42023c375aa65e937817af759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eb101891d80602a22ea022ec4a2b43d13e3eadc42023c375aa65e937817af759->leave($__internal_eb101891d80602a22ea022ec4a2b43d13e3eadc42023c375aa65e937817af759_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_48c247f38f8a7ff15894e6160a7222232712d8a4750fa1209e4787c0c5968815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c247f38f8a7ff15894e6160a7222232712d8a4750fa1209e4787c0c5968815->enter($__internal_48c247f38f8a7ff15894e6160a7222232712d8a4750fa1209e4787c0c5968815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_48c247f38f8a7ff15894e6160a7222232712d8a4750fa1209e4787c0c5968815->leave($__internal_48c247f38f8a7ff15894e6160a7222232712d8a4750fa1209e4787c0c5968815_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
