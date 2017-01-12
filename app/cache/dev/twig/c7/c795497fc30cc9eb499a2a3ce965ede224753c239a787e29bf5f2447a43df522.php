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
        $__internal_cc668d00036850198059027a22f09b972609d53c8fdaa189e682965da3cc24dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc668d00036850198059027a22f09b972609d53c8fdaa189e682965da3cc24dd->enter($__internal_cc668d00036850198059027a22f09b972609d53c8fdaa189e682965da3cc24dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cc668d00036850198059027a22f09b972609d53c8fdaa189e682965da3cc24dd->leave($__internal_cc668d00036850198059027a22f09b972609d53c8fdaa189e682965da3cc24dd_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a7add3b2f0b6cf6fc9fae34f2241760e13d4bb9a0a84c332a7622d63058d062a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7add3b2f0b6cf6fc9fae34f2241760e13d4bb9a0a84c332a7622d63058d062a->enter($__internal_a7add3b2f0b6cf6fc9fae34f2241760e13d4bb9a0a84c332a7622d63058d062a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a7add3b2f0b6cf6fc9fae34f2241760e13d4bb9a0a84c332a7622d63058d062a->leave($__internal_a7add3b2f0b6cf6fc9fae34f2241760e13d4bb9a0a84c332a7622d63058d062a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_58057b9bc7d1f1ac7877414a3df2cada0b07d3479258cdcfd1a7cccc8438eb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58057b9bc7d1f1ac7877414a3df2cada0b07d3479258cdcfd1a7cccc8438eb67->enter($__internal_58057b9bc7d1f1ac7877414a3df2cada0b07d3479258cdcfd1a7cccc8438eb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_58057b9bc7d1f1ac7877414a3df2cada0b07d3479258cdcfd1a7cccc8438eb67->leave($__internal_58057b9bc7d1f1ac7877414a3df2cada0b07d3479258cdcfd1a7cccc8438eb67_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e64105419e06ab97b395de65322e00cb2702715c77cbef53f2d2be9c5b42a549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64105419e06ab97b395de65322e00cb2702715c77cbef53f2d2be9c5b42a549->enter($__internal_e64105419e06ab97b395de65322e00cb2702715c77cbef53f2d2be9c5b42a549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e64105419e06ab97b395de65322e00cb2702715c77cbef53f2d2be9c5b42a549->leave($__internal_e64105419e06ab97b395de65322e00cb2702715c77cbef53f2d2be9c5b42a549_prof);

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
