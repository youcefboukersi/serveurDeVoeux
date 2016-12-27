<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0141ade274d012aa56154af1888f03b0a9f1c749b7a8111e002151ffb49c071a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_7b5fbab60a3de935ae69dc995c08a306bdb166098f6826941f703181171d5618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5fbab60a3de935ae69dc995c08a306bdb166098f6826941f703181171d5618->enter($__internal_7b5fbab60a3de935ae69dc995c08a306bdb166098f6826941f703181171d5618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5fbab60a3de935ae69dc995c08a306bdb166098f6826941f703181171d5618->leave($__internal_7b5fbab60a3de935ae69dc995c08a306bdb166098f6826941f703181171d5618_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_329401622455da99806c9f202ddd4a542b456792188a9dea3b8e2c140c050df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329401622455da99806c9f202ddd4a542b456792188a9dea3b8e2c140c050df1->enter($__internal_329401622455da99806c9f202ddd4a542b456792188a9dea3b8e2c140c050df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_329401622455da99806c9f202ddd4a542b456792188a9dea3b8e2c140c050df1->leave($__internal_329401622455da99806c9f202ddd4a542b456792188a9dea3b8e2c140c050df1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
