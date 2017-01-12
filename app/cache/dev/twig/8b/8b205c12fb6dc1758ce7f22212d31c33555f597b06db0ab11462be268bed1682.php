<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0141ade274d012aa56154af1888f03b0a9f1c749b7a8111e002151ffb49c071a extends Twig_Template
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
        $__internal_0e2bb3845300f3e40e99d1eb8c5eabc3697e5442b0a5bb19da8c03d44b0740a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2bb3845300f3e40e99d1eb8c5eabc3697e5442b0a5bb19da8c03d44b0740a1->enter($__internal_0e2bb3845300f3e40e99d1eb8c5eabc3697e5442b0a5bb19da8c03d44b0740a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2bb3845300f3e40e99d1eb8c5eabc3697e5442b0a5bb19da8c03d44b0740a1->leave($__internal_0e2bb3845300f3e40e99d1eb8c5eabc3697e5442b0a5bb19da8c03d44b0740a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa4c6b02797406cbd6b38cf80bbb9c3f117f3e289c3ffcb22fd290e34dc36239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4c6b02797406cbd6b38cf80bbb9c3f117f3e289c3ffcb22fd290e34dc36239->enter($__internal_fa4c6b02797406cbd6b38cf80bbb9c3f117f3e289c3ffcb22fd290e34dc36239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_fa4c6b02797406cbd6b38cf80bbb9c3f117f3e289c3ffcb22fd290e34dc36239->leave($__internal_fa4c6b02797406cbd6b38cf80bbb9c3f117f3e289c3ffcb22fd290e34dc36239_prof);

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
", "FOSUserBundle:Group:show.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
