<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8502890e25dd34c4ac5d38d9177c3c53ee156b0be8ce2432e9c23ace46e2aa27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_48d29ddd5da7b6c1885ffa18c6280bf446b016925d6a43d3b0ca8117e2e6e55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d29ddd5da7b6c1885ffa18c6280bf446b016925d6a43d3b0ca8117e2e6e55c->enter($__internal_48d29ddd5da7b6c1885ffa18c6280bf446b016925d6a43d3b0ca8117e2e6e55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d29ddd5da7b6c1885ffa18c6280bf446b016925d6a43d3b0ca8117e2e6e55c->leave($__internal_48d29ddd5da7b6c1885ffa18c6280bf446b016925d6a43d3b0ca8117e2e6e55c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e530cc6985d8acda74b83e2efb734d8e3faf84e949f356c6f868ae0d390213d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e530cc6985d8acda74b83e2efb734d8e3faf84e949f356c6f868ae0d390213d8->enter($__internal_e530cc6985d8acda74b83e2efb734d8e3faf84e949f356c6f868ae0d390213d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e530cc6985d8acda74b83e2efb734d8e3faf84e949f356c6f868ae0d390213d8->leave($__internal_e530cc6985d8acda74b83e2efb734d8e3faf84e949f356c6f868ae0d390213d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
