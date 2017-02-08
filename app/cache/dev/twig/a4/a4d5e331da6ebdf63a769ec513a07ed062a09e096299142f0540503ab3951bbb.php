<?php

/* SRVDVServerBundle:Registration:email.txt.twig */
class __TwigTemplate_d9fb642ef38579dd6542f4eacc9668ce91ac497e0fd5b3f1b1ca25429847bdfe extends Twig_Template
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
        $__internal_12d296c4359777711644ae365c5a7c8a27cfb4e54a756230e15bff095f72865a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d296c4359777711644ae365c5a7c8a27cfb4e54a756230e15bff095f72865a->enter($__internal_12d296c4359777711644ae365c5a7c8a27cfb4e54a756230e15bff095f72865a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_12d296c4359777711644ae365c5a7c8a27cfb4e54a756230e15bff095f72865a->leave($__internal_12d296c4359777711644ae365c5a7c8a27cfb4e54a756230e15bff095f72865a_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a838437b299096e55250b4003c0d38a95155549d8b5a096158a61f45f396cb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a838437b299096e55250b4003c0d38a95155549d8b5a096158a61f45f396cb71->enter($__internal_a838437b299096e55250b4003c0d38a95155549d8b5a096158a61f45f396cb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "    ";
        // line 5
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_a838437b299096e55250b4003c0d38a95155549d8b5a096158a61f45f396cb71->leave($__internal_a838437b299096e55250b4003c0d38a95155549d8b5a096158a61f45f396cb71_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3a9d92e09add9cc576bbdba6a044b295760a15cfe9d4e8cfc3df8f8777b0467c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9d92e09add9cc576bbdba6a044b295760a15cfe9d4e8cfc3df8f8777b0467c->enter($__internal_3a9d92e09add9cc576bbdba6a044b295760a15cfe9d4e8cfc3df8f8777b0467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo "    ";
        // line 10
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_3a9d92e09add9cc576bbdba6a044b295760a15cfe9d4e8cfc3df8f8777b0467c->leave($__internal_3a9d92e09add9cc576bbdba6a044b295760a15cfe9d4e8cfc3df8f8777b0467c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c100db17f8b1ab9b0aa6aa3a6547d5e023124afd311b7664c4e64531949c4d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c100db17f8b1ab9b0aa6aa3a6547d5e023124afd311b7664c4e64531949c4d27->enter($__internal_c100db17f8b1ab9b0aa6aa3a6547d5e023124afd311b7664c4e64531949c4d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c100db17f8b1ab9b0aa6aa3a6547d5e023124afd311b7664c4e64531949c4d27->leave($__internal_c100db17f8b1ab9b0aa6aa3a6547d5e023124afd311b7664c4e64531949c4d27_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  65 => 10,  63 => 9,  57 => 8,  47 => 5,  45 => 4,  39 => 3,  32 => 13,  30 => 8,  28 => 3,  25 => 2,);
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
", "SRVDVServerBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/email.txt.twig");
    }
}
