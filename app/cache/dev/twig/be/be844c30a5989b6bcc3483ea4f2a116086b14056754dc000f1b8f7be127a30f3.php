<?php

/* @SRVDVServer/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_5b1664035f1a4eb9ef9e773b30a858f6c7be612d8e41b8246865cad04959d07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "@SRVDVServer/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a49bfe2e8a9befecf914352680f67f46afc32bb30481cb5df9425b07c89fa7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49bfe2e8a9befecf914352680f67f46afc32bb30481cb5df9425b07c89fa7ba->enter($__internal_a49bfe2e8a9befecf914352680f67f46afc32bb30481cb5df9425b07c89fa7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49bfe2e8a9befecf914352680f67f46afc32bb30481cb5df9425b07c89fa7ba->leave($__internal_a49bfe2e8a9befecf914352680f67f46afc32bb30481cb5df9425b07c89fa7ba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_489797025c892764af5e8fc975ff26b4144c45af8b1b66dbda54448ad8dc5063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489797025c892764af5e8fc975ff26b4144c45af8b1b66dbda54448ad8dc5063->enter($__internal_489797025c892764af5e8fc975ff26b4144c45af8b1b66dbda54448ad8dc5063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_489797025c892764af5e8fc975ff26b4144c45af8b1b66dbda54448ad8dc5063->leave($__internal_489797025c892764af5e8fc975ff26b4144c45af8b1b66dbda54448ad8dc5063_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/passwordAlreadyRequested.html.twig";
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
", "@SRVDVServer/Resetting/passwordAlreadyRequested.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
