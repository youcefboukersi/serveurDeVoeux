<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_b283d00cce3d3284b390a84bbbf1bf1c096f0da4e731a80e9faac044cdcfc96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d6cfb57a38f11cde3df843ca317805f2b0128a4cae6c55aeed3849cd31055a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cfb57a38f11cde3df843ca317805f2b0128a4cae6c55aeed3849cd31055a07->enter($__internal_d6cfb57a38f11cde3df843ca317805f2b0128a4cae6c55aeed3849cd31055a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6cfb57a38f11cde3df843ca317805f2b0128a4cae6c55aeed3849cd31055a07->leave($__internal_d6cfb57a38f11cde3df843ca317805f2b0128a4cae6c55aeed3849cd31055a07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f37ca9ed04b63ee7824d9e38e4b944c5c0300a0eb59e38f385327747f37ee4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37ca9ed04b63ee7824d9e38e4b944c5c0300a0eb59e38f385327747f37ee4b6->enter($__internal_f37ca9ed04b63ee7824d9e38e4b944c5c0300a0eb59e38f385327747f37ee4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_f37ca9ed04b63ee7824d9e38e4b944c5c0300a0eb59e38f385327747f37ee4b6->leave($__internal_f37ca9ed04b63ee7824d9e38e4b944c5c0300a0eb59e38f385327747f37ee4b6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
