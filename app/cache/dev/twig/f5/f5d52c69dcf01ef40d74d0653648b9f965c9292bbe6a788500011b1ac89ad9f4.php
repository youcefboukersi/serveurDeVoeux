<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_a73cd9b2ae87cf9a2191bc749a8456986a4e7232d9231e83c0505e6d8389b6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_25161b150a274a2d1dbd5b4c44d2987133d9fdd42ea2fdf15913670c13421c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25161b150a274a2d1dbd5b4c44d2987133d9fdd42ea2fdf15913670c13421c1c->enter($__internal_25161b150a274a2d1dbd5b4c44d2987133d9fdd42ea2fdf15913670c13421c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25161b150a274a2d1dbd5b4c44d2987133d9fdd42ea2fdf15913670c13421c1c->leave($__internal_25161b150a274a2d1dbd5b4c44d2987133d9fdd42ea2fdf15913670c13421c1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a0633995bc32b707e49eb50ef7eb2a06029077723cf45e1418b33c5c09e25ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0633995bc32b707e49eb50ef7eb2a06029077723cf45e1418b33c5c09e25ab->enter($__internal_7a0633995bc32b707e49eb50ef7eb2a06029077723cf45e1418b33c5c09e25ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7a0633995bc32b707e49eb50ef7eb2a06029077723cf45e1418b33c5c09e25ab->leave($__internal_7a0633995bc32b707e49eb50ef7eb2a06029077723cf45e1418b33c5c09e25ab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
