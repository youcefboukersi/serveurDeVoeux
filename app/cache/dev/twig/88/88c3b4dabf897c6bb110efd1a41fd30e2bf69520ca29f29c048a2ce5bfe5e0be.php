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
        $__internal_339f15b2ade0d7be1cfab1e2e1d91bc4474eca217fcaa7cd0e73357d08894c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339f15b2ade0d7be1cfab1e2e1d91bc4474eca217fcaa7cd0e73357d08894c68->enter($__internal_339f15b2ade0d7be1cfab1e2e1d91bc4474eca217fcaa7cd0e73357d08894c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_339f15b2ade0d7be1cfab1e2e1d91bc4474eca217fcaa7cd0e73357d08894c68->leave($__internal_339f15b2ade0d7be1cfab1e2e1d91bc4474eca217fcaa7cd0e73357d08894c68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32c60f88381d91b4bb365707ce4290ecfc1f14a74ae8006ed3aa5888c7e0bd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c60f88381d91b4bb365707ce4290ecfc1f14a74ae8006ed3aa5888c7e0bd15->enter($__internal_32c60f88381d91b4bb365707ce4290ecfc1f14a74ae8006ed3aa5888c7e0bd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_32c60f88381d91b4bb365707ce4290ecfc1f14a74ae8006ed3aa5888c7e0bd15->leave($__internal_32c60f88381d91b4bb365707ce4290ecfc1f14a74ae8006ed3aa5888c7e0bd15_prof);

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
