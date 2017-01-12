<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_513671346953cbdcbb0d6ebea80e987fdccbd0bee3388a6498bc081c45f3964e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_fa535d65d4cc674ea2e3117951d2d3abd94f4bb556620a187e729b116f688caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa535d65d4cc674ea2e3117951d2d3abd94f4bb556620a187e729b116f688caa->enter($__internal_fa535d65d4cc674ea2e3117951d2d3abd94f4bb556620a187e729b116f688caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa535d65d4cc674ea2e3117951d2d3abd94f4bb556620a187e729b116f688caa->leave($__internal_fa535d65d4cc674ea2e3117951d2d3abd94f4bb556620a187e729b116f688caa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a63f8f4c2a89b1d7cf8038e30a3bad6948308a616ffb7f8dc3361da32ec21ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63f8f4c2a89b1d7cf8038e30a3bad6948308a616ffb7f8dc3361da32ec21ee1->enter($__internal_a63f8f4c2a89b1d7cf8038e30a3bad6948308a616ffb7f8dc3361da32ec21ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a63f8f4c2a89b1d7cf8038e30a3bad6948308a616ffb7f8dc3361da32ec21ee1->leave($__internal_a63f8f4c2a89b1d7cf8038e30a3bad6948308a616ffb7f8dc3361da32ec21ee1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/checkEmail.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
