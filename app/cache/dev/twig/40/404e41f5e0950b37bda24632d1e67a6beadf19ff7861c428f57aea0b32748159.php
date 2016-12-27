<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_dd45c889146453ef271b95d71c7f69ae887082f2b2052fbff9002b9ac7212979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_62e0d24997739bba966356e9b5b774dc86d5b19640b1b3bd6b7edf57c16b62ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e0d24997739bba966356e9b5b774dc86d5b19640b1b3bd6b7edf57c16b62ad->enter($__internal_62e0d24997739bba966356e9b5b774dc86d5b19640b1b3bd6b7edf57c16b62ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62e0d24997739bba966356e9b5b774dc86d5b19640b1b3bd6b7edf57c16b62ad->leave($__internal_62e0d24997739bba966356e9b5b774dc86d5b19640b1b3bd6b7edf57c16b62ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51d1ebce9349a1b3702590b3ce3df7f5a4232b87e5dac36bf071bac294eed781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d1ebce9349a1b3702590b3ce3df7f5a4232b87e5dac36bf071bac294eed781->enter($__internal_51d1ebce9349a1b3702590b3ce3df7f5a4232b87e5dac36bf071bac294eed781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_51d1ebce9349a1b3702590b3ce3df7f5a4232b87e5dac36bf071bac294eed781->leave($__internal_51d1ebce9349a1b3702590b3ce3df7f5a4232b87e5dac36bf071bac294eed781_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
