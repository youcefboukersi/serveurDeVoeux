<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4123a11d51c2c75723d8553c1581eaff85d19c81221d8ea4bec5997767fca5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_84891ecd611cc02b778af58e2ee2e84c0cc83bafb655585dba8281ec6c69cba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84891ecd611cc02b778af58e2ee2e84c0cc83bafb655585dba8281ec6c69cba1->enter($__internal_84891ecd611cc02b778af58e2ee2e84c0cc83bafb655585dba8281ec6c69cba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84891ecd611cc02b778af58e2ee2e84c0cc83bafb655585dba8281ec6c69cba1->leave($__internal_84891ecd611cc02b778af58e2ee2e84c0cc83bafb655585dba8281ec6c69cba1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d1fa82717fdd5f0b51892d2d5b651c017e154e4e96b9f1362aa7c9a1d7b4d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1fa82717fdd5f0b51892d2d5b651c017e154e4e96b9f1362aa7c9a1d7b4d3c->enter($__internal_1d1fa82717fdd5f0b51892d2d5b651c017e154e4e96b9f1362aa7c9a1d7b4d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1d1fa82717fdd5f0b51892d2d5b651c017e154e4e96b9f1362aa7c9a1d7b4d3c->leave($__internal_1d1fa82717fdd5f0b51892d2d5b651c017e154e4e96b9f1362aa7c9a1d7b4d3c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
