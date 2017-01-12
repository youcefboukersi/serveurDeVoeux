<?php

/* @SRVDVServer/admin/anneeSuivanteAdmin.html.twig */
class __TwigTemplate_4241bb2691f89979883fb1ce95594f900e440060c9839c968d05f7a1509dd892 extends Twig_Template
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
        $__internal_845d6cfd85a5a47869c1277089c6a50f5fae0eea7c131c7fec528d703c148bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845d6cfd85a5a47869c1277089c6a50f5fae0eea7c131c7fec528d703c148bae->enter($__internal_845d6cfd85a5a47869c1277089c6a50f5fae0eea7c131c7fec528d703c148bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/anneeSuivanteAdmin.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "@SRVDVServer/admin/anneeSuivanteAdmin.html.twig", 2)->display($context);
        // line 3
        echo "
<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Administrateur</h3>
\t\t<ul>
\t\t\t <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li ><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>  &nbsp; Mot de passe</a></li></br>
\t\t\t<li  ><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Annee");
        echo "\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer Année</a></li></br>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Type");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li ><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_utilisateur");
        echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_filiere");
        echo "\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_typeens");
        echo "\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
\t\t\t<li class=\"active\" ><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annee_suivante");
        echo "\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br>
\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Filieres"] ?? $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 38
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "anneeFiliere", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 1)) {
                // line 42
                echo "\t                                 OUI
\t                                ";
            }
            // line 43
            echo " &nbsp;&nbsp;
\t                                ";
            // line 44
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 0)) {
                // line 45
                echo "\t                                 <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
\t                                 \t&nbsp;&nbsp;
\t                                 <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href ='";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"
\t                                 ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t                                ";
            }
            // line 50
            echo "
                           \t    </td>
\t\t\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateFiliere", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 54
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
        // line 59
        echo "
\t\t\t\t\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Annees"] ?? $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 61
            echo "\t\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "annee", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($context["f"], "etat", array()) == 1)) {
                // line 65
                echo "\t                                 OUI
\t                                ";
            }
            // line 66
            echo " &nbsp;&nbsp;
\t                                ";
            // line 67
            if (($this->getAttribute($context["f"], "etat", array()) == 0)) {
                // line 68
                echo "\t                                 <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
\t                                 \t&nbsp;&nbsp;
\t                                 <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href ='";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"
\t                                 ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t                                ";
            }
            // line 73
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
        // line 80
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
        // line 129
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/admin/anneeSuivanteAdmin.html.twig", 129)->display($context);
        
        $__internal_845d6cfd85a5a47869c1277089c6a50f5fae0eea7c131c7fec528d703c148bae->leave($__internal_845d6cfd85a5a47869c1277089c6a50f5fae0eea7c131c7fec528d703c148bae_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/anneeSuivanteAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 129,  195 => 80,  183 => 73,  177 => 70,  171 => 68,  169 => 67,  166 => 66,  162 => 65,  158 => 64,  153 => 61,  149 => 60,  146 => 59,  133 => 54,  129 => 53,  125 => 52,  121 => 50,  115 => 47,  109 => 45,  107 => 44,  104 => 43,  100 => 42,  96 => 41,  91 => 38,  87 => 37,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  27 => 3,  25 => 2,  22 => 1,);
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
\t\t<h3>Administrateur</h3>
\t\t<ul>
\t\t\t <li><a href=\"{{path('fos_user_profile_edit')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li ><a href=\"{{path('fos_user_change_password')}}\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>  &nbsp; Mot de passe</a></li></br>
\t\t\t<li  ><a href=\"{{path('list_form_Annee')}}\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer Année</a></li></br>
            <li><a href=\"{{path('list_form_Type')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li ><a href=\"{{path('list_form_utilisateur')}}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
            <li><a href=\"{{path('list_form_filiere')}}\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"{{path('list_form_typeens')}}\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
\t\t\t<li class=\"active\" ><a href=\"{{path('annee_suivante')}}\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br>
\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


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
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/admin/anneeSuivanteAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\anneeSuivanteAdmin.html.twig");
    }
}
