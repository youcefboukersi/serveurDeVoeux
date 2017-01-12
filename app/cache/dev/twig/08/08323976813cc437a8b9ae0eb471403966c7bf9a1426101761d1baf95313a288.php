<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_44a1e7cfe1742a8f88424dc10c801530ff143207501091634947ad6edc2223c6 extends Twig_Template
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
        $__internal_67dc39ee4735994204c745cda7d0eb256afca9417fb368c29f30cd0e704a4bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67dc39ee4735994204c745cda7d0eb256afca9417fb368c29f30cd0e704a4bdc->enter($__internal_67dc39ee4735994204c745cda7d0eb256afca9417fb368c29f30cd0e704a4bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_67dc39ee4735994204c745cda7d0eb256afca9417fb368c29f30cd0e704a4bdc->leave($__internal_67dc39ee4735994204c745cda7d0eb256afca9417fb368c29f30cd0e704a4bdc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_904f1e7ff1b403a3e39338faf5055540cf3a121a1134e1118cfde0cc2758a873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904f1e7ff1b403a3e39338faf5055540cf3a121a1134e1118cfde0cc2758a873->enter($__internal_904f1e7ff1b403a3e39338faf5055540cf3a121a1134e1118cfde0cc2758a873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_904f1e7ff1b403a3e39338faf5055540cf3a121a1134e1118cfde0cc2758a873->leave($__internal_904f1e7ff1b403a3e39338faf5055540cf3a121a1134e1118cfde0cc2758a873_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_121ed9c377367385790f13ca08fa44cef8e890bc7e7e2e4b4981127ef912d861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121ed9c377367385790f13ca08fa44cef8e890bc7e7e2e4b4981127ef912d861->enter($__internal_121ed9c377367385790f13ca08fa44cef8e890bc7e7e2e4b4981127ef912d861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_121ed9c377367385790f13ca08fa44cef8e890bc7e7e2e4b4981127ef912d861->leave($__internal_121ed9c377367385790f13ca08fa44cef8e890bc7e7e2e4b4981127ef912d861_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_89912fe54c082c38a933ad367827fd4df236ff7c81f1fcab6049b8d2a19ba5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89912fe54c082c38a933ad367827fd4df236ff7c81f1fcab6049b8d2a19ba5f7->enter($__internal_89912fe54c082c38a933ad367827fd4df236ff7c81f1fcab6049b8d2a19ba5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_89912fe54c082c38a933ad367827fd4df236ff7c81f1fcab6049b8d2a19ba5f7->leave($__internal_89912fe54c082c38a933ad367827fd4df236ff7c81f1fcab6049b8d2a19ba5f7_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/email.txt.twig");
    }
}
