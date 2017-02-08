<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_70c04f7bdb75f885b30f8c9629281ea3bb08a00e5c8924ad891fe9baa83c3a4a extends Twig_Template
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
        $__internal_b7002582657513171b13fc0f2677d3a72f503434b198ee100ef73c520a1b51bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7002582657513171b13fc0f2677d3a72f503434b198ee100ef73c520a1b51bc->enter($__internal_b7002582657513171b13fc0f2677d3a72f503434b198ee100ef73c520a1b51bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7002582657513171b13fc0f2677d3a72f503434b198ee100ef73c520a1b51bc->leave($__internal_b7002582657513171b13fc0f2677d3a72f503434b198ee100ef73c520a1b51bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffff04772c71c8c9bda773a455e3de2f13d016092090562970b6e3bb562079c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffff04772c71c8c9bda773a455e3de2f13d016092090562970b6e3bb562079c7->enter($__internal_ffff04772c71c8c9bda773a455e3de2f13d016092090562970b6e3bb562079c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ffff04772c71c8c9bda773a455e3de2f13d016092090562970b6e3bb562079c7->leave($__internal_ffff04772c71c8c9bda773a455e3de2f13d016092090562970b6e3bb562079c7_prof);

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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
