<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1b5aa919326fe534062c124be47b838cfe3caafbe8600937f4053570bca1dd08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aa5cf844ec5dcdbaaef056b3edf677461c5af350db95704c9b7c5baf513768f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa5cf844ec5dcdbaaef056b3edf677461c5af350db95704c9b7c5baf513768f->enter($__internal_9aa5cf844ec5dcdbaaef056b3edf677461c5af350db95704c9b7c5baf513768f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa5cf844ec5dcdbaaef056b3edf677461c5af350db95704c9b7c5baf513768f->leave($__internal_9aa5cf844ec5dcdbaaef056b3edf677461c5af350db95704c9b7c5baf513768f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96527672b82889c1ee0649fb805b379d6beebc30a660e5010e1f986c09b6f7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96527672b82889c1ee0649fb805b379d6beebc30a660e5010e1f986c09b6f7a0->enter($__internal_96527672b82889c1ee0649fb805b379d6beebc30a660e5010e1f986c09b6f7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_96527672b82889c1ee0649fb805b379d6beebc30a660e5010e1f986c09b6f7a0->leave($__internal_96527672b82889c1ee0649fb805b379d6beebc30a660e5010e1f986c09b6f7a0_prof);

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
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/request.html.twig");
    }
}
