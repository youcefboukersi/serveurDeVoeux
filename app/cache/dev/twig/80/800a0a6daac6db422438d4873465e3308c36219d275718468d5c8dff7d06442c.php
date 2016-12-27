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
        $__internal_b6739ee41a4f74f22cd173e49b15c21cb06b47760214562da387cf5045d943b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6739ee41a4f74f22cd173e49b15c21cb06b47760214562da387cf5045d943b8->enter($__internal_b6739ee41a4f74f22cd173e49b15c21cb06b47760214562da387cf5045d943b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b6739ee41a4f74f22cd173e49b15c21cb06b47760214562da387cf5045d943b8->leave($__internal_b6739ee41a4f74f22cd173e49b15c21cb06b47760214562da387cf5045d943b8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_154ce3d6a8a3468e6d2cd58b7abaa738825c6d8e06a73245b9a3214c99c16e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154ce3d6a8a3468e6d2cd58b7abaa738825c6d8e06a73245b9a3214c99c16e40->enter($__internal_154ce3d6a8a3468e6d2cd58b7abaa738825c6d8e06a73245b9a3214c99c16e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_154ce3d6a8a3468e6d2cd58b7abaa738825c6d8e06a73245b9a3214c99c16e40->leave($__internal_154ce3d6a8a3468e6d2cd58b7abaa738825c6d8e06a73245b9a3214c99c16e40_prof);

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
