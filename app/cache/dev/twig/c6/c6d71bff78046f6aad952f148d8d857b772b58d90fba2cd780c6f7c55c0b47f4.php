<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_cf628bf1342e5917623f40feeb4a9be7f6bba160ea24aa46353bf1b6c61ea8a4 extends Twig_Template
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
        $__internal_7d06cb89e51c0c8f85cf46b2a7e078faad2fb259e5ac68dcc04497833000cc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d06cb89e51c0c8f85cf46b2a7e078faad2fb259e5ac68dcc04497833000cc2d->enter($__internal_7d06cb89e51c0c8f85cf46b2a7e078faad2fb259e5ac68dcc04497833000cc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7d06cb89e51c0c8f85cf46b2a7e078faad2fb259e5ac68dcc04497833000cc2d->leave($__internal_7d06cb89e51c0c8f85cf46b2a7e078faad2fb259e5ac68dcc04497833000cc2d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7c2c7fbbc5e7ec167ef09b74119bcaf92a738322f0807ccef3dfe9f119534b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2c7fbbc5e7ec167ef09b74119bcaf92a738322f0807ccef3dfe9f119534b17->enter($__internal_7c2c7fbbc5e7ec167ef09b74119bcaf92a738322f0807ccef3dfe9f119534b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_7c2c7fbbc5e7ec167ef09b74119bcaf92a738322f0807ccef3dfe9f119534b17->leave($__internal_7c2c7fbbc5e7ec167ef09b74119bcaf92a738322f0807ccef3dfe9f119534b17_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f9ba4c6c9427c92b4de1164b6919d6e8dcc27d5ef47a6ecca4a50f00ee7a559b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ba4c6c9427c92b4de1164b6919d6e8dcc27d5ef47a6ecca4a50f00ee7a559b->enter($__internal_f9ba4c6c9427c92b4de1164b6919d6e8dcc27d5ef47a6ecca4a50f00ee7a559b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f9ba4c6c9427c92b4de1164b6919d6e8dcc27d5ef47a6ecca4a50f00ee7a559b->leave($__internal_f9ba4c6c9427c92b4de1164b6919d6e8dcc27d5ef47a6ecca4a50f00ee7a559b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_912fb678b58d056eb24e9178bfb396c468d9f491ff5fb8845e587408aef0a0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912fb678b58d056eb24e9178bfb396c468d9f491ff5fb8845e587408aef0a0f7->enter($__internal_912fb678b58d056eb24e9178bfb396c468d9f491ff5fb8845e587408aef0a0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_912fb678b58d056eb24e9178bfb396c468d9f491ff5fb8845e587408aef0a0f7->leave($__internal_912fb678b58d056eb24e9178bfb396c468d9f491ff5fb8845e587408aef0a0f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
