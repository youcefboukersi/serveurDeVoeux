<?php

/* SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_97e9e28557809a18bdbb154ea1cd32f7292260a94c35252d1bfa2349917df75d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66197f216feaa278a983e2873f83b3d78f7f025d321b0fc1a054e9505903c17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66197f216feaa278a983e2873f83b3d78f7f025d321b0fc1a054e9505903c17f->enter($__internal_66197f216feaa278a983e2873f83b3d78f7f025d321b0fc1a054e9505903c17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66197f216feaa278a983e2873f83b3d78f7f025d321b0fc1a054e9505903c17f->leave($__internal_66197f216feaa278a983e2873f83b3d78f7f025d321b0fc1a054e9505903c17f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6984c7ebca3d3e55c85ecb8b4a4a7a894b23fee373c385e356409e408800d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6984c7ebca3d3e55c85ecb8b4a4a7a894b23fee373c385e356409e408800d68->enter($__internal_e6984c7ebca3d3e55c85ecb8b4a4a7a894b23fee373c385e356409e408800d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e6984c7ebca3d3e55c85ecb8b4a4a7a894b23fee373c385e356409e408800d68->leave($__internal_e6984c7ebca3d3e55c85ecb8b4a4a7a894b23fee373c385e356409e408800d68_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
