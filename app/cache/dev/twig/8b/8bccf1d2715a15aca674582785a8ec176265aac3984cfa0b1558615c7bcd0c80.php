<?php

/* SRVDVServerBundle:Resetting:email.txt.twig */
class __TwigTemplate_b0d69aafac827d1961a84b2cad83acd6ae4e63ff2371753f780f1d645db8627d extends Twig_Template
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
        $__internal_2b18b84eb2df8af43b0628a34f11b842d16f5ae154bf34951d3e094dcbe7c67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b18b84eb2df8af43b0628a34f11b842d16f5ae154bf34951d3e094dcbe7c67e->enter($__internal_2b18b84eb2df8af43b0628a34f11b842d16f5ae154bf34951d3e094dcbe7c67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2b18b84eb2df8af43b0628a34f11b842d16f5ae154bf34951d3e094dcbe7c67e->leave($__internal_2b18b84eb2df8af43b0628a34f11b842d16f5ae154bf34951d3e094dcbe7c67e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_78c379bc6b6fa59f5da9e551c850c1eb9acdf8394027a3d716b3a109fbaa678c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c379bc6b6fa59f5da9e551c850c1eb9acdf8394027a3d716b3a109fbaa678c->enter($__internal_78c379bc6b6fa59f5da9e551c850c1eb9acdf8394027a3d716b3a109fbaa678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo "    ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
    ";
        
        $__internal_78c379bc6b6fa59f5da9e551c850c1eb9acdf8394027a3d716b3a109fbaa678c->leave($__internal_78c379bc6b6fa59f5da9e551c850c1eb9acdf8394027a3d716b3a109fbaa678c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a724d99544d0b15b3ae89073ac5d318c07abd543b6f786f3acb4cc6ff6a1bde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a724d99544d0b15b3ae89073ac5d318c07abd543b6f786f3acb4cc6ff6a1bde3->enter($__internal_a724d99544d0b15b3ae89073ac5d318c07abd543b6f786f3acb4cc6ff6a1bde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_a724d99544d0b15b3ae89073ac5d318c07abd543b6f786f3acb4cc6ff6a1bde3->leave($__internal_a724d99544d0b15b3ae89073ac5d318c07abd543b6f786f3acb4cc6ff6a1bde3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ce7113f5e2a3c3a6d877abe82eae06ddea17850f9e9b06590336a677fdd90d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7113f5e2a3c3a6d877abe82eae06ddea17850f9e9b06590336a677fdd90d8d->enter($__internal_ce7113f5e2a3c3a6d877abe82eae06ddea17850f9e9b06590336a677fdd90d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ce7113f5e2a3c3a6d877abe82eae06ddea17850f9e9b06590336a677fdd90d8d->leave($__internal_ce7113f5e2a3c3a6d877abe82eae06ddea17850f9e9b06590336a677fdd90d8d_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  62 => 9,  60 => 8,  54 => 7,  44 => 4,  42 => 3,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
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
", "SRVDVServerBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/email.txt.twig");
    }
}
