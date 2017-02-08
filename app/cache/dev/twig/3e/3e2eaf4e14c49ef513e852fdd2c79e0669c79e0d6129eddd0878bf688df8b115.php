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
        $__internal_5cf79e305a98c09c1d4fd4ce746e0ca94b5f947f60b2b920633a1c10b3b33fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf79e305a98c09c1d4fd4ce746e0ca94b5f947f60b2b920633a1c10b3b33fe1->enter($__internal_5cf79e305a98c09c1d4fd4ce746e0ca94b5f947f60b2b920633a1c10b3b33fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5cf79e305a98c09c1d4fd4ce746e0ca94b5f947f60b2b920633a1c10b3b33fe1->leave($__internal_5cf79e305a98c09c1d4fd4ce746e0ca94b5f947f60b2b920633a1c10b3b33fe1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_18c05bf1a35dbf56404e990727f2679b92ee73092866be2a71b36f834d4dd4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c05bf1a35dbf56404e990727f2679b92ee73092866be2a71b36f834d4dd4a8->enter($__internal_18c05bf1a35dbf56404e990727f2679b92ee73092866be2a71b36f834d4dd4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_18c05bf1a35dbf56404e990727f2679b92ee73092866be2a71b36f834d4dd4a8->leave($__internal_18c05bf1a35dbf56404e990727f2679b92ee73092866be2a71b36f834d4dd4a8_prof);

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
