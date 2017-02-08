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
        $__internal_c1ec95f8ac306e53bffa76adf03601c010a7c0ef696bd55739e3d8070e9b0203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ec95f8ac306e53bffa76adf03601c010a7c0ef696bd55739e3d8070e9b0203->enter($__internal_c1ec95f8ac306e53bffa76adf03601c010a7c0ef696bd55739e3d8070e9b0203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c1ec95f8ac306e53bffa76adf03601c010a7c0ef696bd55739e3d8070e9b0203->leave($__internal_c1ec95f8ac306e53bffa76adf03601c010a7c0ef696bd55739e3d8070e9b0203_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_62d7e809fa0e875b017b108b443c4087dd60b41d3594c916874a621b1a1236b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d7e809fa0e875b017b108b443c4087dd60b41d3594c916874a621b1a1236b0->enter($__internal_62d7e809fa0e875b017b108b443c4087dd60b41d3594c916874a621b1a1236b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo "    ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
    ";
        
        $__internal_62d7e809fa0e875b017b108b443c4087dd60b41d3594c916874a621b1a1236b0->leave($__internal_62d7e809fa0e875b017b108b443c4087dd60b41d3594c916874a621b1a1236b0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_916bd3918626c6918f99c6c3b7224bbd65285b63ea3fd8dab9c440e7c1880a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916bd3918626c6918f99c6c3b7224bbd65285b63ea3fd8dab9c440e7c1880a47->enter($__internal_916bd3918626c6918f99c6c3b7224bbd65285b63ea3fd8dab9c440e7c1880a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo "    ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_916bd3918626c6918f99c6c3b7224bbd65285b63ea3fd8dab9c440e7c1880a47->leave($__internal_916bd3918626c6918f99c6c3b7224bbd65285b63ea3fd8dab9c440e7c1880a47_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f49c317844bd299a9ae410b2c5050f961b54155e6e73bccad6ef7be7663e62c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49c317844bd299a9ae410b2c5050f961b54155e6e73bccad6ef7be7663e62c3->enter($__internal_f49c317844bd299a9ae410b2c5050f961b54155e6e73bccad6ef7be7663e62c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f49c317844bd299a9ae410b2c5050f961b54155e6e73bccad6ef7be7663e62c3->leave($__internal_f49c317844bd299a9ae410b2c5050f961b54155e6e73bccad6ef7be7663e62c3_prof);

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
