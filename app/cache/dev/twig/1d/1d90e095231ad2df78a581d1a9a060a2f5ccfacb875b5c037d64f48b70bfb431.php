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
        $__internal_ae0bf4533e1d79d65fa65b80e01706afc0419bf5e5276af3f2478ed9c510fe8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0bf4533e1d79d65fa65b80e01706afc0419bf5e5276af3f2478ed9c510fe8b->enter($__internal_ae0bf4533e1d79d65fa65b80e01706afc0419bf5e5276af3f2478ed9c510fe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ae0bf4533e1d79d65fa65b80e01706afc0419bf5e5276af3f2478ed9c510fe8b->leave($__internal_ae0bf4533e1d79d65fa65b80e01706afc0419bf5e5276af3f2478ed9c510fe8b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_51b1c7df9a420470126f8f407e52ec63e11c188dfa15025b577ccd4d61480208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b1c7df9a420470126f8f407e52ec63e11c188dfa15025b577ccd4d61480208->enter($__internal_51b1c7df9a420470126f8f407e52ec63e11c188dfa15025b577ccd4d61480208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_51b1c7df9a420470126f8f407e52ec63e11c188dfa15025b577ccd4d61480208->leave($__internal_51b1c7df9a420470126f8f407e52ec63e11c188dfa15025b577ccd4d61480208_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_810a7cebc67cc22651ec4795580779b3d4bd6fa994a19ac9bcc367336ca615c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810a7cebc67cc22651ec4795580779b3d4bd6fa994a19ac9bcc367336ca615c5->enter($__internal_810a7cebc67cc22651ec4795580779b3d4bd6fa994a19ac9bcc367336ca615c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_810a7cebc67cc22651ec4795580779b3d4bd6fa994a19ac9bcc367336ca615c5->leave($__internal_810a7cebc67cc22651ec4795580779b3d4bd6fa994a19ac9bcc367336ca615c5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_901668a74a80cfa0b53a0afb161f76051b039378f4579e1de97f1b1e4742a3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901668a74a80cfa0b53a0afb161f76051b039378f4579e1de97f1b1e4742a3cb->enter($__internal_901668a74a80cfa0b53a0afb161f76051b039378f4579e1de97f1b1e4742a3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_901668a74a80cfa0b53a0afb161f76051b039378f4579e1de97f1b1e4742a3cb->leave($__internal_901668a74a80cfa0b53a0afb161f76051b039378f4579e1de97f1b1e4742a3cb_prof);

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
