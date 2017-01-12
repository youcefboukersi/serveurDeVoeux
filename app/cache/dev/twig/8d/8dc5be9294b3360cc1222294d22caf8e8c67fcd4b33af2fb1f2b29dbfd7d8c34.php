<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9de310d28a0527b03a1279ee3b6b046d05fba4b8f960b3dbbdddbd0e87272fe7 extends Twig_Template
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
        $__internal_31336b40e31663f8d64bec214593ab53ff2fddfb2376947d10d95f9b2de64c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31336b40e31663f8d64bec214593ab53ff2fddfb2376947d10d95f9b2de64c04->enter($__internal_31336b40e31663f8d64bec214593ab53ff2fddfb2376947d10d95f9b2de64c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_31336b40e31663f8d64bec214593ab53ff2fddfb2376947d10d95f9b2de64c04->leave($__internal_31336b40e31663f8d64bec214593ab53ff2fddfb2376947d10d95f9b2de64c04_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3d14d5550fd9ebdbb8c50b0c015ca9f4be16cbfeca05ba981eccee8a14c07348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d14d5550fd9ebdbb8c50b0c015ca9f4be16cbfeca05ba981eccee8a14c07348->enter($__internal_3d14d5550fd9ebdbb8c50b0c015ca9f4be16cbfeca05ba981eccee8a14c07348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d14d5550fd9ebdbb8c50b0c015ca9f4be16cbfeca05ba981eccee8a14c07348->leave($__internal_3d14d5550fd9ebdbb8c50b0c015ca9f4be16cbfeca05ba981eccee8a14c07348_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8f922b80494ef3fd4a36fc5be80bc2e67348b165524769d75a8f37250b64511c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f922b80494ef3fd4a36fc5be80bc2e67348b165524769d75a8f37250b64511c->enter($__internal_8f922b80494ef3fd4a36fc5be80bc2e67348b165524769d75a8f37250b64511c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8f922b80494ef3fd4a36fc5be80bc2e67348b165524769d75a8f37250b64511c->leave($__internal_8f922b80494ef3fd4a36fc5be80bc2e67348b165524769d75a8f37250b64511c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_57e2fdb1add43b8b112a7691f9a0f4f374556c5c049ef229470551dad9c35ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e2fdb1add43b8b112a7691f9a0f4f374556c5c049ef229470551dad9c35ad2->enter($__internal_57e2fdb1add43b8b112a7691f9a0f4f374556c5c049ef229470551dad9c35ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_57e2fdb1add43b8b112a7691f9a0f4f374556c5c049ef229470551dad9c35ad2->leave($__internal_57e2fdb1add43b8b112a7691f9a0f4f374556c5c049ef229470551dad9c35ad2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  60 => 10,  54 => 8,  45 => 5,  39 => 3,  32 => 13,  30 => 8,  28 => 3,  25 => 2,);
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/email.txt.twig");
    }
}
