<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e5729236e0ede88cee1090151cdc1a17777d3894d1006f353845205da6e2849d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a4ad9fdb403614b71411fec37256acd44fd957ba103c504e9efcdb7ea2f4339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4ad9fdb403614b71411fec37256acd44fd957ba103c504e9efcdb7ea2f4339->enter($__internal_8a4ad9fdb403614b71411fec37256acd44fd957ba103c504e9efcdb7ea2f4339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8a4ad9fdb403614b71411fec37256acd44fd957ba103c504e9efcdb7ea2f4339->leave($__internal_8a4ad9fdb403614b71411fec37256acd44fd957ba103c504e9efcdb7ea2f4339_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1d7364960ec045670b9920f11992a2ae004b02e74b1bd252d5de8ad25621b060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7364960ec045670b9920f11992a2ae004b02e74b1bd252d5de8ad25621b060->enter($__internal_1d7364960ec045670b9920f11992a2ae004b02e74b1bd252d5de8ad25621b060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_1d7364960ec045670b9920f11992a2ae004b02e74b1bd252d5de8ad25621b060->leave($__internal_1d7364960ec045670b9920f11992a2ae004b02e74b1bd252d5de8ad25621b060_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_89afdfd80a4c97ba15dfca2f86de9691dc27d6e9cf8c34d36c3896b0fd27f292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89afdfd80a4c97ba15dfca2f86de9691dc27d6e9cf8c34d36c3896b0fd27f292->enter($__internal_89afdfd80a4c97ba15dfca2f86de9691dc27d6e9cf8c34d36c3896b0fd27f292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_89afdfd80a4c97ba15dfca2f86de9691dc27d6e9cf8c34d36c3896b0fd27f292->leave($__internal_89afdfd80a4c97ba15dfca2f86de9691dc27d6e9cf8c34d36c3896b0fd27f292_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5a9fac395503ce738e5122221df3ceda3a5857c84bb5eca00e0f354e4201f282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9fac395503ce738e5122221df3ceda3a5857c84bb5eca00e0f354e4201f282->enter($__internal_5a9fac395503ce738e5122221df3ceda3a5857c84bb5eca00e0f354e4201f282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5a9fac395503ce738e5122221df3ceda3a5857c84bb5eca00e0f354e4201f282->leave($__internal_5a9fac395503ce738e5122221df3ceda3a5857c84bb5eca00e0f354e4201f282_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
