<?php

/* @SRVDVServer/Registration/confirmed.html.twig */
class __TwigTemplate_1374dc1380503b9ab14d94713ac87887f3985bddbd0a0a5fe9598c48e638b30c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SRVDVServer/Registration/confirmed.html.twig", 1);
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
        $__internal_636a623a9dc4c724fc1eb48beea4a53a7628bedddc176e1d6327910c3caae585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636a623a9dc4c724fc1eb48beea4a53a7628bedddc176e1d6327910c3caae585->enter($__internal_636a623a9dc4c724fc1eb48beea4a53a7628bedddc176e1d6327910c3caae585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_636a623a9dc4c724fc1eb48beea4a53a7628bedddc176e1d6327910c3caae585->leave($__internal_636a623a9dc4c724fc1eb48beea4a53a7628bedddc176e1d6327910c3caae585_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b163e6b9cebfb7769697bef8331845112378583ad0595606b374fe8cdcb7000b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b163e6b9cebfb7769697bef8331845112378583ad0595606b374fe8cdcb7000b->enter($__internal_b163e6b9cebfb7769697bef8331845112378583ad0595606b374fe8cdcb7000b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b163e6b9cebfb7769697bef8331845112378583ad0595606b374fe8cdcb7000b->leave($__internal_b163e6b9cebfb7769697bef8331845112378583ad0595606b374fe8cdcb7000b_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Registration/confirmed.html.twig";
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
", "@SRVDVServer/Registration/confirmed.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
