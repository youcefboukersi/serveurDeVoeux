<?php

/* SRVDVServerBundle:admin:TypeEnsAdmin.html.twig */
class __TwigTemplate_718366b0a2f9dec2c90ebabfd0847256f4669cc4ceff59f18dbb9ad5ac6fdc99 extends Twig_Template
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
        $__internal_eeeb43daf52bfa28d32f4cd8ee23503480da53c04268ac13041b9668bcab450c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeeb43daf52bfa28d32f4cd8ee23503480da53c04268ac13041b9668bcab450c->enter($__internal_eeeb43daf52bfa28d32f4cd8ee23503480da53c04268ac13041b9668bcab450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:TypeEnsAdmin.html.twig"));

        // line 1
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:admin:TypeEnsAdmin.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Administrateur</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li  ><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addrole\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer role</a></li></br>
\t\t\t<li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addtype\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
\t\t\t<li ><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
\t\t\t<li ><a  href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addFiliere\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
\t\t\t<li class=\"active\"><a  href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/TypeEns\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'label', array("label" => "Libelle : "));
        echo "
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "coef", array()), 'label', array("label" => "Coefficient: "));
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "coef", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>nom</th><th>Coefficient</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Typesens"]) ? $context["Typesens"] : $this->getContext($context, "Typesens")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 51
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "coef", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/ModTypeEns/";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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

function SupprimerUser(id){

\tvar rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;

\tif(rep){
        window.location.href ='http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/suppTypeEns/'+id;
\t}

}
</script>
";
        // line 86
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:TypeEnsAdmin.html.twig", 86)->display($context);
        
        $__internal_eeeb43daf52bfa28d32f4cd8ee23503480da53c04268ac13041b9668bcab450c->leave($__internal_eeeb43daf52bfa28d32f4cd8ee23503480da53c04268ac13041b9668bcab450c_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:TypeEnsAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 86,  132 => 61,  123 => 58,  119 => 57,  113 => 54,  109 => 53,  105 => 52,  102 => 51,  98 => 50,  84 => 39,  79 => 37,  75 => 36,  67 => 31,  63 => 30,  57 => 27,  53 => 26,  48 => 24,  24 => 2,  22 => 1,);
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
\t\t\t<li  ><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addrole\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer role</a></li></br>
\t\t\t<li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addtype\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
\t\t\t<li ><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
\t\t\t<li ><a  href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addFiliere\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
\t\t\t<li class=\"active\"><a  href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/TypeEns\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
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
\t\t\t\t\t{{ form_label(f.libelle,'Libelle : ')}}
\t\t\t\t\t{{ form_widget(f.libelle,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.coef,'Coefficient: ')}}
\t\t\t\t\t{{ form_widget(f.coef,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
\t\t\t\t\t{{ form_widget(f.reset,{'attr':{'class':'btn btn-info'}})}}
\t\t\t\t\t</div>
\t\t\t{{ form_end(f)}}\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>nom</th><th>Coefficient</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in Typesens %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ u.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.libelle }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.coef }}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/ModTypeEns/{{ u.id }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser({{ u.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
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

function SupprimerUser(id){

\tvar rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;

\tif(rep){
        window.location.href ='http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/suppTypeEns/'+id;
\t}

}
</script>
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:TypeEnsAdmin.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/TypeEnsAdmin.html.twig");
    }
}
