<?php

/* SRVDVServerBundle:Registration:email.txt.twig */
class __TwigTemplate_f3b976af8922c424a8a10375bbfad62d2d33b1c18f2f0ff0cb4cf9880c62a25c extends Twig_Template
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
        $__internal_0b6a953aedf0da4678b9c4ee3df0277f694d79d56da857a9539d44afaf567e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6a953aedf0da4678b9c4ee3df0277f694d79d56da857a9539d44afaf567e83->enter($__internal_0b6a953aedf0da4678b9c4ee3df0277f694d79d56da857a9539d44afaf567e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b6a953aedf0da4678b9c4ee3df0277f694d79d56da857a9539d44afaf567e83->leave($__internal_0b6a953aedf0da4678b9c4ee3df0277f694d79d56da857a9539d44afaf567e83_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9e2224b162c5abff5fe04400c49f9c0506a17e4b61ec31170ca8b3dce8b2eaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2224b162c5abff5fe04400c49f9c0506a17e4b61ec31170ca8b3dce8b2eaee->enter($__internal_9e2224b162c5abff5fe04400c49f9c0506a17e4b61ec31170ca8b3dce8b2eaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9e2224b162c5abff5fe04400c49f9c0506a17e4b61ec31170ca8b3dce8b2eaee->leave($__internal_9e2224b162c5abff5fe04400c49f9c0506a17e4b61ec31170ca8b3dce8b2eaee_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e830d5b3086c93ae907b6fb4081136b66dc3a769d2dec704dff851cba403fef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e830d5b3086c93ae907b6fb4081136b66dc3a769d2dec704dff851cba403fef2->enter($__internal_e830d5b3086c93ae907b6fb4081136b66dc3a769d2dec704dff851cba403fef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e830d5b3086c93ae907b6fb4081136b66dc3a769d2dec704dff851cba403fef2->leave($__internal_e830d5b3086c93ae907b6fb4081136b66dc3a769d2dec704dff851cba403fef2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4d7b3483e810a24fef810598c6693c51d21d26b0228aca4f2f0fbbcff5b944a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7b3483e810a24fef810598c6693c51d21d26b0228aca4f2f0fbbcff5b944a3->enter($__internal_4d7b3483e810a24fef810598c6693c51d21d26b0228aca4f2f0fbbcff5b944a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4d7b3483e810a24fef810598c6693c51d21d26b0228aca4f2f0fbbcff5b944a3->leave($__internal_4d7b3483e810a24fef810598c6693c51d21d26b0228aca4f2f0fbbcff5b944a3_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:email.txt.twig";
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
", "SRVDVServerBundle:Registration:email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/email.txt.twig");
    }
}
