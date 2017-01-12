<?php

/* SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig */
class __TwigTemplate_5cc07c0bec0bb0c1b5c213915d8b51d8cf34f229d388aabdbc886a2d93aeaa6f extends Twig_Template
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
        $__internal_1dd824a73493ed09dca7feb6c3f01ea64e30e4ede105d25bf1e9d70434f6e493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd824a73493ed09dca7feb6c3f01ea64e30e4ede105d25bf1e9d70434f6e493->enter($__internal_1dd824a73493ed09dca7feb6c3f01ea64e30e4ede105d25bf1e9d70434f6e493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 40)));
        echo "





<div id=\"content\" aligne=\"center\">
\t</br>
\t\t

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Date</th><th>nom</th><th>Responsable</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>


\t\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Filieres"] ?? $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 23
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "anneeFiliere", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 1)) {
                // line 27
                echo "\t                                 OUI
\t                                ";
            }
            // line 28
            echo " &nbsp;&nbsp;
\t                                ";
            // line 29
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 0)) {
                // line 30
                echo "\t                                 <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
\t                                 \t&nbsp;&nbsp;
\t                                 <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href ='";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"
\t                                 ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t                                ";
            }
            // line 35
            echo "
                           \t    </td>
\t\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateFiliere", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "user", array()), "prenom", array()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Annees"] ?? $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 46
            echo "\t\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "annee", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($context["f"], "etat", array()) == 1)) {
                // line 50
                echo "\t                                 OUI
\t                                ";
            }
            // line 51
            echo " &nbsp;&nbsp;
\t                                ";
            // line 52
            if (($this->getAttribute($context["f"], "etat", array()) == 0)) {
                // line 53
                echo "\t                                 <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
\t                                 \t&nbsp;&nbsp;
\t                                 <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href ='";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"
\t                                 ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t                                ";
            }
            // line 58
            echo "
                           \t    </td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                   </tbody>
\t\t\t\t</table> 
            </div>
\t\t</div>
\t
</div>




<script>
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
        // line 114
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig", 114)->display($context);
        
        $__internal_1dd824a73493ed09dca7feb6c3f01ea64e30e4ede105d25bf1e9d70434f6e493->leave($__internal_1dd824a73493ed09dca7feb6c3f01ea64e30e4ede105d25bf1e9d70434f6e493_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 114,  156 => 65,  144 => 58,  138 => 55,  132 => 53,  130 => 52,  127 => 51,  123 => 50,  119 => 49,  114 => 46,  110 => 45,  107 => 44,  94 => 39,  90 => 38,  86 => 37,  82 => 35,  76 => 32,  70 => 30,  68 => 29,  65 => 28,  61 => 27,  57 => 26,  52 => 23,  48 => 22,  25 => 2,  22 => 1,);
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
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 40 })) }}





<div id=\"content\" aligne=\"center\">
\t</br>
\t\t

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Date</th><th>nom</th><th>Responsable</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>


\t\t\t\t\t\t{% for u in Filieres %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{ u.anneeFiliere }} &nbsp;&nbsp;{% if u.anneeFiliere.etat == 1 %}
\t                                 OUI
\t                                {% endif %} &nbsp;&nbsp;
\t                                {% if u.anneeFiliere.etat == 0 %}
\t                                 <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('generate_Annee_users',{'id':u.anneeFiliere.id }) }}'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
\t                                 \t&nbsp;&nbsp;
\t                                 <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href ='{{path('supprimer_generate_Annee',{'id': u.anneeFiliere.id }) }}'\"
\t                                 ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t                                {% endif %}

                           \t    </td>
\t\t\t\t\t\t\t\t<td>{{ u.dateFiliere|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.User.nom }}&nbsp;{{ u.user.prenom }}</td>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t{% for f in Annees %}
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{ f.annee }} &nbsp;&nbsp;{% if f.etat == 1 %}
\t                                 OUI
\t                                {% endif %} &nbsp;&nbsp;
\t                                {% if f.etat == 0 %}
\t                                 <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('generate_Annee_users',{'id':f.id }) }}'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
\t                                 \t&nbsp;&nbsp;
\t                                 <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href ='{{path('supprimer_generate_Annee',{'id': f.id }) }}'\"
\t                                 ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t                                {% endif %}

                           \t    </td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}

                   </tbody>
\t\t\t\t</table> 
            </div>
\t\t</div>
\t
</div>




<script>
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
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/anneeSuivanteAdmin.html.twig");
    }
}
