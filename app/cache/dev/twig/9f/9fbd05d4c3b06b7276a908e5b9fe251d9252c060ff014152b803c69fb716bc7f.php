<?php

/* SRVDVServerBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_b116557bcecfd3fc406f1358a842c245ceab79997d42d6afbfbf559236a78111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SRVDVServerBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_39a7faa911dde261444e0d40ae40c98e2c065f17576f3e4e0f976c6a751fbc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a7faa911dde261444e0d40ae40c98e2c065f17576f3e4e0f976c6a751fbc12->enter($__internal_39a7faa911dde261444e0d40ae40c98e2c065f17576f3e4e0f976c6a751fbc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a7faa911dde261444e0d40ae40c98e2c065f17576f3e4e0f976c6a751fbc12->leave($__internal_39a7faa911dde261444e0d40ae40c98e2c065f17576f3e4e0f976c6a751fbc12_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76f09f5672214c756cd258dc5c5eb12c1dc9624902803862f9b9aa6db1179f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f09f5672214c756cd258dc5c5eb12c1dc9624902803862f9b9aa6db1179f7a->enter($__internal_76f09f5672214c756cd258dc5c5eb12c1dc9624902803862f9b9aa6db1179f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_76f09f5672214c756cd258dc5c5eb12c1dc9624902803862f9b9aa6db1179f7a->leave($__internal_76f09f5672214c756cd258dc5c5eb12c1dc9624902803862f9b9aa6db1179f7a_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 6,  11 => 1,);
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
", "SRVDVServerBundle:Registration:checkEmail.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
