<?php

/* @SRVDVServer/Resetting/email.txt.twig */
class __TwigTemplate_c359cfc80ee8ff15841b5b5c6a4aebb96b6a237248c79931a33c89e812c6579f extends Twig_Template
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
        $__internal_7ff9882602da5c73ea82ab5b44e84c6427212ee87870783fe03876c742e02ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff9882602da5c73ea82ab5b44e84c6427212ee87870783fe03876c742e02ee8->enter($__internal_7ff9882602da5c73ea82ab5b44e84c6427212ee87870783fe03876c742e02ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7ff9882602da5c73ea82ab5b44e84c6427212ee87870783fe03876c742e02ee8->leave($__internal_7ff9882602da5c73ea82ab5b44e84c6427212ee87870783fe03876c742e02ee8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f213f2fc0347e2220e91000c9df633ddb4836c3a17bce17751a6e041edb171e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f213f2fc0347e2220e91000c9df633ddb4836c3a17bce17751a6e041edb171e0->enter($__internal_f213f2fc0347e2220e91000c9df633ddb4836c3a17bce17751a6e041edb171e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_f213f2fc0347e2220e91000c9df633ddb4836c3a17bce17751a6e041edb171e0->leave($__internal_f213f2fc0347e2220e91000c9df633ddb4836c3a17bce17751a6e041edb171e0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_708f88cca2b41f224f61105497c4d17ce5e5d78a3c90662000e4f8529d73fb30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708f88cca2b41f224f61105497c4d17ce5e5d78a3c90662000e4f8529d73fb30->enter($__internal_708f88cca2b41f224f61105497c4d17ce5e5d78a3c90662000e4f8529d73fb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_708f88cca2b41f224f61105497c4d17ce5e5d78a3c90662000e4f8529d73fb30->leave($__internal_708f88cca2b41f224f61105497c4d17ce5e5d78a3c90662000e4f8529d73fb30_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9b0618d6bb16ee00a6904e712e8d3510d99de9e47441f80e82a06391af2ed5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0618d6bb16ee00a6904e712e8d3510d99de9e47441f80e82a06391af2ed5d9->enter($__internal_9b0618d6bb16ee00a6904e712e8d3510d99de9e47441f80e82a06391af2ed5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9b0618d6bb16ee00a6904e712e8d3510d99de9e47441f80e82a06391af2ed5d9->leave($__internal_9b0618d6bb16ee00a6904e712e8d3510d99de9e47441f80e82a06391af2ed5d9_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/email.txt.twig";
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
", "@SRVDVServer/Resetting/email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
