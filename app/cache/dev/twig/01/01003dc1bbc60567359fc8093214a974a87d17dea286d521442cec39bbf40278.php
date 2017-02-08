<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f2c596615f199775718dddf77809c3e5f14f28a1723e210bb452efd4fddd400a extends Twig_Template
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
        $__internal_7db0c8ccec1ebde6ed6df4634045bcda86061722f844643fa2ac9dc34c14245c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db0c8ccec1ebde6ed6df4634045bcda86061722f844643fa2ac9dc34c14245c->enter($__internal_7db0c8ccec1ebde6ed6df4634045bcda86061722f844643fa2ac9dc34c14245c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7db0c8ccec1ebde6ed6df4634045bcda86061722f844643fa2ac9dc34c14245c->leave($__internal_7db0c8ccec1ebde6ed6df4634045bcda86061722f844643fa2ac9dc34c14245c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_93b6c2823193db14e15081966caa8301c437879fb2a35c7e9158de6242ccdad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b6c2823193db14e15081966caa8301c437879fb2a35c7e9158de6242ccdad8->enter($__internal_93b6c2823193db14e15081966caa8301c437879fb2a35c7e9158de6242ccdad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_93b6c2823193db14e15081966caa8301c437879fb2a35c7e9158de6242ccdad8->leave($__internal_93b6c2823193db14e15081966caa8301c437879fb2a35c7e9158de6242ccdad8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cf5e1df61eb1b5a69034080409d1edc8ab103794a0f0795253a98181c29d8d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5e1df61eb1b5a69034080409d1edc8ab103794a0f0795253a98181c29d8d94->enter($__internal_cf5e1df61eb1b5a69034080409d1edc8ab103794a0f0795253a98181c29d8d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cf5e1df61eb1b5a69034080409d1edc8ab103794a0f0795253a98181c29d8d94->leave($__internal_cf5e1df61eb1b5a69034080409d1edc8ab103794a0f0795253a98181c29d8d94_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1b13ddaddf67e751fbe39d9e73a887f2bc940db9b571d151cdacdafa082f3a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b13ddaddf67e751fbe39d9e73a887f2bc940db9b571d151cdacdafa082f3a49->enter($__internal_1b13ddaddf67e751fbe39d9e73a887f2bc940db9b571d151cdacdafa082f3a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1b13ddaddf67e751fbe39d9e73a887f2bc940db9b571d151cdacdafa082f3a49->leave($__internal_1b13ddaddf67e751fbe39d9e73a887f2bc940db9b571d151cdacdafa082f3a49_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
