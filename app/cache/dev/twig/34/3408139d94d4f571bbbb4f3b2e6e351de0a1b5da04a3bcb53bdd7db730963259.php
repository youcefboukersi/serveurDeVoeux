<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b5a8820ea5ace99ce9424ec15c58245bbc269b3fa4dffc4b3ba7293ac7966e9e extends Twig_Template
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
        $__internal_1386d0d1270a7b772ebf85e62f622d94d579e6471cd032135f2a2b1fac86e710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1386d0d1270a7b772ebf85e62f622d94d579e6471cd032135f2a2b1fac86e710->enter($__internal_1386d0d1270a7b772ebf85e62f622d94d579e6471cd032135f2a2b1fac86e710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1386d0d1270a7b772ebf85e62f622d94d579e6471cd032135f2a2b1fac86e710->leave($__internal_1386d0d1270a7b772ebf85e62f622d94d579e6471cd032135f2a2b1fac86e710_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_69e8869616cd07c3dec040939e9bdeb5cec4d9d2b95eb51c20315cf97ab26db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e8869616cd07c3dec040939e9bdeb5cec4d9d2b95eb51c20315cf97ab26db5->enter($__internal_69e8869616cd07c3dec040939e9bdeb5cec4d9d2b95eb51c20315cf97ab26db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_69e8869616cd07c3dec040939e9bdeb5cec4d9d2b95eb51c20315cf97ab26db5->leave($__internal_69e8869616cd07c3dec040939e9bdeb5cec4d9d2b95eb51c20315cf97ab26db5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_32e3a69cfc33d784644350481734ba4765cd89580067c3fb538d0666718a7330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e3a69cfc33d784644350481734ba4765cd89580067c3fb538d0666718a7330->enter($__internal_32e3a69cfc33d784644350481734ba4765cd89580067c3fb538d0666718a7330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_32e3a69cfc33d784644350481734ba4765cd89580067c3fb538d0666718a7330->leave($__internal_32e3a69cfc33d784644350481734ba4765cd89580067c3fb538d0666718a7330_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a72b272f9244540c504629e67889b74184f181f8788569fc29269cdd2307ef34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72b272f9244540c504629e67889b74184f181f8788569fc29269cdd2307ef34->enter($__internal_a72b272f9244540c504629e67889b74184f181f8788569fc29269cdd2307ef34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a72b272f9244540c504629e67889b74184f181f8788569fc29269cdd2307ef34->leave($__internal_a72b272f9244540c504629e67889b74184f181f8788569fc29269cdd2307ef34_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
