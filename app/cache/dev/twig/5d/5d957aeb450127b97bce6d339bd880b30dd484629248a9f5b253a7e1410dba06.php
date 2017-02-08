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
        $__internal_d5747f8df1a63947c0f6796b8b5665f694ddcfcc69022c85845a38b7a486d315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5747f8df1a63947c0f6796b8b5665f694ddcfcc69022c85845a38b7a486d315->enter($__internal_d5747f8df1a63947c0f6796b8b5665f694ddcfcc69022c85845a38b7a486d315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d5747f8df1a63947c0f6796b8b5665f694ddcfcc69022c85845a38b7a486d315->leave($__internal_d5747f8df1a63947c0f6796b8b5665f694ddcfcc69022c85845a38b7a486d315_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c43d4da2d532dd0a8834676c3bda56c7d7eb758faa21ceabcc0f154c9119685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c43d4da2d532dd0a8834676c3bda56c7d7eb758faa21ceabcc0f154c9119685->enter($__internal_9c43d4da2d532dd0a8834676c3bda56c7d7eb758faa21ceabcc0f154c9119685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9c43d4da2d532dd0a8834676c3bda56c7d7eb758faa21ceabcc0f154c9119685->leave($__internal_9c43d4da2d532dd0a8834676c3bda56c7d7eb758faa21ceabcc0f154c9119685_prof);

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
