<?php

/* @SRVDVServer/Security/login.html.twig */
class __TwigTemplate_b04995609c1efb0322f152854a472107621d3db76c4f0ff25a91783e5bdf0355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "@SRVDVServer/Security/login.html.twig", 1);
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
        $__internal_27619a40af79b82a5979cecfacb3484b9ee587e0a4ab917417c954804db9b348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27619a40af79b82a5979cecfacb3484b9ee587e0a4ab917417c954804db9b348->enter($__internal_27619a40af79b82a5979cecfacb3484b9ee587e0a4ab917417c954804db9b348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27619a40af79b82a5979cecfacb3484b9ee587e0a4ab917417c954804db9b348->leave($__internal_27619a40af79b82a5979cecfacb3484b9ee587e0a4ab917417c954804db9b348_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad3372179e8c424150acdffe6351f53f1d75f99f94b2cfd820f527b8000acd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3372179e8c424150acdffe6351f53f1d75f99f94b2cfd820f527b8000acd31->enter($__internal_ad3372179e8c424150acdffe6351f53f1d75f99f94b2cfd820f527b8000acd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ad3372179e8c424150acdffe6351f53f1d75f99f94b2cfd820f527b8000acd31->leave($__internal_ad3372179e8c424150acdffe6351f53f1d75f99f94b2cfd820f527b8000acd31_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Security/login.html.twig";
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
{% endblock fos_user_content %}", "@SRVDVServer/Security/login.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
