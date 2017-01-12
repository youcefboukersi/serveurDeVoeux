<?php

/* @SRVDVServer/home/ListeFilieres.html.twig */
class __TwigTemplate_95b5e266dc4a1ad1622be325d944d9fecb41e28fb9b9ceb298a91f2f9a94d4ed extends Twig_Template
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
        $__internal_453db73c4dc9ae2af56cc78b26f9c8f3b77ce994e4fb475b8196825f44d972b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453db73c4dc9ae2af56cc78b26f9c8f3b77ce994e4fb475b8196825f44d972b8->enter($__internal_453db73c4dc9ae2af56cc78b26f9c8f3b77ce994e4fb475b8196825f44d972b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/home/ListeFilieres.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "@SRVDVServer/home/ListeFilieres.html.twig", 2)->display($context);
        // line 3
        echo "



<div>

\t\t\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#Filiere</th><th>Matiere</th><th>Nombre de groupe</th><th>heures/groupe</th><th>Type Enseignant (Coef)</th><th>Semestre</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Matieres"] ?? $this->getContext($context, "Matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t

\t\t\t\t\t\t\t";
            // line 17
            if ((($context["idAnnee"] ?? $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 18
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t<td>";
                // line 20
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
                // line 21
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESP")) {
                    echo "  
\t\t\t\t\t                       &nbsp;<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription", array("id" => $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    ";
                }
                // line 25
                echo "
\t\t\t\t\t                    ";
                // line 26
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIG")) {
                    echo "  
\t\t\t\t\t                     &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription_enseignant", array("id" => $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>                
\t\t\t\t\t                          
\t\t\t\t\t                    ";
                }
                // line 30
                echo "                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " &nbsp;(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        // line 89
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/home/ListeFilieres.html.twig", 89)->display($context);
        // line 90
        echo "


";
        
        $__internal_453db73c4dc9ae2af56cc78b26f9c8f3b77ce994e4fb475b8196825f44d972b8->leave($__internal_453db73c4dc9ae2af56cc78b26f9c8f3b77ce994e4fb475b8196825f44d972b8_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/home/ListeFilieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 90,  175 => 89,  126 => 42,  119 => 40,  111 => 36,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 30,  83 => 27,  79 => 26,  76 => 25,  70 => 22,  66 => 21,  54 => 20,  50 => 18,  48 => 17,  41 => 15,  27 => 3,  25 => 2,  22 => 1,);
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



", "@SRVDVServer/home/ListeFilieres.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\home\\ListeFilieres.html.twig");
    }
}
