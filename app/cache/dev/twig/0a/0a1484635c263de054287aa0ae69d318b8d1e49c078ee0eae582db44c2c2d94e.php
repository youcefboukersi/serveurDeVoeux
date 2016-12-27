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
        $__internal_6033e0cf4d1314e2a2bb26965f5fc995d7e7fc2f18cc985a8fc549ad7ce57423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6033e0cf4d1314e2a2bb26965f5fc995d7e7fc2f18cc985a8fc549ad7ce57423->enter($__internal_6033e0cf4d1314e2a2bb26965f5fc995d7e7fc2f18cc985a8fc549ad7ce57423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6033e0cf4d1314e2a2bb26965f5fc995d7e7fc2f18cc985a8fc549ad7ce57423->leave($__internal_6033e0cf4d1314e2a2bb26965f5fc995d7e7fc2f18cc985a8fc549ad7ce57423_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_112dd8d5608ecb7b4c80d48f3e2c17f7477f6c2f11b33554a63f6a227f811af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112dd8d5608ecb7b4c80d48f3e2c17f7477f6c2f11b33554a63f6a227f811af1->enter($__internal_112dd8d5608ecb7b4c80d48f3e2c17f7477f6c2f11b33554a63f6a227f811af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_112dd8d5608ecb7b4c80d48f3e2c17f7477f6c2f11b33554a63f6a227f811af1->leave($__internal_112dd8d5608ecb7b4c80d48f3e2c17f7477f6c2f11b33554a63f6a227f811af1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab29e67c7ed5f5c14674c38a1bcf77355d0c7b25cf42a6b165ed1d5f176da9b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab29e67c7ed5f5c14674c38a1bcf77355d0c7b25cf42a6b165ed1d5f176da9b4->enter($__internal_ab29e67c7ed5f5c14674c38a1bcf77355d0c7b25cf42a6b165ed1d5f176da9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab29e67c7ed5f5c14674c38a1bcf77355d0c7b25cf42a6b165ed1d5f176da9b4->leave($__internal_ab29e67c7ed5f5c14674c38a1bcf77355d0c7b25cf42a6b165ed1d5f176da9b4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b57b3d1396c2960675bec19e9319233e9e05210fac8c6dd2fc5e9d1b7c6c249c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57b3d1396c2960675bec19e9319233e9e05210fac8c6dd2fc5e9d1b7c6c249c->enter($__internal_b57b3d1396c2960675bec19e9319233e9e05210fac8c6dd2fc5e9d1b7c6c249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b57b3d1396c2960675bec19e9319233e9e05210fac8c6dd2fc5e9d1b7c6c249c->leave($__internal_b57b3d1396c2960675bec19e9319233e9e05210fac8c6dd2fc5e9d1b7c6c249c_prof);

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
