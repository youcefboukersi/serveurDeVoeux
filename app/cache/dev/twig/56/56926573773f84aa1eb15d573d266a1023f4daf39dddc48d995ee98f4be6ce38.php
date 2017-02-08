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
        $__internal_c7bc885a58b0c82c05a167dc316cad79ae5104a4ddce8df46d302779f2e034aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bc885a58b0c82c05a167dc316cad79ae5104a4ddce8df46d302779f2e034aa->enter($__internal_c7bc885a58b0c82c05a167dc316cad79ae5104a4ddce8df46d302779f2e034aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7bc885a58b0c82c05a167dc316cad79ae5104a4ddce8df46d302779f2e034aa->leave($__internal_c7bc885a58b0c82c05a167dc316cad79ae5104a4ddce8df46d302779f2e034aa_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08e8e675704c2778f361fa6512e42a84af5e8cdb1073d59ec48b500f6b592b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e8e675704c2778f361fa6512e42a84af5e8cdb1073d59ec48b500f6b592b4c->enter($__internal_08e8e675704c2778f361fa6512e42a84af5e8cdb1073d59ec48b500f6b592b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_08e8e675704c2778f361fa6512e42a84af5e8cdb1073d59ec48b500f6b592b4c->leave($__internal_08e8e675704c2778f361fa6512e42a84af5e8cdb1073d59ec48b500f6b592b4c_prof);

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
