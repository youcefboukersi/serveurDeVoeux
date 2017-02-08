<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_2cf6706bac556ed3d0485cf81af7ef4a6b2e41902587dcd857441b6eaef4231f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_75680d50913648299f63d0b39733ad04706b7f978ab9e0cb3bd619083c1e96fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75680d50913648299f63d0b39733ad04706b7f978ab9e0cb3bd619083c1e96fe->enter($__internal_75680d50913648299f63d0b39733ad04706b7f978ab9e0cb3bd619083c1e96fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75680d50913648299f63d0b39733ad04706b7f978ab9e0cb3bd619083c1e96fe->leave($__internal_75680d50913648299f63d0b39733ad04706b7f978ab9e0cb3bd619083c1e96fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_634c0700c536269ab7bb841b6041979e82163499ec5d9b1ba6575bdd6e3a5547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634c0700c536269ab7bb841b6041979e82163499ec5d9b1ba6575bdd6e3a5547->enter($__internal_634c0700c536269ab7bb841b6041979e82163499ec5d9b1ba6575bdd6e3a5547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_634c0700c536269ab7bb841b6041979e82163499ec5d9b1ba6575bdd6e3a5547->leave($__internal_634c0700c536269ab7bb841b6041979e82163499ec5d9b1ba6575bdd6e3a5547_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
