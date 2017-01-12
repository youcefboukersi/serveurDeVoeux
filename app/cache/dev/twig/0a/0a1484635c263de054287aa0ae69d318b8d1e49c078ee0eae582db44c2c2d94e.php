<?php

/* @SRVDVServer/Registration/email.txt.twig */
class __TwigTemplate_06712192ba9597c9188bd681eb7851d412bf946b618391b43852f126040b973c extends Twig_Template
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
        $__internal_c546243ffb6004dab0bc020bcce6f19af445128b3888df48953ca3a21a0579d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c546243ffb6004dab0bc020bcce6f19af445128b3888df48953ca3a21a0579d7->enter($__internal_c546243ffb6004dab0bc020bcce6f19af445128b3888df48953ca3a21a0579d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c546243ffb6004dab0bc020bcce6f19af445128b3888df48953ca3a21a0579d7->leave($__internal_c546243ffb6004dab0bc020bcce6f19af445128b3888df48953ca3a21a0579d7_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0a59378feec7f95811658fe89f8fc6a7c941fcf646d80745e1237a9c65d4b695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a59378feec7f95811658fe89f8fc6a7c941fcf646d80745e1237a9c65d4b695->enter($__internal_0a59378feec7f95811658fe89f8fc6a7c941fcf646d80745e1237a9c65d4b695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0a59378feec7f95811658fe89f8fc6a7c941fcf646d80745e1237a9c65d4b695->leave($__internal_0a59378feec7f95811658fe89f8fc6a7c941fcf646d80745e1237a9c65d4b695_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d5fa346de1592cd120e329d5a99dd70da835d5fc68d5a81d202c87503509eb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fa346de1592cd120e329d5a99dd70da835d5fc68d5a81d202c87503509eb80->enter($__internal_d5fa346de1592cd120e329d5a99dd70da835d5fc68d5a81d202c87503509eb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d5fa346de1592cd120e329d5a99dd70da835d5fc68d5a81d202c87503509eb80->leave($__internal_d5fa346de1592cd120e329d5a99dd70da835d5fc68d5a81d202c87503509eb80_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_24630fc02be65dab439e1ad9b34ffd6ce330c1a7414d699a3b2514d180a48f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24630fc02be65dab439e1ad9b34ffd6ce330c1a7414d699a3b2514d180a48f55->enter($__internal_24630fc02be65dab439e1ad9b34ffd6ce330c1a7414d699a3b2514d180a48f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_24630fc02be65dab439e1ad9b34ffd6ce330c1a7414d699a3b2514d180a48f55->leave($__internal_24630fc02be65dab439e1ad9b34ffd6ce330c1a7414d699a3b2514d180a48f55_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Registration/email.txt.twig";
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
", "@SRVDVServer/Registration/email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
