<?php

/* SRVDVServerBundle:home:index.html.twig */
class __TwigTemplate_068a3b08779e9efc38ae3e0d148078f8414afaec3e5340d3f82a265ff3179690 extends Twig_Template
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
        $__internal_3fefd3c8f7c24f6fb3c247c5b95ba30a5f666be1e4d21c8d8cc7c5fdc4571896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fefd3c8f7c24f6fb3c247c5b95ba30a5f666be1e4d21c8d8cc7c5fdc4571896->enter($__internal_3fefd3c8f7c24f6fb3c247c5b95ba30a5f666be1e4d21c8d8cc7c5fdc4571896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:index.html.twig"));

        // line 1
        echo "<html>

";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "  
                   ";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => "Accueil")));
            echo "
                      ";
        } else {
            // line 6
            echo "                      
                     ";
            // line 7
            $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:home:index.html.twig", 7)->display($context);
            // line 8
            echo "                     ";
        }
        // line 9
        echo "

";
        // line 12
        echo "
";
        // line 13
        $context["tempArray"] = array();
        // line 14
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Reserves"] ?? $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "
\t\t";
            // line 16
            if ($this->getAttribute(($context["tempArray"] ?? null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 17
                echo "\t\t\t";
                $context["tempArray"] = twig_array_merge(($context["tempArray"] ?? $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 18
                echo "\t\t";
            } else {
                // line 19
                echo "\t\t\t";
                $context["tempArray"] = twig_array_merge(($context["tempArray"] ?? $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                // line 20
                echo "\t\t";
            }
            // line 21
            echo "
\t        
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "

\t\t   \t
\t\t   \t\t   <div align=\"center\" class=\"form-group row\">
\t\t   \t\t   \t<div class=\"col-xs-4 col-md-4 col-lg-4\">
\t\t   \t\t   \t</div>
\t\t   \t\t   \t<div class=\"col-xs-2 col-md-2 col-lg-2\">
\t\t\t\t\t <select type=\"text\" id=\"min\" name=\"min\" class=\"form-control\">
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Annees"] ?? $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["an"]) {
            // line 33
            echo "\t\t            \t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["an"], "annee", array()), "html", null, true);
            echo "</option>
\t\t            \t 

\t\t            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['an'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "           \t\t\t </select>
           \t\t  </div>
           \t\t   </div>\t 
\t\t\t\t\t
\t\t\t\t\t
           
            \t
        </div>
\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>filiere</th><th>Total</th><th>Date </th><th>heures </th><th>Enseignant</th><th>Cat Ens</th><th>Semestre</th><th>Matiere</th><th>Type </th><th>Somme</th><th>Total</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t
\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Reserves"] ?? $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t

 \t\t\t\t\t\t

\t\t\t\t\t\t\t\t";
            // line 56
            if (($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") > ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 57
                echo "\t\t\t\t\t\t\t\t\t";
                $context["color21"] = "#FE2E2E";
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") == ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t";
                $context["color21"] = "#58FA58";
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "
\t\t\t\t\t\t\t\t";
            // line 63
            if (($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") < ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t";
                $context["color21"] = "#F3F781";
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            // line 66
            echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<tr style=\"background-color:";
            // line 69
            echo twig_escape_filter($this->env, ($context["color21"] ?? $this->getContext($context, "color21")), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "niveau", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "html", null, true);
            echo "&nbsp;&nbsp;(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "User", array()), "prenom", array()), "html", null, true);
            echo ")

\t\t\t\t\t\t\t\t\t\t\t";
            // line 73
            if ((($context["idAnnee"] ?? $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 74
                echo "\t\t\t\t\t\t\t\t \t\t\t\t\t ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESP")) {
                    echo "  
\t\t\t\t\t\t\t\t                       &nbsp;<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t\t\t\t                          
\t\t\t\t\t\t\t\t                    ";
                }
                // line 78
                echo "
\t\t\t\t\t\t\t\t                    ";
                // line 79
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIG")) {
                    echo "  
\t\t\t\t\t\t\t\t                     &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription_enseignant", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t\t\t\t                          
\t\t\t\t\t\t\t\t                    ";
                }
                // line 83
                echo "\t\t\t\t\t                    \t";
            }
            echo "\t
                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateInscription", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbHeur", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "User", array()), "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "semestre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
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
                        '<tr class=\"group\"><td colspan=\"16\" align=\"center\" >'+group+'</td></tr>'
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

      \$('#min').on( 'click', function() {
        
        table.draw();
    } );
} );

\$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( \$('#min').val(), 10 );
        \t
        var age = parseFloat( data[1] ) || 0; // use data for the age column
 
        if ( ( age == min  || isNaN( min ) )  )
        {
            return true;
        }
        return false;
        
    }
);

</script>


";
        // line 169
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:home:index.html.twig", 169)->display($context);
        
        $__internal_3fefd3c8f7c24f6fb3c247c5b95ba30a5f666be1e4d21c8d8cc7c5fdc4571896->leave($__internal_3fefd3c8f7c24f6fb3c247c5b95ba30a5f666be1e4d21c8d8cc7c5fdc4571896_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 169,  266 => 100,  255 => 95,  251 => 94,  247 => 93,  243 => 92,  239 => 91,  235 => 90,  229 => 89,  225 => 88,  221 => 87,  217 => 86,  210 => 83,  204 => 80,  200 => 79,  197 => 78,  191 => 75,  186 => 74,  184 => 73,  171 => 71,  166 => 69,  161 => 66,  155 => 64,  153 => 63,  150 => 62,  144 => 60,  141 => 59,  135 => 57,  133 => 56,  124 => 52,  107 => 37,  96 => 33,  92 => 32,  82 => 24,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  60 => 16,  57 => 15,  52 => 14,  50 => 13,  47 => 12,  43 => 9,  40 => 8,  38 => 7,  35 => 6,  30 => 4,  26 => 3,  22 => 1,);
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
                   {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 'Accueil' })) }}
                      {% else %}
                      
                     {% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}
                     {% endif %}


{# nous ajoutond un underscore dans la clé #}

{% set tempArray = {} %}
\t{% for item in Reserves %}

\t\t{% if tempArray['_'~item.Matiere.id] is defined %}
\t\t\t{% set tempArray = tempArray|merge({('_'~item.Matiere.id):(tempArray['_'~item.Matiere.id]+item.nbHeur)}) %}
\t\t{% else %}
\t\t\t{% set tempArray = tempArray|merge({('_'~item.Matiere.id):(item.nbHeur)}) %}
\t\t{% endif %}

\t        
\t{% endfor %}


\t\t   \t
\t\t   \t\t   <div align=\"center\" class=\"form-group row\">
\t\t   \t\t   \t<div class=\"col-xs-4 col-md-4 col-lg-4\">
\t\t   \t\t   \t</div>
\t\t   \t\t   \t<div class=\"col-xs-2 col-md-2 col-lg-2\">
\t\t\t\t\t <select type=\"text\" id=\"min\" name=\"min\" class=\"form-control\">
                        {% for an in Annees %}
\t\t            \t<option>{{ an.annee}}</option>
\t\t            \t 

\t\t            \t{% endfor %}
           \t\t\t </select>
           \t\t  </div>
           \t\t   </div>\t 
\t\t\t\t\t
\t\t\t\t\t
           
            \t
        </div>
\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>filiere</th><th>Total</th><th>Date </th><th>heures </th><th>Enseignant</th><th>Cat Ens</th><th>Semestre</th><th>Matiere</th><th>Type </th><th>Somme</th><th>Total</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t
\t\t\t\t\t\t{% for r in Reserves %}\t\t\t\t

 \t\t\t\t\t\t

\t\t\t\t\t\t\t\t{% if tempArray['_'~r.Matiere.id] >  (r.Matiere.nbrHeurGroupe * r.Matiere.NombreGroupe )%}
\t\t\t\t\t\t\t\t\t{% set color21='#FE2E2E' %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if tempArray['_'~r.Matiere.id] ==  (r.Matiere.nbrHeurGroupe * r.Matiere.NombreGroupe ) %}
\t\t\t\t\t\t\t\t\t{% set color21='#58FA58' %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if tempArray['_'~r.Matiere.id] <  (r.Matiere.nbrHeurGroupe * r.Matiere.NombreGroupe ) %}
\t\t\t\t\t\t\t\t\t{% set color21='#F3F781' %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<tr style=\"background-color:{{color21}}\">

\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.filiere.niveau }}&nbsp;{{ r.Matiere.filiere.nom }}&nbsp;{{ r.Matiere.filiere.anneeFiliere}}&nbsp;&nbsp;({{ r.Matiere.filiere.User.nom}}&nbsp;{{ r.Matiere.filiere.User.prenom}})

\t\t\t\t\t\t\t\t\t\t\t{% if idAnnee  == r.Matiere.filiere.anneeFiliere.id  %}
\t\t\t\t\t\t\t\t \t\t\t\t\t {% if is_granted(\"ROLE_RESP\") %}  
\t\t\t\t\t\t\t\t                       &nbsp;<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription',{'id':r.Matiere.filiere.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t\t\t\t                          
\t\t\t\t\t\t\t\t                    {% endif %}

\t\t\t\t\t\t\t\t                    {% if is_granted(\"ROLE_ENSEIG\") %}  
\t\t\t\t\t\t\t\t                     &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription_enseignant',{'id':r.Matiere.filiere.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t\t\t\t                          
\t\t\t\t\t\t\t\t                    {% endif %}
\t\t\t\t\t                    \t{% endif %}\t
                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.filiere.anneeFiliere}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.dateInscription | date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.nbHeur }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.User.nom }}&nbsp;{{ r.User.prenom }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.User.type.libelle}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.semestre }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.nom}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.TypeEnseignant.libelle }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ tempArray['_'~r.Matiere.id]  }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.nbrHeurGroupe * r.Matiere.NombreGroupe  }}</td>

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>\t
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
                        '<tr class=\"group\"><td colspan=\"16\" align=\"center\" >'+group+'</td></tr>'
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

      \$('#min').on( 'click', function() {
        
        table.draw();
    } );
} );

\$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( \$('#min').val(), 10 );
        \t
        var age = parseFloat( data[1] ) || 0; // use data for the age column
 
        if ( ( age == min  || isNaN( min ) )  )
        {
            return true;
        }
        return false;
        
    }
);

</script>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:home:index.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/home/index.html.twig");
    }
}
