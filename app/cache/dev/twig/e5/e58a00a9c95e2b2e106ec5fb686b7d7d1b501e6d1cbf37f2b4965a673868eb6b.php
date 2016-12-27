<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3c97aaceaecfb9219841a6cc7a79f32baf5bf391c2abb5b8419fd73cec88fedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_4cc19284f52fb934cc04f630b34e4445e3d50b79e5f0630487b1cef0651f9f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc19284f52fb934cc04f630b34e4445e3d50b79e5f0630487b1cef0651f9f05->enter($__internal_4cc19284f52fb934cc04f630b34e4445e3d50b79e5f0630487b1cef0651f9f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc19284f52fb934cc04f630b34e4445e3d50b79e5f0630487b1cef0651f9f05->leave($__internal_4cc19284f52fb934cc04f630b34e4445e3d50b79e5f0630487b1cef0651f9f05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75846aba12da57431acf84880afef82b301ae8d56ac6c47079b32119127790f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75846aba12da57431acf84880afef82b301ae8d56ac6c47079b32119127790f6->enter($__internal_75846aba12da57431acf84880afef82b301ae8d56ac6c47079b32119127790f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_75846aba12da57431acf84880afef82b301ae8d56ac6c47079b32119127790f6->leave($__internal_75846aba12da57431acf84880afef82b301ae8d56ac6c47079b32119127790f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/reset.html.twig");
    }
}
