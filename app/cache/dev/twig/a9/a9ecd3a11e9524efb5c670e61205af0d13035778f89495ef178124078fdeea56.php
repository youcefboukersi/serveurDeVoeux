<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_28d39f152b8d0254db02644714f6abff8e02104ec8828898e98a19b5939fec62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_dbb177253bf99d4fc6cbb9565fcb844aee3aa74e5c3c4ae7f3af276648ec652e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb177253bf99d4fc6cbb9565fcb844aee3aa74e5c3c4ae7f3af276648ec652e->enter($__internal_dbb177253bf99d4fc6cbb9565fcb844aee3aa74e5c3c4ae7f3af276648ec652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb177253bf99d4fc6cbb9565fcb844aee3aa74e5c3c4ae7f3af276648ec652e->leave($__internal_dbb177253bf99d4fc6cbb9565fcb844aee3aa74e5c3c4ae7f3af276648ec652e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c4738d316fe2dfb115704c141bf2e54773a8520e8262511969fd4d9d20e9fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4738d316fe2dfb115704c141bf2e54773a8520e8262511969fd4d9d20e9fb7->enter($__internal_0c4738d316fe2dfb115704c141bf2e54773a8520e8262511969fd4d9d20e9fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_0c4738d316fe2dfb115704c141bf2e54773a8520e8262511969fd4d9d20e9fb7->leave($__internal_0c4738d316fe2dfb115704c141bf2e54773a8520e8262511969fd4d9d20e9fb7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
