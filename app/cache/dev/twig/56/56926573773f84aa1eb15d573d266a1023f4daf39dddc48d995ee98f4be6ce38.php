<?php

/* SRVDVServerBundle:Security:login.html.twig */
class __TwigTemplate_8dfd1579970df899adf7402fd7b9442a427a686fd312f95bfca727fc44fd4998 extends Twig_Template
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
        $__internal_22a37f94f864939f96a2723d5ffdacdedfedbd27ba209743b73fc226a5f00f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a37f94f864939f96a2723d5ffdacdedfedbd27ba209743b73fc226a5f00f4e->enter($__internal_22a37f94f864939f96a2723d5ffdacdedfedbd27ba209743b73fc226a5f00f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a37f94f864939f96a2723d5ffdacdedfedbd27ba209743b73fc226a5f00f4e->leave($__internal_22a37f94f864939f96a2723d5ffdacdedfedbd27ba209743b73fc226a5f00f4e_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc3e31640164857e5acff09638b61391e442acb16db5ce962a2100a5b88afee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3e31640164857e5acff09638b61391e442acb16db5ce962a2100a5b88afee6->enter($__internal_cc3e31640164857e5acff09638b61391e442acb16db5ce962a2100a5b88afee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_cc3e31640164857e5acff09638b61391e442acb16db5ce962a2100a5b88afee6->leave($__internal_cc3e31640164857e5acff09638b61391e442acb16db5ce962a2100a5b88afee6_prof);

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
{% endblock fos_user_content %}", "SRVDVServerBundle:Security:login.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Security/login.html.twig");
    }
}
