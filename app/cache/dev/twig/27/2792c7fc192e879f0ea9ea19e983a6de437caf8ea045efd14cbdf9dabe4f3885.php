<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6d60f4e0c4de2ba2a7e599276636ff0221f0e1fb672098da0c1f4ca2a186814e extends Twig_Template
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
        $__internal_941d68d615e1e56dd27d323fd386fe6d4f2a468bad096213c2f4e9aabeac0f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941d68d615e1e56dd27d323fd386fe6d4f2a468bad096213c2f4e9aabeac0f51->enter($__internal_941d68d615e1e56dd27d323fd386fe6d4f2a468bad096213c2f4e9aabeac0f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_941d68d615e1e56dd27d323fd386fe6d4f2a468bad096213c2f4e9aabeac0f51->leave($__internal_941d68d615e1e56dd27d323fd386fe6d4f2a468bad096213c2f4e9aabeac0f51_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed49b0ece5e8ecb8708fdf972901ee2986dd3bd27a58f239477b939ad682bd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed49b0ece5e8ecb8708fdf972901ee2986dd3bd27a58f239477b939ad682bd8e->enter($__internal_ed49b0ece5e8ecb8708fdf972901ee2986dd3bd27a58f239477b939ad682bd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ed49b0ece5e8ecb8708fdf972901ee2986dd3bd27a58f239477b939ad682bd8e->leave($__internal_ed49b0ece5e8ecb8708fdf972901ee2986dd3bd27a58f239477b939ad682bd8e_prof);

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
{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Security/login.html.twig");
    }
}
