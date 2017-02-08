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
        $__internal_899037893fb655dee839749a9f2037dc80cdf6c7b96754ab8293cdf7803322ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899037893fb655dee839749a9f2037dc80cdf6c7b96754ab8293cdf7803322ce->enter($__internal_899037893fb655dee839749a9f2037dc80cdf6c7b96754ab8293cdf7803322ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_899037893fb655dee839749a9f2037dc80cdf6c7b96754ab8293cdf7803322ce->leave($__internal_899037893fb655dee839749a9f2037dc80cdf6c7b96754ab8293cdf7803322ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0927896f9b3e402a1826e95e2103f66039fdd122edb50b870a013f2ef5c9482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0927896f9b3e402a1826e95e2103f66039fdd122edb50b870a013f2ef5c9482->enter($__internal_d0927896f9b3e402a1826e95e2103f66039fdd122edb50b870a013f2ef5c9482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d0927896f9b3e402a1826e95e2103f66039fdd122edb50b870a013f2ef5c9482->leave($__internal_d0927896f9b3e402a1826e95e2103f66039fdd122edb50b870a013f2ef5c9482_prof);

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
