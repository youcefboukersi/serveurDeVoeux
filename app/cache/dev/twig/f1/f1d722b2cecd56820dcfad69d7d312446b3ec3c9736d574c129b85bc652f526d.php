<?php

/* SRVDVServerBundle:responsable:ProfileResponsable.html.twig */
class __TwigTemplate_aeb817a5c7a4fc6398aaf9fb029947fb5aa79bd78b5fc8c55287a7bb684e2ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a11307d76e77c449e1a1d70a48eb50d2e8f183e6f0252bbfffdc380ace150091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11307d76e77c449e1a1d70a48eb50d2e8f183e6f0252bbfffdc380ace150091->enter($__internal_a11307d76e77c449e1a1d70a48eb50d2e8f183e6f0252bbfffdc380ace150091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:ProfileResponsable.html.twig"));

        // line 1
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:responsable:ProfileResponsable.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Administrateur</h3>
        <ul>
          <li  class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_profile_user_resp");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li   ><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Matiere");
        echo "\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
            <li  ><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br> 
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-5 col-md-5 col-lg-5\">
        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Profile:edit"));
        echo "
    </div>
        
    
</div>

";
        // line 24
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:ProfileResponsable.html.twig", 24)->display($context);
        
        $__internal_a11307d76e77c449e1a1d70a48eb50d2e8f183e6f0252bbfffdc380ace150091->leave($__internal_a11307d76e77c449e1a1d70a48eb50d2e8f183e6f0252bbfffdc380ace150091_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:ProfileResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 24,  51 => 18,  39 => 9,  35 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}

<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Administrateur</h3>
        <ul>
          <li  class=\"active\"><a href=\"{{ path('form_profile_user_resp')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li   ><a href=\"{{ path('list_form_Matiere')}}\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
            <li  ><a href=\"{{path('list_form_inscription')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br> 
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-5 col-md-5 col-lg-5\">
        {{ render (controller(\"FOSUserBundle:Profile:edit\")) }}
    </div>
        
    
</div>

{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:responsable:ProfileResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/ProfileResponsable.html.twig");
    }
}
