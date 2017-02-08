<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3c174d3acb398ff3c7720138b255819397c71e5a3147b34366a647b643785bd9 extends Twig_Template
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
        $__internal_116d5356dc5606268e1c220edf5bdde06d5e3176a731bfac0c97bca90da68aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116d5356dc5606268e1c220edf5bdde06d5e3176a731bfac0c97bca90da68aac->enter($__internal_116d5356dc5606268e1c220edf5bdde06d5e3176a731bfac0c97bca90da68aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_116d5356dc5606268e1c220edf5bdde06d5e3176a731bfac0c97bca90da68aac->leave($__internal_116d5356dc5606268e1c220edf5bdde06d5e3176a731bfac0c97bca90da68aac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_72b3b3328343b760b6ed6a9aa70cb0fadfaf278de6ef950ee82b60cb7ac1a6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b3b3328343b760b6ed6a9aa70cb0fadfaf278de6ef950ee82b60cb7ac1a6c3->enter($__internal_72b3b3328343b760b6ed6a9aa70cb0fadfaf278de6ef950ee82b60cb7ac1a6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_72b3b3328343b760b6ed6a9aa70cb0fadfaf278de6ef950ee82b60cb7ac1a6c3->leave($__internal_72b3b3328343b760b6ed6a9aa70cb0fadfaf278de6ef950ee82b60cb7ac1a6c3_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
