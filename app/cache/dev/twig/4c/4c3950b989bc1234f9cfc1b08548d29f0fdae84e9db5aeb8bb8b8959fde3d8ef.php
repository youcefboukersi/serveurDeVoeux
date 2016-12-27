<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_c35d4d447a601b9a322c9e2ae66c5573855e9ee4269daf16f8d0dd8aaa554354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_9922128b0c629450d1e9e4aad69443282e2a42c256d1afd170ff69ce1bd983b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9922128b0c629450d1e9e4aad69443282e2a42c256d1afd170ff69ce1bd983b5->enter($__internal_9922128b0c629450d1e9e4aad69443282e2a42c256d1afd170ff69ce1bd983b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9922128b0c629450d1e9e4aad69443282e2a42c256d1afd170ff69ce1bd983b5->leave($__internal_9922128b0c629450d1e9e4aad69443282e2a42c256d1afd170ff69ce1bd983b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c598e4f3c7ea8dae031411fe9a1888f6845e853782bcd91b3c5953bdb7299d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c598e4f3c7ea8dae031411fe9a1888f6845e853782bcd91b3c5953bdb7299d8->enter($__internal_2c598e4f3c7ea8dae031411fe9a1888f6845e853782bcd91b3c5953bdb7299d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2c598e4f3c7ea8dae031411fe9a1888f6845e853782bcd91b3c5953bdb7299d8->leave($__internal_2c598e4f3c7ea8dae031411fe9a1888f6845e853782bcd91b3c5953bdb7299d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
