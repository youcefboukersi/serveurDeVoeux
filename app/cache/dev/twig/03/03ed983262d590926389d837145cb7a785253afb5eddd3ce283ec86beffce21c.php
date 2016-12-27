<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3ec64be0a6db32361b10ffbd6cc442c7f9395d47470734d58e647ee807d63063 extends Twig_Template
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
        $__internal_2f5de0c8d61208fa1b2e17a4e43dd22b2a3e9957bf183f9540e7859418b384ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5de0c8d61208fa1b2e17a4e43dd22b2a3e9957bf183f9540e7859418b384ec->enter($__internal_2f5de0c8d61208fa1b2e17a4e43dd22b2a3e9957bf183f9540e7859418b384ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2f5de0c8d61208fa1b2e17a4e43dd22b2a3e9957bf183f9540e7859418b384ec->leave($__internal_2f5de0c8d61208fa1b2e17a4e43dd22b2a3e9957bf183f9540e7859418b384ec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e8b9548e651c778e5727eed5b2278d34dd192b00ebccd9a42ac69373f9c6bd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b9548e651c778e5727eed5b2278d34dd192b00ebccd9a42ac69373f9c6bd17->enter($__internal_e8b9548e651c778e5727eed5b2278d34dd192b00ebccd9a42ac69373f9c6bd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e8b9548e651c778e5727eed5b2278d34dd192b00ebccd9a42ac69373f9c6bd17->leave($__internal_e8b9548e651c778e5727eed5b2278d34dd192b00ebccd9a42ac69373f9c6bd17_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0c1a573946a83d28c8a00f01539b143f5bfdbf32ce2b1f3bdbb80a80c29c1a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1a573946a83d28c8a00f01539b143f5bfdbf32ce2b1f3bdbb80a80c29c1a8c->enter($__internal_0c1a573946a83d28c8a00f01539b143f5bfdbf32ce2b1f3bdbb80a80c29c1a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0c1a573946a83d28c8a00f01539b143f5bfdbf32ce2b1f3bdbb80a80c29c1a8c->leave($__internal_0c1a573946a83d28c8a00f01539b143f5bfdbf32ce2b1f3bdbb80a80c29c1a8c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3052cfbd63139249d41a31dc044ffcd11ca772736f57ef5ef674da5446f53742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3052cfbd63139249d41a31dc044ffcd11ca772736f57ef5ef674da5446f53742->enter($__internal_3052cfbd63139249d41a31dc044ffcd11ca772736f57ef5ef674da5446f53742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3052cfbd63139249d41a31dc044ffcd11ca772736f57ef5ef674da5446f53742->leave($__internal_3052cfbd63139249d41a31dc044ffcd11ca772736f57ef5ef674da5446f53742_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/email.txt.twig");
    }
}
