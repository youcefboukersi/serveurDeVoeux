<?php

/* @SRVDVServer/responsable/ProfileResponsable.html.twig */
class __TwigTemplate_77e6792fded2aeada58f5b9a805941761a9f12924bcf6730c7ad0425723d8664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49c281fbe66221356afd7649a006d9e5b2beb9a3caad4cb2943f5eb8037cf7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c281fbe66221356afd7649a006d9e5b2beb9a3caad4cb2943f5eb8037cf7d7->enter($__internal_49c281fbe66221356afd7649a006d9e5b2beb9a3caad4cb2943f5eb8037cf7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/responsable/ProfileResponsable.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "@SRVDVServer/responsable/ProfileResponsable.html.twig", 2)->display($context);
        // line 3
        echo "
<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Responsable</h3>
        <ul>
          <li  class=\"active\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_profile_user_resp");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li   ><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Matiere");
        echo "\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
            <li  ><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_responsable");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br> 
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-4 col-md- col-lg-4\">
     
        
    </div>
          <div class=\"col-xs-3 col-md-3 col-lg-3\">

            ";
        // line 24
        if (array_key_exists("profile", $context)) {
            // line 25
            echo "             <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
            ";
        } else {
            // line 27
            echo "            
            ";
            // line 28
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 31
            echo "
            ";
        }
        // line 33
        echo "    </div>
    
</div>
    
</div>

";
        // line 39
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/responsable/ProfileResponsable.html.twig", 39)->display($context);
        
        $__internal_49c281fbe66221356afd7649a006d9e5b2beb9a3caad4cb2943f5eb8037cf7d7->leave($__internal_49c281fbe66221356afd7649a006d9e5b2beb9a3caad4cb2943f5eb8037cf7d7_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f8e38ba71972d56ac528778c6021a7a29c1c51f2ac23688e7343dad9ad23ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8e38ba71972d56ac528778c6021a7a29c1c51f2ac23688e7343dad9ad23ef5->enter($__internal_6f8e38ba71972d56ac528778c6021a7a29c1c51f2ac23688e7343dad9ad23ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 29
        echo "            ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@SRVDVServer/responsable/ProfileResponsable.html.twig", 29)->display($context);
        // line 30
        echo "            ";
        
        $__internal_6f8e38ba71972d56ac528778c6021a7a29c1c51f2ac23688e7343dad9ad23ef5->leave($__internal_6f8e38ba71972d56ac528778c6021a7a29c1c51f2ac23688e7343dad9ad23ef5_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/responsable/ProfileResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  96 => 29,  90 => 28,  83 => 39,  75 => 33,  71 => 31,  69 => 28,  66 => 27,  62 => 25,  60 => 24,  43 => 10,  39 => 9,  35 => 8,  28 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
{% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}

<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Responsable</h3>
        <ul>
          <li  class=\"active\"><a href=\"{{ path('form_profile_user_resp')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li   ><a href=\"{{ path('list_form_Matiere')}}\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
            <li  ><a href=\"{{path('ChoixFiliereEns_responsable')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br> 
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-4 col-md- col-lg-4\">
     
        
    </div>
          <div class=\"col-xs-3 col-md-3 col-lg-3\">

            {% if profile is defined %}
             <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
            {% else %}
            
            {% block fos_user_content %}
            {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
            {% endblock fos_user_content %}

            {% endif %}
    </div>
    
</div>
    
</div>

{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/responsable/ProfileResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\responsable\\ProfileResponsable.html.twig");
    }
}
