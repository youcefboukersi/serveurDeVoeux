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
        $__internal_9ba53e69d71bebb428fcbc5cf81fdb47272e8abfd926af0761ae75891eda662e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba53e69d71bebb428fcbc5cf81fdb47272e8abfd926af0761ae75891eda662e->enter($__internal_9ba53e69d71bebb428fcbc5cf81fdb47272e8abfd926af0761ae75891eda662e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ba53e69d71bebb428fcbc5cf81fdb47272e8abfd926af0761ae75891eda662e->leave($__internal_9ba53e69d71bebb428fcbc5cf81fdb47272e8abfd926af0761ae75891eda662e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_becfd5872c9534abef70353a4872160d503294522dc876da4ce74a7983a87a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becfd5872c9534abef70353a4872160d503294522dc876da4ce74a7983a87a64->enter($__internal_becfd5872c9534abef70353a4872160d503294522dc876da4ce74a7983a87a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_becfd5872c9534abef70353a4872160d503294522dc876da4ce74a7983a87a64->leave($__internal_becfd5872c9534abef70353a4872160d503294522dc876da4ce74a7983a87a64_prof);

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
