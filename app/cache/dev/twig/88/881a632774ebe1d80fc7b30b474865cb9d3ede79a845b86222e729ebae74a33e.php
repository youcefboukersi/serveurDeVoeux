<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_276c9c2ac1d77508e72acab7a84d303091475517bad1c085f3d762722aa83be1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_0e7d3b741745ef04278d416ffdb8c5d202ee9a8d8151740f8d1875ff353285dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7d3b741745ef04278d416ffdb8c5d202ee9a8d8151740f8d1875ff353285dd->enter($__internal_0e7d3b741745ef04278d416ffdb8c5d202ee9a8d8151740f8d1875ff353285dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e7d3b741745ef04278d416ffdb8c5d202ee9a8d8151740f8d1875ff353285dd->leave($__internal_0e7d3b741745ef04278d416ffdb8c5d202ee9a8d8151740f8d1875ff353285dd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8ad5efae41be6696a6904ba3eb38bef0fb04055fabf83e124c61d4403de78d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ad5efae41be6696a6904ba3eb38bef0fb04055fabf83e124c61d4403de78d7->enter($__internal_a8ad5efae41be6696a6904ba3eb38bef0fb04055fabf83e124c61d4403de78d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a8ad5efae41be6696a6904ba3eb38bef0fb04055fabf83e124c61d4403de78d7->leave($__internal_a8ad5efae41be6696a6904ba3eb38bef0fb04055fabf83e124c61d4403de78d7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
