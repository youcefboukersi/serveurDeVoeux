<?php

/* SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_cc5e1b01fc1df7226c0cd070ce16494b5309799db0e92ec6b0686fe50f7e2fa9 extends Twig_Template
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
        $__internal_aadc6c5fa6749a4600d26c94573cfa4895f771f7299a4354ac54eb3defb43f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadc6c5fa6749a4600d26c94573cfa4895f771f7299a4354ac54eb3defb43f7c->enter($__internal_aadc6c5fa6749a4600d26c94573cfa4895f771f7299a4354ac54eb3defb43f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aadc6c5fa6749a4600d26c94573cfa4895f771f7299a4354ac54eb3defb43f7c->leave($__internal_aadc6c5fa6749a4600d26c94573cfa4895f771f7299a4354ac54eb3defb43f7c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_443e4fd65037a055b825c90dab2869c68c9a18f96c459a4fcf5fd72fa25b6e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443e4fd65037a055b825c90dab2869c68c9a18f96c459a4fcf5fd72fa25b6e08->enter($__internal_443e4fd65037a055b825c90dab2869c68c9a18f96c459a4fcf5fd72fa25b6e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_443e4fd65037a055b825c90dab2869c68c9a18f96c459a4fcf5fd72fa25b6e08->leave($__internal_443e4fd65037a055b825c90dab2869c68c9a18f96c459a4fcf5fd72fa25b6e08_prof);

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
", "SRVDVServerBundle:Resetting:passwordAlreadyRequested.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
