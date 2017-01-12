<?php

/* SRVDVServerBundle:Security:login.html.twig */
class __TwigTemplate_bc9cf27773418b48314d7a9031343ba0a7c8ebacb5ca354f9f4afa59e9d3a82b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "SRVDVServerBundle:Security:login.html.twig", 1);
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
        $__internal_d7d7f45eea1fabca5e130f1b3a2653c57b74815be71d1756ffdd977a23b22c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d7f45eea1fabca5e130f1b3a2653c57b74815be71d1756ffdd977a23b22c2f->enter($__internal_d7d7f45eea1fabca5e130f1b3a2653c57b74815be71d1756ffdd977a23b22c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d7f45eea1fabca5e130f1b3a2653c57b74815be71d1756ffdd977a23b22c2f->leave($__internal_d7d7f45eea1fabca5e130f1b3a2653c57b74815be71d1756ffdd977a23b22c2f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e010d72b50e85ad31e0abaa7ba990168879dc7f45aba6634a6caeaaf1f066f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e010d72b50e85ad31e0abaa7ba990168879dc7f45aba6634a6caeaaf1f066f1e->enter($__internal_e010d72b50e85ad31e0abaa7ba990168879dc7f45aba6634a6caeaaf1f066f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <h3>Connectez-vous :</h3> 
    ";
        // line 7
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
        <p ><a  href=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo ">Mot de passe oubli&eacute; ?</a></p>
";
        
        $__internal_e010d72b50e85ad31e0abaa7ba990168879dc7f45aba6634a6caeaaf1f066f1e->leave($__internal_e010d72b50e85ad31e0abaa7ba990168879dc7f45aba6634a6caeaaf1f066f1e_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
    <h3>Connectez-vous :</h3> 
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
        <p ><a  href={{path ('fos_user_resetting_request')}}>Mot de passe oubli&eacute; ?</a></p>
{% endblock fos_user_content %}", "SRVDVServerBundle:Security:login.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Security/login.html.twig");
    }
}
