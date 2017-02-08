<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_36bd6f9daebab19f7b4f6f9535c626c966cf13be702f4cf3e3a0845284a943f6 extends Twig_Template
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
        $__internal_d09415b3f0b68afbd4228c98a72d6c8820872a0afcbf18ce4e34c0fdfe5df48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09415b3f0b68afbd4228c98a72d6c8820872a0afcbf18ce4e34c0fdfe5df48c->enter($__internal_d09415b3f0b68afbd4228c98a72d6c8820872a0afcbf18ce4e34c0fdfe5df48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d09415b3f0b68afbd4228c98a72d6c8820872a0afcbf18ce4e34c0fdfe5df48c->leave($__internal_d09415b3f0b68afbd4228c98a72d6c8820872a0afcbf18ce4e34c0fdfe5df48c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eca45cc70b4ec81a2d55ac1ee4a9fe09429a558a5b8a0d2ebc1c597a9b8392e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca45cc70b4ec81a2d55ac1ee4a9fe09429a558a5b8a0d2ebc1c597a9b8392e3->enter($__internal_eca45cc70b4ec81a2d55ac1ee4a9fe09429a558a5b8a0d2ebc1c597a9b8392e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eca45cc70b4ec81a2d55ac1ee4a9fe09429a558a5b8a0d2ebc1c597a9b8392e3->leave($__internal_eca45cc70b4ec81a2d55ac1ee4a9fe09429a558a5b8a0d2ebc1c597a9b8392e3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6e1eb488cd4c52910cd6fbd587f54992f0cd6079e6267c3e4084f515d365b0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1eb488cd4c52910cd6fbd587f54992f0cd6079e6267c3e4084f515d365b0a6->enter($__internal_6e1eb488cd4c52910cd6fbd587f54992f0cd6079e6267c3e4084f515d365b0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6e1eb488cd4c52910cd6fbd587f54992f0cd6079e6267c3e4084f515d365b0a6->leave($__internal_6e1eb488cd4c52910cd6fbd587f54992f0cd6079e6267c3e4084f515d365b0a6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_107f580635bce8cf8acf19eb745ab2f9b06411ec101bf6b0fe39b4fee72abbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107f580635bce8cf8acf19eb745ab2f9b06411ec101bf6b0fe39b4fee72abbbe->enter($__internal_107f580635bce8cf8acf19eb745ab2f9b06411ec101bf6b0fe39b4fee72abbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_107f580635bce8cf8acf19eb745ab2f9b06411ec101bf6b0fe39b4fee72abbbe->leave($__internal_107f580635bce8cf8acf19eb745ab2f9b06411ec101bf6b0fe39b4fee72abbbe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
