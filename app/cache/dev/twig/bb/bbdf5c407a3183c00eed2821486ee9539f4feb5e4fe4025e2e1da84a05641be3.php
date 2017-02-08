<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_8c1b07627352fa9b264ef99e50e328ed5b7a60f23990578d6e99d42b833d5c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_7be9aaaebfcfb991ffb2cf605d9785866325656ebeb3e9826fa9f44b4e8876de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be9aaaebfcfb991ffb2cf605d9785866325656ebeb3e9826fa9f44b4e8876de->enter($__internal_7be9aaaebfcfb991ffb2cf605d9785866325656ebeb3e9826fa9f44b4e8876de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be9aaaebfcfb991ffb2cf605d9785866325656ebeb3e9826fa9f44b4e8876de->leave($__internal_7be9aaaebfcfb991ffb2cf605d9785866325656ebeb3e9826fa9f44b4e8876de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5be0518bfa98cea335cc7ec613cc44e0171955e6401b3cc88667594a8850762e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be0518bfa98cea335cc7ec613cc44e0171955e6401b3cc88667594a8850762e->enter($__internal_5be0518bfa98cea335cc7ec613cc44e0171955e6401b3cc88667594a8850762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_5be0518bfa98cea335cc7ec613cc44e0171955e6401b3cc88667594a8850762e->leave($__internal_5be0518bfa98cea335cc7ec613cc44e0171955e6401b3cc88667594a8850762e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
