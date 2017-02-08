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
        $__internal_63b5967c259853d94b0b3d18e23f1d1eb21917612c2669903cbef49bec87b55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b5967c259853d94b0b3d18e23f1d1eb21917612c2669903cbef49bec87b55b->enter($__internal_63b5967c259853d94b0b3d18e23f1d1eb21917612c2669903cbef49bec87b55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_63b5967c259853d94b0b3d18e23f1d1eb21917612c2669903cbef49bec87b55b->leave($__internal_63b5967c259853d94b0b3d18e23f1d1eb21917612c2669903cbef49bec87b55b_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_462c3fac29efed7a06b3d6221e650a6763808d38e21ccae847f96c70873e2081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462c3fac29efed7a06b3d6221e650a6763808d38e21ccae847f96c70873e2081->enter($__internal_462c3fac29efed7a06b3d6221e650a6763808d38e21ccae847f96c70873e2081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "    ";
        // line 5
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_462c3fac29efed7a06b3d6221e650a6763808d38e21ccae847f96c70873e2081->leave($__internal_462c3fac29efed7a06b3d6221e650a6763808d38e21ccae847f96c70873e2081_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab8ec353fd788ee01585e004232c50197f84c7ecc3a8d6b2dba288ec19535c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8ec353fd788ee01585e004232c50197f84c7ecc3a8d6b2dba288ec19535c4c->enter($__internal_ab8ec353fd788ee01585e004232c50197f84c7ecc3a8d6b2dba288ec19535c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo "    ";
        // line 10
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_ab8ec353fd788ee01585e004232c50197f84c7ecc3a8d6b2dba288ec19535c4c->leave($__internal_ab8ec353fd788ee01585e004232c50197f84c7ecc3a8d6b2dba288ec19535c4c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7b6cb5ed7a591c5dc53ccbad37563334d16a9b86059e9c1918ce5e031ea6f872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6cb5ed7a591c5dc53ccbad37563334d16a9b86059e9c1918ce5e031ea6f872->enter($__internal_7b6cb5ed7a591c5dc53ccbad37563334d16a9b86059e9c1918ce5e031ea6f872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7b6cb5ed7a591c5dc53ccbad37563334d16a9b86059e9c1918ce5e031ea6f872->leave($__internal_7b6cb5ed7a591c5dc53ccbad37563334d16a9b86059e9c1918ce5e031ea6f872_prof);

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
