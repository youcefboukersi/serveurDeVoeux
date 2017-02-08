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
        $__internal_1b3705db612a8f6230a4cb78170d3a9e91a00d1e9e181d66752588ad47852ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3705db612a8f6230a4cb78170d3a9e91a00d1e9e181d66752588ad47852ec6->enter($__internal_1b3705db612a8f6230a4cb78170d3a9e91a00d1e9e181d66752588ad47852ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1b3705db612a8f6230a4cb78170d3a9e91a00d1e9e181d66752588ad47852ec6->leave($__internal_1b3705db612a8f6230a4cb78170d3a9e91a00d1e9e181d66752588ad47852ec6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_812629f408a5c846d5be8f583d17857d9cc8d05e646239dc36d2a761240cd050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812629f408a5c846d5be8f583d17857d9cc8d05e646239dc36d2a761240cd050->enter($__internal_812629f408a5c846d5be8f583d17857d9cc8d05e646239dc36d2a761240cd050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_812629f408a5c846d5be8f583d17857d9cc8d05e646239dc36d2a761240cd050->leave($__internal_812629f408a5c846d5be8f583d17857d9cc8d05e646239dc36d2a761240cd050_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6116a9ec4afcf9311ae6da91f7cd66c79575d960e9b5bcc91f00fd15556dcefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6116a9ec4afcf9311ae6da91f7cd66c79575d960e9b5bcc91f00fd15556dcefc->enter($__internal_6116a9ec4afcf9311ae6da91f7cd66c79575d960e9b5bcc91f00fd15556dcefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6116a9ec4afcf9311ae6da91f7cd66c79575d960e9b5bcc91f00fd15556dcefc->leave($__internal_6116a9ec4afcf9311ae6da91f7cd66c79575d960e9b5bcc91f00fd15556dcefc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_644926652969a994dd7804d765dda21690152e6bc0eea9dfcbb54eac12d9ec00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644926652969a994dd7804d765dda21690152e6bc0eea9dfcbb54eac12d9ec00->enter($__internal_644926652969a994dd7804d765dda21690152e6bc0eea9dfcbb54eac12d9ec00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_644926652969a994dd7804d765dda21690152e6bc0eea9dfcbb54eac12d9ec00->leave($__internal_644926652969a994dd7804d765dda21690152e6bc0eea9dfcbb54eac12d9ec00_prof);

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
