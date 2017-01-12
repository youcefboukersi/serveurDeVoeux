<?php

/* @SRVDVServer/Resetting/email.txt.twig */
class __TwigTemplate_c359cfc80ee8ff15841b5b5c6a4aebb96b6a237248c79931a33c89e812c6579f extends Twig_Template
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
        $__internal_3ba34ec5c2fe01f1868b720948a0d0891a22bdaab6e8616db29ab42fd8b22a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba34ec5c2fe01f1868b720948a0d0891a22bdaab6e8616db29ab42fd8b22a70->enter($__internal_3ba34ec5c2fe01f1868b720948a0d0891a22bdaab6e8616db29ab42fd8b22a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3ba34ec5c2fe01f1868b720948a0d0891a22bdaab6e8616db29ab42fd8b22a70->leave($__internal_3ba34ec5c2fe01f1868b720948a0d0891a22bdaab6e8616db29ab42fd8b22a70_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_388eb9f9e55bbf4d62e6e3cef67450e8311dfe74c7447b9330d8d6b679fec016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388eb9f9e55bbf4d62e6e3cef67450e8311dfe74c7447b9330d8d6b679fec016->enter($__internal_388eb9f9e55bbf4d62e6e3cef67450e8311dfe74c7447b9330d8d6b679fec016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_388eb9f9e55bbf4d62e6e3cef67450e8311dfe74c7447b9330d8d6b679fec016->leave($__internal_388eb9f9e55bbf4d62e6e3cef67450e8311dfe74c7447b9330d8d6b679fec016_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_39280d9575a821325a85b729e9b88a2c4d66ac81a88d54fed28189c85bdc1fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39280d9575a821325a85b729e9b88a2c4d66ac81a88d54fed28189c85bdc1fbd->enter($__internal_39280d9575a821325a85b729e9b88a2c4d66ac81a88d54fed28189c85bdc1fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_39280d9575a821325a85b729e9b88a2c4d66ac81a88d54fed28189c85bdc1fbd->leave($__internal_39280d9575a821325a85b729e9b88a2c4d66ac81a88d54fed28189c85bdc1fbd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0a0f638b2cf4fbb8abf4dbc755a1629dfd377294e145fd10b54565b4c30d8e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0f638b2cf4fbb8abf4dbc755a1629dfd377294e145fd10b54565b4c30d8e2c->enter($__internal_0a0f638b2cf4fbb8abf4dbc755a1629dfd377294e145fd10b54565b4c30d8e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0a0f638b2cf4fbb8abf4dbc755a1629dfd377294e145fd10b54565b4c30d8e2c->leave($__internal_0a0f638b2cf4fbb8abf4dbc755a1629dfd377294e145fd10b54565b4c30d8e2c_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/email.txt.twig";
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
", "@SRVDVServer/Resetting/email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
