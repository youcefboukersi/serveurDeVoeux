<?php

/* SRVDVServerBundle:Registration:confirmed.html.twig */
class __TwigTemplate_cd502cbe3a168a38fbb946827b3ad3d8c545f987d84d23f9a24899519695a170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SRVDVServerBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9b2fe19d8d8b6ad45922f1c530873a39bc4c57628294fcf913149304aaf4ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b2fe19d8d8b6ad45922f1c530873a39bc4c57628294fcf913149304aaf4ae2->enter($__internal_c9b2fe19d8d8b6ad45922f1c530873a39bc4c57628294fcf913149304aaf4ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b2fe19d8d8b6ad45922f1c530873a39bc4c57628294fcf913149304aaf4ae2->leave($__internal_c9b2fe19d8d8b6ad45922f1c530873a39bc4c57628294fcf913149304aaf4ae2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b149feedbefa915bcd6eeb54704c2f61f7dd85a0d54629b6fa1199c96fa7a754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b149feedbefa915bcd6eeb54704c2f61f7dd85a0d54629b6fa1199c96fa7a754->enter($__internal_b149feedbefa915bcd6eeb54704c2f61f7dd85a0d54629b6fa1199c96fa7a754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b149feedbefa915bcd6eeb54704c2f61f7dd85a0d54629b6fa1199c96fa7a754->leave($__internal_b149feedbefa915bcd6eeb54704c2f61f7dd85a0d54629b6fa1199c96fa7a754_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Registration:confirmed.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
