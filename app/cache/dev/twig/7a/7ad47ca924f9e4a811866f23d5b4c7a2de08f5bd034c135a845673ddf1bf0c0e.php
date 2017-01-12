<?php

/* SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig */
class __TwigTemplate_863ee4f89e7c6f39e34db219cdb623c443d3f7f71dde8a9c92bfe9b0e7d06abf extends Twig_Template
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
        $__internal_206afaf5084d47a6c8bb31ee2d8542c7144090dd8310975d747bf70dd74a3810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206afaf5084d47a6c8bb31ee2d8542c7144090dd8310975d747bf70dd74a3810->enter($__internal_206afaf5084d47a6c8bb31ee2d8542c7144090dd8310975d747bf70dd74a3810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 30)));
        echo "



<div id=\"content\">
\t
 </br>
        
\t";
        // line 10
        $context["tempArray"] = array();
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Reserves"] ?? $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "
        ";
            // line 13
            if ($this->getAttribute(($context["tempArray"] ?? null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 14
                echo "            ";
                $context["tempArray"] = twig_array_merge(($context["tempArray"] ?? $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 15
                echo "        ";
            } else {
                // line 16
                echo "            ";
                $context["tempArray"] = twig_array_merge(($context["tempArray"] ?? $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                // line 17
                echo "        ";
            }
            // line 18
            echo "
            
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"99%\" >
                \t<thead>
                \t\t
\t\t\t\t\t<tr><th>#Filiere</th><th>Matiere</th><th>Type Enseignant (Coef)</th><th>Res</th><th>Total</th><th>Nombre de groupe</th><th>heures/groupe</th><th>Semestre</th></tr>
\t\t\t\t   </thead>

\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["matieres"] ?? $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t

\t\t\t\t\t\t\t";
            // line 33
            if (((($context["idAnnee"] ?? $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "User", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 34
                echo "
\t\t\t\t\t\t\t\t";
                // line 35
                if ( !$this->getAttribute(($context["tempArray"] ?? null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array", true, true)) {
                    // line 36
                    echo " \t\t\t\t\t\t\t";
                    $context["tempArray"] = twig_array_merge(($context["tempArray"] ?? $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($context["r"], "id", array())) => 0));
                    // line 37
                    echo " \t\t\t\t\t\t\t";
                }
                // line 38
                echo "
\t\t\t\t\t\t\t\t";
                // line 39
                if (($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") > ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["color21"] = "#FE2E2E";
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") == ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["color21"] = "#58FA58";
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 45
                echo "
\t\t\t\t\t\t\t\t";
                // line 46
                if (($this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") < ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["color21"] = "#F3F781";
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 49
                echo "                                 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr style=\"background-color:";
                // line 51
                echo twig_escape_filter($this->env, ($context["color21"] ?? $this->getContext($context, "color21")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<td>";
                // line 52
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
\t\t\t\t\t \t\t\t\t
\t\t\t\t\t                      
\t\t\t\t\t                          
\t\t\t\t\t                   

\t\t\t\t\t                   
                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription_matieres_etat", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>&nbsp;  &nbsp; ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "  </td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " &nbsp;(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute(($context["tempArray"] ?? $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                   </tbody>
\t\t\t\t</table> 
            </div>
</div>
\t





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
                        '<tr class=\"group\"><td colspan=\"6\" align=\"center\" >'+group+'</td></tr>'
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
        // line 123
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig", 123)->display($context);
        
        $__internal_206afaf5084d47a6c8bb31ee2d8542c7144090dd8310975d747bf70dd74a3810->leave($__internal_206afaf5084d47a6c8bb31ee2d8542c7144090dd8310975d747bf70dd74a3810_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 123,  202 => 73,  195 => 71,  187 => 67,  183 => 66,  179 => 65,  175 => 64,  171 => 63,  165 => 62,  159 => 61,  139 => 52,  135 => 51,  131 => 49,  125 => 47,  123 => 46,  120 => 45,  114 => 43,  111 => 42,  105 => 40,  103 => 39,  100 => 38,  97 => 37,  94 => 36,  92 => 35,  89 => 34,  87 => 33,  80 => 31,  68 => 21,  60 => 18,  57 => 17,  54 => 16,  51 => 15,  48 => 14,  46 => 13,  43 => 12,  38 => 11,  36 => 10,  25 => 2,  22 => 1,);
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
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\" , { 'id': 30 })) }}



<div id=\"content\">
\t
 </br>
        
\t{% set tempArray = {} %}
    {% for item in Reserves %}

        {% if tempArray['_'~item.Matiere.id] is defined %}
            {% set tempArray = tempArray|merge({('_'~item.Matiere.id):(tempArray['_'~item.Matiere.id]+item.nbHeur)}) %}
        {% else %}
            {% set tempArray = tempArray|merge({('_'~item.Matiere.id):(item.nbHeur)}) %}
        {% endif %}

            
    {% endfor %}


\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"99%\" >
                \t<thead>
                \t\t
\t\t\t\t\t<tr><th>#Filiere</th><th>Matiere</th><th>Type Enseignant (Coef)</th><th>Res</th><th>Total</th><th>Nombre de groupe</th><th>heures/groupe</th><th>Semestre</th></tr>
\t\t\t\t   </thead>

\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for r in matieres %}\t\t\t\t

\t\t\t\t\t\t\t{% if idAnnee  == r.filiere.anneeFiliere.id and r.filiere.User.id == app.user.id  %}

\t\t\t\t\t\t\t\t{% if tempArray['_'~r.id] is not defined %}
 \t\t\t\t\t\t\t{% set tempArray = tempArray|merge({('_'~r.id):0}) %}
 \t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if tempArray['_'~r.id] >  (r.nbrHeurGroupe * r.NombreGroupe )%}
\t\t\t\t\t\t\t\t\t{% set color21='#FE2E2E' %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if tempArray['_'~r.id] ==  (r.nbrHeurGroupe * r.NombreGroupe ) %}
\t\t\t\t\t\t\t\t\t{% set color21='#58FA58' %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if tempArray['_'~r.id] <  (r.nbrHeurGroupe * r.NombreGroupe ) %}
\t\t\t\t\t\t\t\t\t{% set color21='#F3F781' %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}
                                 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr style=\"background-color:{{color21}}\">
\t\t\t\t\t\t\t\t\t<td>{{ r.filiere.niveau }}&nbsp;{{ r.filiere.nom }}&nbsp;{{ r.filiere.anneeFiliere}}&nbsp;&nbsp;({{ r.filiere.User.nom}}&nbsp;{{ r.filiere.User.prenom}})
\t\t\t\t\t \t\t\t\t
\t\t\t\t\t                      
\t\t\t\t\t                          
\t\t\t\t\t                   

\t\t\t\t\t                   
                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription_matieres_etat',{'id':r.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>&nbsp;  &nbsp; {{ r. nom}}  </td>
\t\t\t\t\t\t\t\t\t<td>{{ r.TypeEnseignant.libelle}} &nbsp;({{ r.TypeEnseignant.coef}})</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ tempArray['_'~r.id]}}</td>
\t\t\t\t\t\t\t\t\t<td>{{ r.nbrHeurGroupe * r.NombreGroupe  }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ r.NombreGroupe}}</td>
\t\t\t\t\t\t\t\t\t<td>{{ r.nbrHeurGroupe}}</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>{{ r.semestre}}</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endif %}\t
\t\t\t\t\t\t{% endfor %}
                   </tbody>
\t\t\t\t</table> 
            </div>
</div>
\t





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
                        '<tr class=\"group\"><td colspan=\"6\" align=\"center\" >'+group+'</td></tr>'
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

{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/EtatMatiereResponsable.html.twig");
    }
}
