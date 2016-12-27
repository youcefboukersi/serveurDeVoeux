<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e5729236e0ede88cee1090151cdc1a17777d3894d1006f353845205da6e2849d extends Twig_Template
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
        $__internal_b3c6d41460eff5b609687add5e605399a6a5065e409158b06af62d8843ee6192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c6d41460eff5b609687add5e605399a6a5065e409158b06af62d8843ee6192->enter($__internal_b3c6d41460eff5b609687add5e605399a6a5065e409158b06af62d8843ee6192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b3c6d41460eff5b609687add5e605399a6a5065e409158b06af62d8843ee6192->leave($__internal_b3c6d41460eff5b609687add5e605399a6a5065e409158b06af62d8843ee6192_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d9463555875fc85bc0ba1d77ec56928e7ce100bb025e3ce0802662dc2ae3a9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9463555875fc85bc0ba1d77ec56928e7ce100bb025e3ce0802662dc2ae3a9f3->enter($__internal_d9463555875fc85bc0ba1d77ec56928e7ce100bb025e3ce0802662dc2ae3a9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_d9463555875fc85bc0ba1d77ec56928e7ce100bb025e3ce0802662dc2ae3a9f3->leave($__internal_d9463555875fc85bc0ba1d77ec56928e7ce100bb025e3ce0802662dc2ae3a9f3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6fca10612547144dc46dd9d6531e743470764d8100916844784acdea1c3f3189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fca10612547144dc46dd9d6531e743470764d8100916844784acdea1c3f3189->enter($__internal_6fca10612547144dc46dd9d6531e743470764d8100916844784acdea1c3f3189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6fca10612547144dc46dd9d6531e743470764d8100916844784acdea1c3f3189->leave($__internal_6fca10612547144dc46dd9d6531e743470764d8100916844784acdea1c3f3189_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bc442b44f81dbe4e4ce2936bcb11daae919ea6ce7b593dd6b020f350c73bf97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc442b44f81dbe4e4ce2936bcb11daae919ea6ce7b593dd6b020f350c73bf97b->enter($__internal_bc442b44f81dbe4e4ce2936bcb11daae919ea6ce7b593dd6b020f350c73bf97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bc442b44f81dbe4e4ce2936bcb11daae919ea6ce7b593dd6b020f350c73bf97b->leave($__internal_bc442b44f81dbe4e4ce2936bcb11daae919ea6ce7b593dd6b020f350c73bf97b_prof);

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
", "@FOSUser/Resetting/email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
