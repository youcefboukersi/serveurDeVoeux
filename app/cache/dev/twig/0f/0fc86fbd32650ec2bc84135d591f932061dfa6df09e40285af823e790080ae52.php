<?php

/* @SRVDVServer/Registration/email.txt.twig */
class __TwigTemplate_0828387df5f4d69acea66ea214e8409dea9bd53045391ad541562d04bc656521 extends Twig_Template
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
        $__internal_021668c19c64f6322aeb0c05a22836e5c6436f97eec0bd9a10b479ecd4828eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021668c19c64f6322aeb0c05a22836e5c6436f97eec0bd9a10b479ecd4828eb9->enter($__internal_021668c19c64f6322aeb0c05a22836e5c6436f97eec0bd9a10b479ecd4828eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_021668c19c64f6322aeb0c05a22836e5c6436f97eec0bd9a10b479ecd4828eb9->leave($__internal_021668c19c64f6322aeb0c05a22836e5c6436f97eec0bd9a10b479ecd4828eb9_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0efe5855b911b6d5ef072c5880f5737cf14a36cd4f5ea388ccec6400ee6da512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efe5855b911b6d5ef072c5880f5737cf14a36cd4f5ea388ccec6400ee6da512->enter($__internal_0efe5855b911b6d5ef072c5880f5737cf14a36cd4f5ea388ccec6400ee6da512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "    ";
        // line 5
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_0efe5855b911b6d5ef072c5880f5737cf14a36cd4f5ea388ccec6400ee6da512->leave($__internal_0efe5855b911b6d5ef072c5880f5737cf14a36cd4f5ea388ccec6400ee6da512_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0f2de7b7ae9866c03d15e63eba28944e5644accde38a95f090f727c305dddd21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2de7b7ae9866c03d15e63eba28944e5644accde38a95f090f727c305dddd21->enter($__internal_0f2de7b7ae9866c03d15e63eba28944e5644accde38a95f090f727c305dddd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo "    ";
        // line 10
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_0f2de7b7ae9866c03d15e63eba28944e5644accde38a95f090f727c305dddd21->leave($__internal_0f2de7b7ae9866c03d15e63eba28944e5644accde38a95f090f727c305dddd21_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0941f8a834e7bf93ed4b5b39af14a1b1b6db5d63eb81f7e72ffab87be6fcd8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0941f8a834e7bf93ed4b5b39af14a1b1b6db5d63eb81f7e72ffab87be6fcd8f5->enter($__internal_0941f8a834e7bf93ed4b5b39af14a1b1b6db5d63eb81f7e72ffab87be6fcd8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0941f8a834e7bf93ed4b5b39af14a1b1b6db5d63eb81f7e72ffab87be6fcd8f5->leave($__internal_0941f8a834e7bf93ed4b5b39af14a1b1b6db5d63eb81f7e72ffab87be6fcd8f5_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Registration/email.txt.twig";
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
", "@SRVDVServer/Registration/email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
