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
        $__internal_e8d9843b13b2e99dc5c3e978fa634538f64186efea052167e2d12091ff0415b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d9843b13b2e99dc5c3e978fa634538f64186efea052167e2d12091ff0415b7->enter($__internal_e8d9843b13b2e99dc5c3e978fa634538f64186efea052167e2d12091ff0415b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8d9843b13b2e99dc5c3e978fa634538f64186efea052167e2d12091ff0415b7->leave($__internal_e8d9843b13b2e99dc5c3e978fa634538f64186efea052167e2d12091ff0415b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b4618abfbb8273848e2519bbceadb4f46e097801ba1d3723f1ea19f74c3813c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4618abfbb8273848e2519bbceadb4f46e097801ba1d3723f1ea19f74c3813c->enter($__internal_9b4618abfbb8273848e2519bbceadb4f46e097801ba1d3723f1ea19f74c3813c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_9b4618abfbb8273848e2519bbceadb4f46e097801ba1d3723f1ea19f74c3813c->leave($__internal_9b4618abfbb8273848e2519bbceadb4f46e097801ba1d3723f1ea19f74c3813c_prof);

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
