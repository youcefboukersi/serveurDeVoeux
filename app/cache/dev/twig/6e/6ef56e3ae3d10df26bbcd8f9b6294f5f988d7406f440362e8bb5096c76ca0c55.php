<?php

/* @SRVDVServer/home/index.html.twig */
class __TwigTemplate_97409dfccb977f225c305fea701b2a53fed5148bad2379737e7de9b6b49deb2b extends Twig_Template
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
        $__internal_023d312a9f3f7cea5755d391400c9a003924b86059f7b62764f0da857770b936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023d312a9f3f7cea5755d391400c9a003924b86059f7b62764f0da857770b936->enter($__internal_023d312a9f3f7cea5755d391400c9a003924b86059f7b62764f0da857770b936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/home/index.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "@SRVDVServer/home/index.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 5
        echo "
";
        // line 6
        $context["tempArray"] = array();
        // line 7
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Reserves"] ?? $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "
\t\t";
            // line 9
            if ($this->getAttribute(($context["tempArray"] ?? null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 10
                echo "\t\t\t";
                $context["tempArray"] = twig_array_merge(($context["tempArray"] ?? $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 11
                echo "\t\t";
            } else {
                // line 12
                echo "\t\t\t";
                $context["tempArray"] = twig_array_merge(($context["tempArray"] ?? $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                // line 13
                echo "\t\t";
            }
            // line 14
            echo "
\t        
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "

</br>
<div>

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>filiere</th><th>Date </th><th>heures </th><th>Enseignant</th><th>e-mail</th><th>Cat Ens</th><th>Semestre</th><th>Matiere</th><th>Type </th><th>Somme</th><th>Total</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Reserves"] ?? $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 29
            echo "
 \t\t\t\t\t\t\t";
            // line 30
            if ((($context["idAnnee"] ?? $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 31
                echo "
\t\t\t\t\t\t\t\t";
                // line 32
                if (($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") > ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["color21"] = "#FE2E2E";
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") == ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["color21"] = "#58FA58";
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 38
                echo "
\t\t\t\t\t\t\t\t";
                // line 39
                if (($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") < ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["color21"] = "#F3F781";
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<tr style=\"background-color:";
                // line 45
                echo twig_escape_filter($this->env, ($context["color21"] ?? $this->getContext($context, "color21")), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t\t<td>";
                // line 47
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
\t\t\t\t\t \t\t\t\t\t ";
                // line 48
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESP")) {
                    echo "  
\t\t\t\t\t                       &nbsp;<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    ";
                }
                // line 52
                echo "
\t\t\t\t\t                    ";
                // line 53
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIG")) {
                    echo "  
\t\t\t\t\t                     &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription_enseignant", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    ";
                }
                // line 57
                echo "                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateInscription", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbHeur", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "User", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "User", array()), "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "User", array()), "email", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "User", array()), "type", array()), "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "semestre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 69
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
} );
</script>


";
        // line 119
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/home/index.html.twig", 119)->display($context);
        
        $__internal_023d312a9f3f7cea5755d391400c9a003924b86059f7b62764f0da857770b936->leave($__internal_023d312a9f3f7cea5755d391400c9a003924b86059f7b62764f0da857770b936_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 119,  219 => 73,  212 => 71,  206 => 69,  202 => 68,  198 => 67,  194 => 66,  190 => 65,  186 => 64,  182 => 63,  176 => 62,  172 => 61,  168 => 60,  163 => 57,  157 => 54,  153 => 53,  150 => 52,  144 => 49,  140 => 48,  128 => 47,  123 => 45,  118 => 42,  112 => 40,  110 => 39,  107 => 38,  101 => 36,  98 => 35,  92 => 33,  90 => 32,  87 => 31,  85 => 30,  82 => 29,  78 => 28,  65 => 17,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  35 => 7,  33 => 6,  30 => 5,  27 => 3,  25 => 2,  22 => 1,);
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


</br>
<div>

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>filiere</th><th>Date </th><th>heures </th><th>Enseignant</th><th>e-mail</th><th>Cat Ens</th><th>Semestre</th><th>Matiere</th><th>Type </th><th>Somme</th><th>Total</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for r in Reserves %}

 \t\t\t\t\t\t\t{% if idAnnee  == r.Matiere.filiere.anneeFiliere.id  %}

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
\t\t\t\t\t \t\t\t\t\t {% if is_granted(\"ROLE_RESP\") %}  
\t\t\t\t\t                       &nbsp;<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription',{'id':r.Matiere.filiere.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    {% endif %}

\t\t\t\t\t                    {% if is_granted(\"ROLE_ENSEIG\") %}  
\t\t\t\t\t                     &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription_enseignant',{'id':r.Matiere.filiere.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    {% endif %}
                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>{{ r.dateInscription | date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.nbHeur }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.User.nom }}&nbsp;{{ r.User.prenom }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.User.email}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.User.type.libelle}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.semestre }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.nom}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.TypeEnseignant.libelle }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ tempArray['_'~r.Matiere.id]  }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ r.Matiere.nbrHeurGroupe * r.Matiere.NombreGroupe  }}</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% endif %}\t\t\t</tr>\t
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
} );
</script>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "@SRVDVServer/home/index.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\home\\index.html.twig");
    }
}
