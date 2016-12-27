<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_299ceb81a2f3971795b23b6cf34c997b4baa63335eda1d0094bb1767c424fb7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_54e1789bef3986ca552918ef99e919e0763d9ab491cf1a5c9f0bd16794ee30ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e1789bef3986ca552918ef99e919e0763d9ab491cf1a5c9f0bd16794ee30ef->enter($__internal_54e1789bef3986ca552918ef99e919e0763d9ab491cf1a5c9f0bd16794ee30ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e1789bef3986ca552918ef99e919e0763d9ab491cf1a5c9f0bd16794ee30ef->leave($__internal_54e1789bef3986ca552918ef99e919e0763d9ab491cf1a5c9f0bd16794ee30ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_623f482a85a2d28722147792f2011fcea05fcd756a87b32da6658b6267592240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623f482a85a2d28722147792f2011fcea05fcd756a87b32da6658b6267592240->enter($__internal_623f482a85a2d28722147792f2011fcea05fcd756a87b32da6658b6267592240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_623f482a85a2d28722147792f2011fcea05fcd756a87b32da6658b6267592240->leave($__internal_623f482a85a2d28722147792f2011fcea05fcd756a87b32da6658b6267592240_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
