<?php

/* SRVDVServerBundle:responsable:ReserveResponsable.html.twig */
class __TwigTemplate_cad579ab0732feea27fa1486a21708da5c1ced619c92ca47d12758467c9b39f2 extends Twig_Template
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
        $__internal_9aca05e90ad340363c04d3103daab5dd1d8a42a614d23677e87660c27f88762e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aca05e90ad340363c04d3103daab5dd1d8a42a614d23677e87660c27f88762e->enter($__internal_9aca05e90ad340363c04d3103daab5dd1d8a42a614d23677e87660c27f88762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig", 2)->display($context);
        // line 3
        echo "
<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Responsable</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li   ><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Matiere");
        echo "\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
\t\t\t<li  class=\"active\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_responsable");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
\t\t\t\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t</br>
\t<h2> listes des reservations sur la filière \" ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fil"] ?? $this->getContext($context, "fil")), "niveau", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fil"] ?? $this->getContext($context, "fil")), "nom", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fil"] ?? $this->getContext($context, "fil")), "anneeFiliere", array()), "html", null, true);
        echo "\"</h2>
\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbHeur", array()), 'label', array("label" => "Nombre d'heures  : "));
        echo "
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbHeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Matiere", array()), 'label', array("label" => "Matiere : "));
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Date </th><th>Nombre d\\'heures </th><th>Utilisateur </th><th>Matiere</th><th>Type </th><th>Heures Total</th><th>Mod</th><th>Supp</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 54
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute(($context["fil"] ?? $this->getContext($context, "fil")), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "filiere", array()), "id", array()))) {
                // line 55
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateInscription", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbHeur", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
                echo "</td>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 66
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["u"], "user", array()), "id", array()))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ModInscription_responsable", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 71
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["u"], "user", array()), "id", array()))) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                    echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
        window.location.href =\"SuppInscription/\"+id;
\t}

}
</script>


";
        // line 106
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig", 106)->display($context);
        
        $__internal_9aca05e90ad340363c04d3103daab5dd1d8a42a614d23677e87660c27f88762e->leave($__internal_9aca05e90ad340363c04d3103daab5dd1d8a42a614d23677e87660c27f88762e_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:ReserveResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 106,  194 => 78,  187 => 76,  182 => 74,  176 => 72,  174 => 71,  170 => 69,  164 => 67,  162 => 66,  155 => 62,  151 => 61,  147 => 60,  141 => 59,  137 => 58,  133 => 57,  129 => 56,  126 => 55,  123 => 54,  119 => 53,  104 => 41,  99 => 39,  95 => 38,  85 => 31,  81 => 30,  74 => 26,  70 => 25,  65 => 23,  55 => 20,  42 => 10,  38 => 9,  34 => 8,  27 => 3,  25 => 2,  22 => 1,);
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
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Responsable</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"{{ path('fos_user_profile_edit')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li   ><a href=\"{{ path('list_form_Matiere')}}\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
\t\t\t<li  class=\"active\"><a href=\"{{path('ChoixFiliereEns_responsable')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
\t\t\t\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t</br>
\t<h2> listes des reservations sur la filière \" {{ fil.niveau}} {{ fil.nom}}  {{ fil.anneeFiliere}}\"</h2>
\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.nbHeur,'Nombre d\\'heures  : ')}}
\t\t\t\t\t{{ form_widget(f.nbHeur,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.Matiere,'Matiere : ')}}
\t\t\t\t\t{{ form_widget(f.Matiere,{'attr':{'class':'form-control'}})}}

\t\t\t\t\t</div>
\t\t\t\t\t
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
\t\t\t\t\t<tr><th>#</th><th>Date </th><th>Nombre d\\'heures </th><th>Utilisateur </th><th>Matiere</th><th>Type </th><th>Heures Total</th><th>Mod</th><th>Supp</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in reservations %}
\t\t\t\t\t\t{% if fil.id  == u.Matiere.filiere.id  %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ u.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.dateInscription | date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.nbHeur }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.User.nom }}&nbsp;{{ u.User.prenom }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Matiere.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Matiere.TypeEnseignant.libelle }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Matiere.nbrHeurGroupe * u.Matiere.NombreGroupe }}</td>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if app.user.id  == u.user.id  %}
\t\t\t\t\t\t\t\t\t\t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='{{path('ModInscription_responsable',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if app.user.id  == u.user.id  %}
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser({{ u.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endif %}\t
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
        window.location.href =\"SuppInscription/\"+id;
\t}

}
</script>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/ReserveResponsable.html.twig");
    }
}
