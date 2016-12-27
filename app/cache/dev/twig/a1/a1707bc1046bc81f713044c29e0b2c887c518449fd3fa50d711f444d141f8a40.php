<?php

/* SRVDVServerBundle:admin:RoleAdmin.html.twig */
class __TwigTemplate_b521fab878abe2a5fc9a9c164459a4a82f1538399b45b26458bceb16a69b0fbc extends Twig_Template
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
        $__internal_5332d7e721f071d83becd997ac16b205bd3ac10e5f5aa6328e8dc57ef152e1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5332d7e721f071d83becd997ac16b205bd3ac10e5f5aa6328e8dc57ef152e1aa->enter($__internal_5332d7e721f071d83becd997ac16b205bd3ac10e5f5aa6328e8dc57ef152e1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:RoleAdmin.html.twig"));

        // line 1
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:admin:RoleAdmin.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Administrateur</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li   class=\"active\"><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addrole\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer role</a></li></br>
\t\t\t<li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addtype\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
\t\t\t<li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
\t\t\t<li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addFiliere\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
\t\t\t\t<li ><a  href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/TypeEns\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
\t\t\t<li><a href=\"\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br>
\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomRole", array()), 'label', array("label" => "Nom : "));
        echo "
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomRole", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>nom</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Roles"]) ? $context["Roles"] : $this->getContext($context, "Roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 47
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nomRole", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='ModRole/";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerRole(";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                   </tbody>
\t\t\t\t</table> 
            </div>
\t\t</div>
\t
</div>




<script>
\$(document).ready(function() {
    \$('#example').DataTable();
} );

function SupprimerRole(id){

\tvar rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;

\tif(rep){
        window.location.href ='suppRole/'+id;
\t}

}
</script>
";
        // line 80
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:RoleAdmin.html.twig", 80)->display($context);
        
        $__internal_5332d7e721f071d83becd997ac16b205bd3ac10e5f5aa6328e8dc57ef152e1aa->leave($__internal_5332d7e721f071d83becd997ac16b205bd3ac10e5f5aa6328e8dc57ef152e1aa_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:RoleAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 80,  117 => 55,  108 => 52,  104 => 51,  99 => 49,  95 => 48,  92 => 47,  88 => 46,  74 => 35,  69 => 33,  65 => 32,  57 => 27,  53 => 26,  48 => 24,  24 => 2,  22 => 1,);
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
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Administrateur</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li   class=\"active\"><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addrole\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer role</a></li></br>
\t\t\t<li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addtype\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
\t\t\t<li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
\t\t\t<li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addFiliere\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
\t\t\t\t<li ><a  href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/TypeEns\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
\t\t\t<li><a href=\"\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br>
\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.nomRole,'Nom : ')}}
\t\t\t\t\t{{ form_widget(f.nomRole,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t{{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
\t\t\t\t\t{{ form_widget(f.reset,{'attr':{'class':'btn btn-info'}})}}
\t\t\t\t\t</div>
\t\t\t{{ form_end(f)}}\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>nom</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for r in Roles %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ r.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.nomRole }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='ModRole/{{ r.id }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerRole({{ r.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}
                   </tbody>
\t\t\t\t</table> 
            </div>
\t\t</div>
\t
</div>




<script>
\$(document).ready(function() {
    \$('#example').DataTable();
} );

function SupprimerRole(id){

\tvar rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;

\tif(rep){
        window.location.href ='suppRole/'+id;
\t}

}
</script>
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:RoleAdmin.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/RoleAdmin.html.twig");
    }
}
