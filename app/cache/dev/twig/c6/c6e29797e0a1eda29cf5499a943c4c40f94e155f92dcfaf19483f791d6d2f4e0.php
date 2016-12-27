<?php

/* SRVDVServerBundle:admin:TypeAdmin.html.twig */
class __TwigTemplate_8cabbf1206337c09348ca7fec1f5ab1a8ceae4d7ba1b931c13d240f7b0de6c85 extends Twig_Template
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
        $__internal_0ac0cedebf29ce0efa8d37c83b5174ddf4f3d667fb2e1b38680bdfd91d797feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac0cedebf29ce0efa8d37c83b5174ddf4f3d667fb2e1b38680bdfd91d797feb->enter($__internal_0ac0cedebf29ce0efa8d37c83b5174ddf4f3d667fb2e1b38680bdfd91d797feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:TypeAdmin.html.twig"));

        // line 1
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:admin:TypeAdmin.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Administrateur</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li  ><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addrole\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer role</a></li></br>
\t\t\t<li  class=\"active\"><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addtype\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "code", array()), 'label', array("label" => "Code : "));
        echo "
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'label', array("label" => "Libelle : "));
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbrHeures", array()), 'label', array("label" => "Nombre heures : "));
        echo "
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbrHeures", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Code</th><th>Libelle</th><th>Nombre heures</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Types"]) ? $context["Types"] : $this->getContext($context, "Types")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 55
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "code", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nbrHeures", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='ModType/";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerType(";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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

function SupprimerType(id){

\tvar rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;

\tif(rep){
        window.location.href ='suppType/'+id;
\t}

}
</script>
";
        // line 90
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:TypeAdmin.html.twig", 90)->display($context);
        
        $__internal_0ac0cedebf29ce0efa8d37c83b5174ddf4f3d667fb2e1b38680bdfd91d797feb->leave($__internal_0ac0cedebf29ce0efa8d37c83b5174ddf4f3d667fb2e1b38680bdfd91d797feb_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:TypeAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 90,  142 => 65,  133 => 62,  129 => 61,  124 => 59,  120 => 58,  116 => 57,  112 => 56,  109 => 55,  105 => 54,  91 => 43,  85 => 40,  77 => 35,  73 => 34,  67 => 31,  63 => 30,  57 => 27,  53 => 26,  48 => 24,  24 => 2,  22 => 1,);
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
\t\t\t<li  class=\"active\"><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addtype\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
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
\t\t\t\t\t{{ form_label(f.code,'Code : ')}}
\t\t\t\t\t{{ form_widget(f.code,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.libelle,'Libelle : ')}}
\t\t\t\t\t{{ form_widget(f.libelle,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.nbrHeures,'Nombre heures : ')}}
\t\t\t\t\t{{ form_widget(f.nbrHeures,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t{{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t{{ form_end(f)}}\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Code</th><th>Libelle</th><th>Nombre heures</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for t in Types %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ t.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ t.code }}</td>
\t\t\t\t\t\t\t\t<td>{{ t.libelle }}</td>
\t\t\t\t\t\t\t\t<td>{{ t.nbrHeures }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='ModType/{{ t.id }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerType({{ t.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
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

function SupprimerType(id){

\tvar rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;

\tif(rep){
        window.location.href ='suppType/'+id;
\t}

}
</script>
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:TypeAdmin.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/TypeAdmin.html.twig");
    }
}
