<?php

/* SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig */
class __TwigTemplate_64fb046389cbd8761f24c42ca6526cd7d8c4194602ac607048106cd8fd97e964 extends Twig_Template
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
        $__internal_6e4f1c42693a96de914295608e67013c9ba7525b6980b4fe4aa053c346faca0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4f1c42693a96de914295608e67013c9ba7525b6980b4fe4aa053c346faca0c->enter($__internal_6e4f1c42693a96de914295608e67013c9ba7525b6980b4fe4aa053c346faca0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig", 2)->display($context);
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
            <li  ><a href=\"";
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


<div id=\"content\">
\t</br>
\t\t

\t\t<div class=\" centreVerticalement\">

\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#Filiere</th><th>Matiere</th><th>Nombre de groupe</th><th>heures/groupe</th><th>Type Enseignant (Coef)</th><th>Semestre</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Matieres"] ?? $this->getContext($context, "Matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t

\t\t\t\t\t\t\t";
            // line 37
            if ((($context["idAnnee"] ?? $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 38
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t\t<td>";
                // line 40
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
\t\t\t\t\t \t\t\t\t\t                    
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " &nbsp;(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                   </tbody>
\t\t\t\t</table> 
            
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
        // line 103
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig", 103)->display($context);
        
        $__internal_6e4f1c42693a96de914295608e67013c9ba7525b6980b4fe4aa053c346faca0c->leave($__internal_6e4f1c42693a96de914295608e67013c9ba7525b6980b4fe4aa053c346faca0c_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 103,  145 => 53,  138 => 51,  130 => 47,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  98 => 40,  94 => 38,  92 => 37,  85 => 35,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  27 => 3,  25 => 2,  22 => 1,);
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
            <li  ><a href=\"{{path('fos_user_change_password')}}\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>  &nbsp; Mot de passe</a></li></br>
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


<div id=\"content\">
\t</br>
\t\t

\t\t<div class=\" centreVerticalement\">

\t\t<div class=\"table-responsive\">
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
\t\t\t\t\t \t\t\t\t\t                    
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
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/NouveauxUsersAdmin.html.twig");
    }
}
