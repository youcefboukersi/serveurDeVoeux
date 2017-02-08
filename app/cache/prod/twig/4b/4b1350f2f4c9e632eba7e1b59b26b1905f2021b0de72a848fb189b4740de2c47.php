<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ec0484ed49a7a7f4ba62141eab955b9f230e000ce14f5e287ecc4ac63d452517 extends Twig_Template
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
        $__internal_03d9c92920ae7d698242b5cef6f790c6570d7bf2c436eb6ee0af741fae744574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d9c92920ae7d698242b5cef6f790c6570d7bf2c436eb6ee0af741fae744574->enter($__internal_03d9c92920ae7d698242b5cef6f790c6570d7bf2c436eb6ee0af741fae744574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_03d9c92920ae7d698242b5cef6f790c6570d7bf2c436eb6ee0af741fae744574->leave($__internal_03d9c92920ae7d698242b5cef6f790c6570d7bf2c436eb6ee0af741fae744574_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f5fee8632c7ba265dd5e1f0922e14be3fe19f1734f292cee759442935577d9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fee8632c7ba265dd5e1f0922e14be3fe19f1734f292cee759442935577d9f2->enter($__internal_f5fee8632c7ba265dd5e1f0922e14be3fe19f1734f292cee759442935577d9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "    ";
        // line 5
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_f5fee8632c7ba265dd5e1f0922e14be3fe19f1734f292cee759442935577d9f2->leave($__internal_f5fee8632c7ba265dd5e1f0922e14be3fe19f1734f292cee759442935577d9f2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8db890916cde07de8123f4a830fde0d47aa7e02651f78ca9ad97393f5d2e15fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db890916cde07de8123f4a830fde0d47aa7e02651f78ca9ad97393f5d2e15fb->enter($__internal_8db890916cde07de8123f4a830fde0d47aa7e02651f78ca9ad97393f5d2e15fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo "    ";
        // line 10
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_8db890916cde07de8123f4a830fde0d47aa7e02651f78ca9ad97393f5d2e15fb->leave($__internal_8db890916cde07de8123f4a830fde0d47aa7e02651f78ca9ad97393f5d2e15fb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3b2e1c1740d3720bb68f0381e22a473be32c58238966c93d50cf01d3f5a3bfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2e1c1740d3720bb68f0381e22a473be32c58238966c93d50cf01d3f5a3bfcd->enter($__internal_3b2e1c1740d3720bb68f0381e22a473be32c58238966c93d50cf01d3f5a3bfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3b2e1c1740d3720bb68f0381e22a473be32c58238966c93d50cf01d3f5a3bfcd->leave($__internal_3b2e1c1740d3720bb68f0381e22a473be32c58238966c93d50cf01d3f5a3bfcd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/Registration/email.txt.twig");
    }
}
