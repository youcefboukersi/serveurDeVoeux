<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b7b56239a91c776a7e17d56722a92aaf9448861a1bd54ac4d0765525360fccce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_61681df5ba73772f9079b0b948fc9cadd8a16b656bb8d60a4d5feb17db7603ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61681df5ba73772f9079b0b948fc9cadd8a16b656bb8d60a4d5feb17db7603ef->enter($__internal_61681df5ba73772f9079b0b948fc9cadd8a16b656bb8d60a4d5feb17db7603ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61681df5ba73772f9079b0b948fc9cadd8a16b656bb8d60a4d5feb17db7603ef->leave($__internal_61681df5ba73772f9079b0b948fc9cadd8a16b656bb8d60a4d5feb17db7603ef_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68e82472abcee56f44bb6f8569a5fb8144da76a1ee76e1ce098103b1e5af1fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e82472abcee56f44bb6f8569a5fb8144da76a1ee76e1ce098103b1e5af1fdb->enter($__internal_68e82472abcee56f44bb6f8569a5fb8144da76a1ee76e1ce098103b1e5af1fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    <h4>Connectez-vous :</h4> 
    ";
        // line 4
        echo twig_include($this->env, $context, "SRVDVServerBundle:Security:login_content.html.twig");
        echo "

    </br>
    <p ><a  href=";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo ">Mot de passe oubli&eacute; ?</a></p>
";
        
        $__internal_68e82472abcee56f44bb6f8569a5fb8144da76a1ee76e1ce098103b1e5af1fdb->leave($__internal_68e82472abcee56f44bb6f8569a5fb8144da76a1ee76e1ce098103b1e5af1fdb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
{% block fos_user_content %}
    <h4>Connectez-vous :</h4> 
    {{ include('SRVDVServerBundle:Security:login_content.html.twig') }}

    </br>
    <p ><a  href={{path ('fos_user_resetting_request')}}>Mot de passe oubli&eacute; ?</a></p>
{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/Security/login.html.twig");
    }
}
