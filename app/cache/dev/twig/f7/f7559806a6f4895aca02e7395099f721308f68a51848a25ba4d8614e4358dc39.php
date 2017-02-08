<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_36bd6f9daebab19f7b4f6f9535c626c966cf13be702f4cf3e3a0845284a943f6 extends Twig_Template
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
        $__internal_415a18690a88f32f963785a41c3f56ae30d6bfe9719a5a592573275403614ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415a18690a88f32f963785a41c3f56ae30d6bfe9719a5a592573275403614ab4->enter($__internal_415a18690a88f32f963785a41c3f56ae30d6bfe9719a5a592573275403614ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_415a18690a88f32f963785a41c3f56ae30d6bfe9719a5a592573275403614ab4->leave($__internal_415a18690a88f32f963785a41c3f56ae30d6bfe9719a5a592573275403614ab4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_37678b5401cb0ad5f56ef7ef07670a473a1440c59c1dd049309fce3bc812b67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37678b5401cb0ad5f56ef7ef07670a473a1440c59c1dd049309fce3bc812b67d->enter($__internal_37678b5401cb0ad5f56ef7ef07670a473a1440c59c1dd049309fce3bc812b67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_37678b5401cb0ad5f56ef7ef07670a473a1440c59c1dd049309fce3bc812b67d->leave($__internal_37678b5401cb0ad5f56ef7ef07670a473a1440c59c1dd049309fce3bc812b67d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_03a4a423fe37521e041cab0847b9262cf5236170d338c821cd9dfb999f968317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a4a423fe37521e041cab0847b9262cf5236170d338c821cd9dfb999f968317->enter($__internal_03a4a423fe37521e041cab0847b9262cf5236170d338c821cd9dfb999f968317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_03a4a423fe37521e041cab0847b9262cf5236170d338c821cd9dfb999f968317->leave($__internal_03a4a423fe37521e041cab0847b9262cf5236170d338c821cd9dfb999f968317_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_772e4e23f116bed44002b2dbaa3d03a8a491ecd14135d9c1ee9c6e3b2c5d4a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772e4e23f116bed44002b2dbaa3d03a8a491ecd14135d9c1ee9c6e3b2c5d4a7d->enter($__internal_772e4e23f116bed44002b2dbaa3d03a8a491ecd14135d9c1ee9c6e3b2c5d4a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_772e4e23f116bed44002b2dbaa3d03a8a491ecd14135d9c1ee9c6e3b2c5d4a7d->leave($__internal_772e4e23f116bed44002b2dbaa3d03a8a491ecd14135d9c1ee9c6e3b2c5d4a7d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
