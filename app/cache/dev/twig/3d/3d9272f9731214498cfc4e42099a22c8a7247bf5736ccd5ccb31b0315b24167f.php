<?php

/* SRVDVServerBundle:home:ListeFilieres.html.twig */
class __TwigTemplate_589608d00f2c3b3937059c235b344c865046f16859bd08bf591d6844c985fc84 extends Twig_Template
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
        $__internal_d34a34a582edbf2956501224f4bd48e23b91e73a796af86fd4ac8539f5d8681d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34a34a582edbf2956501224f4bd48e23b91e73a796af86fd4ac8539f5d8681d->enter($__internal_d34a34a582edbf2956501224f4bd48e23b91e73a796af86fd4ac8539f5d8681d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:ListeFilieres.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "  
                   ";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => "Filieres")));
            echo "
                      ";
        } else {
            // line 5
            echo "                      
                     ";
            // line 6
            $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:home:ListeFilieres.html.twig", 6)->display($context);
            // line 7
            echo "                     ";
        }
        // line 8
        echo "

<div>

\t\t\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#Filiere</th><th>Matiere</th><th>Nombre de groupe</th><th>heures/groupe</th><th>Type Enseignant (Coef)</th><th>Semestre</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Matieres"] ?? $this->getContext($context, "Matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t

\t\t\t\t\t\t\t";
            // line 20
            if ((($context["idAnnee"] ?? $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 21
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t<td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "niveau", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "html", null, true);
                echo "&nbsp;&nbsp;(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "User", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "User", array()), "prenom", array()), "html", null, true);
                echo ")
\t\t\t\t\t \t\t\t\t\t ";
                // line 24
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESP")) {
                    echo "  
\t\t\t\t\t                       &nbsp;<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription", array("id" => $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    ";
                }
                // line 28
                echo "
\t\t\t\t\t                    ";
                // line 29
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIG")) {
                    echo "  
\t\t\t\t\t                     &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription_enseignant", array("id" => $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    ";
                }
                // line 33
                echo "                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " &nbsp;(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                   </tbody>
\t\t\t\t</table> 
            
\t\t</div>
\t
</div>

<script type=\"text/javascript\" charset=\"utf-8\" >

\$(document).ready(function() {
    var table = \$('#example').DataTable({
        \"columnDefs\": [
            { \"visible\": false, \"targets\": 0 }
        ],
        \"order\": [[ 0, 'asc' ]],
        \"displayLength\": 25,
        \"drawCallback\": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(0, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    \$(rows).eq( i ).before(
                        '<tr class=\"group\"><td colspan=\"6\" align=\"center\" style=\"background-color:#81F7BE\">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    \$('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 0, 'desc' ] ).draw();
        }
        else {
            table.order( [ 0, 'asc' ] ).draw();
        }
    } );
} );

</script>

";
        // line 92
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:home:ListeFilieres.html.twig", 92)->display($context);
        // line 93
        echo "


";
        
        $__internal_d34a34a582edbf2956501224f4bd48e23b91e73a796af86fd4ac8539f5d8681d->leave($__internal_d34a34a582edbf2956501224f4bd48e23b91e73a796af86fd4ac8539f5d8681d_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:home:ListeFilieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 93,  188 => 92,  139 => 45,  132 => 43,  124 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 33,  96 => 30,  92 => 29,  89 => 28,  83 => 25,  79 => 24,  67 => 23,  63 => 21,  61 => 20,  54 => 18,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
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
{% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}  
                   {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\" , { 'id': 'Filieres' })) }}
                      {% else %}
                      
                     {% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}
                     {% endif %}


<div>

\t\t\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#Filiere</th><th>Matiere</th><th>Nombre de groupe</th><th>heures/groupe</th><th>Type Enseignant (Coef)</th><th>Semestre</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for r in Matieres %}\t\t\t\t

\t\t\t\t\t\t\t{% if idAnnee  == r.filiere.anneeFiliere.id  %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t<td>{{ r.filiere.niveau }}&nbsp;{{ r.filiere.nom }}&nbsp;{{ r.filiere.anneeFiliere}}&nbsp;&nbsp;({{ r.filiere.User.nom}}&nbsp;{{ r.filiere.User.prenom}})
\t\t\t\t\t \t\t\t\t\t {% if is_granted(\"ROLE_RESP\") %}  
\t\t\t\t\t                       &nbsp;<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription',{'id':r.filiere.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    {% endif %}

\t\t\t\t\t                    {% if is_granted(\"ROLE_ENSEIG\") %}  
\t\t\t\t\t                     &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription_enseignant',{'id':r.filiere.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    {% endif %}
                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>{{ r. nom}}</td>
\t\t\t\t\t\t\t\t\t<td>{{ r.NombreGroupe}}</td>
\t\t\t\t\t\t\t\t\t<td>{{ r.nbrHeurGroupe}}</td>
\t\t\t\t\t\t\t\t\t<td>{{ r.TypeEnseignant.libelle}} &nbsp;({{ r.TypeEnseignant.coef}})</td>
\t\t\t\t\t\t\t\t\t<td>{{ r.semestre}}</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endif %}\t
\t\t\t\t\t\t{% endfor %}
                   </tbody>
\t\t\t\t</table> 
            
\t\t</div>
\t
</div>

<script type=\"text/javascript\" charset=\"utf-8\" >

\$(document).ready(function() {
    var table = \$('#example').DataTable({
        \"columnDefs\": [
            { \"visible\": false, \"targets\": 0 }
        ],
        \"order\": [[ 0, 'asc' ]],
        \"displayLength\": 25,
        \"drawCallback\": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(0, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    \$(rows).eq( i ).before(
                        '<tr class=\"group\"><td colspan=\"6\" align=\"center\" style=\"background-color:#81F7BE\">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    \$('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 0, 'desc' ] ).draw();
        }
        else {
            table.order( [ 0, 'asc' ] ).draw();
        }
    } );
} );

</script>

{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}



", "SRVDVServerBundle:home:ListeFilieres.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/home/ListeFilieres.html.twig");
    }
}
