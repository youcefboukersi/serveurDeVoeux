<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_523c28e50577689ecf312a1be58fec3e1ee998783355d07b163f0d63a3f195b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d08e3ea1768db8c71738c0282901d19bb30fffd6e4d500760649b9093b61321a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08e3ea1768db8c71738c0282901d19bb30fffd6e4d500760649b9093b61321a->enter($__internal_d08e3ea1768db8c71738c0282901d19bb30fffd6e4d500760649b9093b61321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08e3ea1768db8c71738c0282901d19bb30fffd6e4d500760649b9093b61321a->leave($__internal_d08e3ea1768db8c71738c0282901d19bb30fffd6e4d500760649b9093b61321a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_421bd22f05040fa54e1b732e3bc1cfc85eb1c4bd00e50cf75e42656e24149934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421bd22f05040fa54e1b732e3bc1cfc85eb1c4bd00e50cf75e42656e24149934->enter($__internal_421bd22f05040fa54e1b732e3bc1cfc85eb1c4bd00e50cf75e42656e24149934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_421bd22f05040fa54e1b732e3bc1cfc85eb1c4bd00e50cf75e42656e24149934->leave($__internal_421bd22f05040fa54e1b732e3bc1cfc85eb1c4bd00e50cf75e42656e24149934_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
