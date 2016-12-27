<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_a172d07209fed0db5b4ee59d512deac50e3eda0735e73a435fa12be43e79c8be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_682f2e4fbb7164150415b150dd04ad707d64d8c25cfb77f507dbc5328cf6b7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682f2e4fbb7164150415b150dd04ad707d64d8c25cfb77f507dbc5328cf6b7f2->enter($__internal_682f2e4fbb7164150415b150dd04ad707d64d8c25cfb77f507dbc5328cf6b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_682f2e4fbb7164150415b150dd04ad707d64d8c25cfb77f507dbc5328cf6b7f2->leave($__internal_682f2e4fbb7164150415b150dd04ad707d64d8c25cfb77f507dbc5328cf6b7f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d887336b8e5f2349a724e8cc58fe1e5ae34ac0dc797e7fa7becb023c3f0138a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d887336b8e5f2349a724e8cc58fe1e5ae34ac0dc797e7fa7becb023c3f0138a->enter($__internal_4d887336b8e5f2349a724e8cc58fe1e5ae34ac0dc797e7fa7becb023c3f0138a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_4d887336b8e5f2349a724e8cc58fe1e5ae34ac0dc797e7fa7becb023c3f0138a->leave($__internal_4d887336b8e5f2349a724e8cc58fe1e5ae34ac0dc797e7fa7becb023c3f0138a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/changePassword.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
