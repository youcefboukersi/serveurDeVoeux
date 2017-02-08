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
        $__internal_88445547e18e01bd0f99629b66afd5acb47b2281e0e8c19e85614b5c5b2bc2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88445547e18e01bd0f99629b66afd5acb47b2281e0e8c19e85614b5c5b2bc2fd->enter($__internal_88445547e18e01bd0f99629b66afd5acb47b2281e0e8c19e85614b5c5b2bc2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_88445547e18e01bd0f99629b66afd5acb47b2281e0e8c19e85614b5c5b2bc2fd->leave($__internal_88445547e18e01bd0f99629b66afd5acb47b2281e0e8c19e85614b5c5b2bc2fd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d2c2879e19efd9c5bc2962d9bce02337bb232b06bde4c1c9dd503cefe8d183a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c2879e19efd9c5bc2962d9bce02337bb232b06bde4c1c9dd503cefe8d183a9->enter($__internal_d2c2879e19efd9c5bc2962d9bce02337bb232b06bde4c1c9dd503cefe8d183a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_d2c2879e19efd9c5bc2962d9bce02337bb232b06bde4c1c9dd503cefe8d183a9->leave($__internal_d2c2879e19efd9c5bc2962d9bce02337bb232b06bde4c1c9dd503cefe8d183a9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3948b3ebae1202a1b02aeb05049ea0508581be152a7e2f56183e36e3ae827927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3948b3ebae1202a1b02aeb05049ea0508581be152a7e2f56183e36e3ae827927->enter($__internal_3948b3ebae1202a1b02aeb05049ea0508581be152a7e2f56183e36e3ae827927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3948b3ebae1202a1b02aeb05049ea0508581be152a7e2f56183e36e3ae827927->leave($__internal_3948b3ebae1202a1b02aeb05049ea0508581be152a7e2f56183e36e3ae827927_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f34c2a37e3ac50cd6e9b1d3635849132abb981147142691b8349cab928fc86fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34c2a37e3ac50cd6e9b1d3635849132abb981147142691b8349cab928fc86fe->enter($__internal_f34c2a37e3ac50cd6e9b1d3635849132abb981147142691b8349cab928fc86fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f34c2a37e3ac50cd6e9b1d3635849132abb981147142691b8349cab928fc86fe->leave($__internal_f34c2a37e3ac50cd6e9b1d3635849132abb981147142691b8349cab928fc86fe_prof);

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
