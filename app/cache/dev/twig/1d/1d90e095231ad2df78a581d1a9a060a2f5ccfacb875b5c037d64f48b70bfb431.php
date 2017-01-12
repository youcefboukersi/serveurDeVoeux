<?php

/* SRVDVServerBundle:Resetting:email.txt.twig */
class __TwigTemplate_a646e0bab8a78a08095515cc243eb735c423ea42bcc1270ff82c113a858c5f62 extends Twig_Template
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
        $__internal_208718d3607134399ae0509d00eca10d2f3f2e80f7857361313927320aacc0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208718d3607134399ae0509d00eca10d2f3f2e80f7857361313927320aacc0eb->enter($__internal_208718d3607134399ae0509d00eca10d2f3f2e80f7857361313927320aacc0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_208718d3607134399ae0509d00eca10d2f3f2e80f7857361313927320aacc0eb->leave($__internal_208718d3607134399ae0509d00eca10d2f3f2e80f7857361313927320aacc0eb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_842e23d0d3d6efa20aed86270ef478f4b60da88325e084ecf8cd52b6fc0e73f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842e23d0d3d6efa20aed86270ef478f4b60da88325e084ecf8cd52b6fc0e73f4->enter($__internal_842e23d0d3d6efa20aed86270ef478f4b60da88325e084ecf8cd52b6fc0e73f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_842e23d0d3d6efa20aed86270ef478f4b60da88325e084ecf8cd52b6fc0e73f4->leave($__internal_842e23d0d3d6efa20aed86270ef478f4b60da88325e084ecf8cd52b6fc0e73f4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8b254db66ca302148b33882d04c9c01e4ec97bc2eda4e4c6c73aa9ae79f44724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b254db66ca302148b33882d04c9c01e4ec97bc2eda4e4c6c73aa9ae79f44724->enter($__internal_8b254db66ca302148b33882d04c9c01e4ec97bc2eda4e4c6c73aa9ae79f44724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8b254db66ca302148b33882d04c9c01e4ec97bc2eda4e4c6c73aa9ae79f44724->leave($__internal_8b254db66ca302148b33882d04c9c01e4ec97bc2eda4e4c6c73aa9ae79f44724_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fd0bd6b0adcb72f11a812b8f55815ef87778524a6ea37e4ba06f7d2009044a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0bd6b0adcb72f11a812b8f55815ef87778524a6ea37e4ba06f7d2009044a48->enter($__internal_fd0bd6b0adcb72f11a812b8f55815ef87778524a6ea37e4ba06f7d2009044a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fd0bd6b0adcb72f11a812b8f55815ef87778524a6ea37e4ba06f7d2009044a48->leave($__internal_fd0bd6b0adcb72f11a812b8f55815ef87778524a6ea37e4ba06f7d2009044a48_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:email.txt.twig";
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
", "SRVDVServerBundle:Resetting:email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/email.txt.twig");
    }
}
