<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_213bd1ea0583a09d5b89fb750d39bd42ea8347fd37228a418546693fb74a7e60 extends Twig_Template
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
        $__internal_7a65e928ac64aa3ab56eb250107bfef9e583115bb2215c8dc4541aed037c8710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a65e928ac64aa3ab56eb250107bfef9e583115bb2215c8dc4541aed037c8710->enter($__internal_7a65e928ac64aa3ab56eb250107bfef9e583115bb2215c8dc4541aed037c8710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a65e928ac64aa3ab56eb250107bfef9e583115bb2215c8dc4541aed037c8710->leave($__internal_7a65e928ac64aa3ab56eb250107bfef9e583115bb2215c8dc4541aed037c8710_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d8773f8c76298ecdad1945227fd20deae5c7e8077395beec0da6086d49c3155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8773f8c76298ecdad1945227fd20deae5c7e8077395beec0da6086d49c3155->enter($__internal_9d8773f8c76298ecdad1945227fd20deae5c7e8077395beec0da6086d49c3155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9d8773f8c76298ecdad1945227fd20deae5c7e8077395beec0da6086d49c3155->leave($__internal_9d8773f8c76298ecdad1945227fd20deae5c7e8077395beec0da6086d49c3155_prof);

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
{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Security/login.html.twig");
    }
}
