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
        $__internal_4562ac43ba1efac90be2c38849d41a312db3ba1ee1675f10af57d4b91bbea9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4562ac43ba1efac90be2c38849d41a312db3ba1ee1675f10af57d4b91bbea9e5->enter($__internal_4562ac43ba1efac90be2c38849d41a312db3ba1ee1675f10af57d4b91bbea9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4562ac43ba1efac90be2c38849d41a312db3ba1ee1675f10af57d4b91bbea9e5->leave($__internal_4562ac43ba1efac90be2c38849d41a312db3ba1ee1675f10af57d4b91bbea9e5_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48ae319914d9ff39cc0a525015a5e64162f108e282ec82d4a8cbc58c412205f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ae319914d9ff39cc0a525015a5e64162f108e282ec82d4a8cbc58c412205f0->enter($__internal_48ae319914d9ff39cc0a525015a5e64162f108e282ec82d4a8cbc58c412205f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    <h4>Connectez-vous :</h4> 
    ";
        // line 4
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
        <p ><a  href=";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo ">Mot de passe oubli&eacute; ?</a></p>
";
        
        $__internal_48ae319914d9ff39cc0a525015a5e64162f108e282ec82d4a8cbc58c412205f0->leave($__internal_48ae319914d9ff39cc0a525015a5e64162f108e282ec82d4a8cbc58c412205f0_prof);

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
        return array (  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
        <p ><a  href={{path ('fos_user_resetting_request')}}>Mot de passe oubli&eacute; ?</a></p>
{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Security/login.html.twig");
    }
}
