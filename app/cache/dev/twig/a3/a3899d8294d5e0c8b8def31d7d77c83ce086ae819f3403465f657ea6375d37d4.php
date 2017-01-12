<?php

/* @SRVDVServer/admin/ProfileAdmin.html.twig */
class __TwigTemplate_6e833b87a985b67a4bd389d1e1ebc3d61c8d2b673e2de40fc4ba10eeec721f49 extends Twig_Template
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
        $__internal_23edfe036851d8a37903dc3fa49d715d1f6da62248c8b3456163f925c45b5761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23edfe036851d8a37903dc3fa49d715d1f6da62248c8b3456163f925c45b5761->enter($__internal_23edfe036851d8a37903dc3fa49d715d1f6da62248c8b3456163f925c45b5761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/ProfileAdmin.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "@SRVDVServer/admin/ProfileAdmin.html.twig", 2)->display($context);
        // line 3
        echo "
<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Administrateur</h3>
        <ul>
            <li class=\"active\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li ><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>  &nbsp; Mot de pass</a></li></br>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Annee");
        echo "\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer Année</a></li></br>
           <li ><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Type");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li ><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_utilisateur");
        echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>    </br>       
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_filiere");
        echo "\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_typeens");
        echo "\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annee_suivante");
        echo "\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br> 
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-4 col-md- col-lg-4\">
     
        
    </div>
          <div class=\"col-xs-3 col-md-3 col-lg-3\">

            ";
        // line 29
        if (array_key_exists("profile", $context)) {
            // line 30
            echo "             <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
            ";
        } else {
            // line 32
            echo "            
            ";
            // line 33
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 36
            echo "
            ";
        }
        // line 38
        echo "    </div>
    
</div>


";
        // line 43
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/admin/ProfileAdmin.html.twig", 43)->display($context);
        
        $__internal_23edfe036851d8a37903dc3fa49d715d1f6da62248c8b3456163f925c45b5761->leave($__internal_23edfe036851d8a37903dc3fa49d715d1f6da62248c8b3456163f925c45b5761_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99d54ff27075243996d004a18d36c79404b2e8d76eb7ec39f2b70b60abefb137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d54ff27075243996d004a18d36c79404b2e8d76eb7ec39f2b70b60abefb137->enter($__internal_99d54ff27075243996d004a18d36c79404b2e8d76eb7ec39f2b70b60abefb137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "            ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@SRVDVServer/admin/ProfileAdmin.html.twig", 34)->display($context);
        // line 35
        echo "            ";
        
        $__internal_99d54ff27075243996d004a18d36c79404b2e8d76eb7ec39f2b70b60abefb137->leave($__internal_99d54ff27075243996d004a18d36c79404b2e8d76eb7ec39f2b70b60abefb137_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/ProfileAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  115 => 34,  109 => 33,  102 => 43,  95 => 38,  91 => 36,  89 => 33,  86 => 32,  82 => 30,  80 => 29,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  28 => 3,  26 => 2,  23 => 1,);
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
        <h3>Administrateur</h3>
        <ul>
            <li class=\"active\"><a href=\"{{path('fos_user_profile_edit')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li ><a href=\"{{path('fos_user_change_password')}}\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>  &nbsp; Mot de pass</a></li></br>
            <li><a href=\"{{path('list_form_Annee')}}\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer Année</a></li></br>
           <li ><a href=\"{{path('list_form_Type')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li ><a href=\"{{path('list_form_utilisateur')}}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>    </br>       
            <li><a href=\"{{path('list_form_filiere')}}\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"{{path('list_form_typeens')}}\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
            <li><a href=\"{{path('annee_suivante')}}\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br> 
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


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/admin/ProfileAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\ProfileAdmin.html.twig");
    }
}
