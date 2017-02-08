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
        $__internal_5a709ab6ecfee8268e4ac39a04b4bf0d12b3e0887dee4abfc5d507359679198b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a709ab6ecfee8268e4ac39a04b4bf0d12b3e0887dee4abfc5d507359679198b->enter($__internal_5a709ab6ecfee8268e4ac39a04b4bf0d12b3e0887dee4abfc5d507359679198b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5a709ab6ecfee8268e4ac39a04b4bf0d12b3e0887dee4abfc5d507359679198b->leave($__internal_5a709ab6ecfee8268e4ac39a04b4bf0d12b3e0887dee4abfc5d507359679198b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_62a82b29f8b3301977fd83ef1233d6fef1760e6cb2a82c43df275542e293e874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a82b29f8b3301977fd83ef1233d6fef1760e6cb2a82c43df275542e293e874->enter($__internal_62a82b29f8b3301977fd83ef1233d6fef1760e6cb2a82c43df275542e293e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo "    ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
    ";
        
        $__internal_62a82b29f8b3301977fd83ef1233d6fef1760e6cb2a82c43df275542e293e874->leave($__internal_62a82b29f8b3301977fd83ef1233d6fef1760e6cb2a82c43df275542e293e874_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_accca4f836599b0130c8f542c2fdfa5fa74106d6b028660eee0e083197cc05a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accca4f836599b0130c8f542c2fdfa5fa74106d6b028660eee0e083197cc05a8->enter($__internal_accca4f836599b0130c8f542c2fdfa5fa74106d6b028660eee0e083197cc05a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_accca4f836599b0130c8f542c2fdfa5fa74106d6b028660eee0e083197cc05a8->leave($__internal_accca4f836599b0130c8f542c2fdfa5fa74106d6b028660eee0e083197cc05a8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7b2db80b40427aaf471d7899f294ad027b70bd73a41fb7087e934e5feef15fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2db80b40427aaf471d7899f294ad027b70bd73a41fb7087e934e5feef15fb0->enter($__internal_7b2db80b40427aaf471d7899f294ad027b70bd73a41fb7087e934e5feef15fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7b2db80b40427aaf471d7899f294ad027b70bd73a41fb7087e934e5feef15fb0->leave($__internal_7b2db80b40427aaf471d7899f294ad027b70bd73a41fb7087e934e5feef15fb0_prof);

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
