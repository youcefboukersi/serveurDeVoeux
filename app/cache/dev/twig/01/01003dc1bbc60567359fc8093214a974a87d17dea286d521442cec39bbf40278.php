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
        $__internal_65b6597a42b1a1060ba69be51a17e68af71128230ea64c7a4a52e7c19a8a7a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b6597a42b1a1060ba69be51a17e68af71128230ea64c7a4a52e7c19a8a7a14->enter($__internal_65b6597a42b1a1060ba69be51a17e68af71128230ea64c7a4a52e7c19a8a7a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_65b6597a42b1a1060ba69be51a17e68af71128230ea64c7a4a52e7c19a8a7a14->leave($__internal_65b6597a42b1a1060ba69be51a17e68af71128230ea64c7a4a52e7c19a8a7a14_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_950c7056b032cd32120908c251052a8fa82d6ee6716a05d304b3475e0e2b01d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950c7056b032cd32120908c251052a8fa82d6ee6716a05d304b3475e0e2b01d8->enter($__internal_950c7056b032cd32120908c251052a8fa82d6ee6716a05d304b3475e0e2b01d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_950c7056b032cd32120908c251052a8fa82d6ee6716a05d304b3475e0e2b01d8->leave($__internal_950c7056b032cd32120908c251052a8fa82d6ee6716a05d304b3475e0e2b01d8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1760365e9be6f513eb14ee243303601c9b72778f79d76ecbf1e4243dfbcd6d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1760365e9be6f513eb14ee243303601c9b72778f79d76ecbf1e4243dfbcd6d2b->enter($__internal_1760365e9be6f513eb14ee243303601c9b72778f79d76ecbf1e4243dfbcd6d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1760365e9be6f513eb14ee243303601c9b72778f79d76ecbf1e4243dfbcd6d2b->leave($__internal_1760365e9be6f513eb14ee243303601c9b72778f79d76ecbf1e4243dfbcd6d2b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bf51320b2ec4c35b3470fa440b981facd21e8016dd4293e0cbf19d93aff9faff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf51320b2ec4c35b3470fa440b981facd21e8016dd4293e0cbf19d93aff9faff->enter($__internal_bf51320b2ec4c35b3470fa440b981facd21e8016dd4293e0cbf19d93aff9faff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bf51320b2ec4c35b3470fa440b981facd21e8016dd4293e0cbf19d93aff9faff->leave($__internal_bf51320b2ec4c35b3470fa440b981facd21e8016dd4293e0cbf19d93aff9faff_prof);

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
