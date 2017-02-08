<?php

/* SRVDVServerBundle:enseignant:ProfReservationEnseignant.html.twig */
class __TwigTemplate_e282550b6b502a2559680382f3bb1d2118b32705c188c1fe8fd987408fb5b629 extends Twig_Template
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
        $__internal_5861fedc392f3f88f1c6e136a621d3035d15621c5a85de15af9c6e3040ae33b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5861fedc392f3f88f1c6e136a621d3035d15621c5a85de15af9c6e3040ae33b6->enter($__internal_5861fedc392f3f88f1c6e136a621d3035d15621c5a85de15af9c6e3040ae33b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:ProfReservationEnseignant.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 23)));
        echo "


<div class=\"container\">
  <div align=\"center\">

    </br>
    <h4 align=\"center\"> La liste des Réservations de :  \" ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " &nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo " \" </h4>
    </br>
   

\t

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t
\t\t\t\t\t<tr><th>Annee </th><th>Date </th><th>Matiere</th><th>Type </th><th>Nombre d\\'heures </th><th>Heures Total</th>
            <th>Filiére</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 25
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "Filiere", array()), "anneeFiliere", array()), "annee", array()), "html", null, true);
            echo "</td>\t\t\t
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateInscription", array()), "Y-m-d"), "html", null, true);
            echo "</td>       
          <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription", array("id" => $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nom", array()), "html", null, true);
            echo "</a></td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbHeur", array()), "html", null, true);
            echo "</td>  
          <td>";
            // line 32
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "Filiere", array()), "niveau", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "Filiere", array()), "nom", array()), "html", null, true);
            echo " </td> 
          


         
          </tr>
      \t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </tbody>
              </table> 
            </div>
  

      </div>
    </div>




      
<script type=\"text/javascript\" charset=\"utf-8\" >
  \$(document).ready(function () {
    var table = \$('#example').DataTable({
      \"columnDefs\": [
        {\"visible\": false, \"targets\": 0}
      ],
      \"order\": [[0, 'asc']],
      \"displayLength\": 25,
      \"drawCallback\": function (settings) {
        var api = this.api();
        var rows = api.rows({page: 'current'}).nodes();
        var last = null;

        api.column(0, {page: 'current'}).data().each(function (group, i) {
          if (last !== group) {
            \$(rows).eq(i).before(
                    '<tr class=\"group\"><td colspan=\"16\" align=\"center\" style=\"background-color:#81F7BE\" >' + group + '</td></tr>'
                    );

            last = group;
          }
        });
      }
    });

    // Order by the grouping
    \$('#example tbody').on('click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
        table.order([0, 'desc']).draw();
      } else {
        table.order([0, 'asc']).draw();
      }
 
 });


 });
 </script>
      ";
        // line 92
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:enseignant:ProfReservationEnseignant.html.twig", 92)->display($context);
        
        $__internal_5861fedc392f3f88f1c6e136a621d3035d15621c5a85de15af9c6e3040ae33b6->leave($__internal_5861fedc392f3f88f1c6e136a621d3035d15621c5a85de15af9c6e3040ae33b6_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:enseignant:ProfReservationEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 92,  105 => 41,  89 => 33,  85 => 32,  81 => 31,  77 => 30,  71 => 29,  67 => 28,  63 => 27,  59 => 25,  55 => 24,  35 => 9,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 23 })) }}


<div class=\"container\">
  <div align=\"center\">

    </br>
    <h4 align=\"center\"> La liste des Réservations de :  \" {{ user.nom }} &nbsp;{{user.prenom}} \" </h4>
    </br>
   

\t

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t
\t\t\t\t\t<tr><th>Annee </th><th>Date </th><th>Matiere</th><th>Type </th><th>Nombre d\\'heures </th><th>Heures Total</th>
            <th>Filiére</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in reservations %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t<td>{{ u.Matiere.Filiere.anneeFiliere.annee }}</td>\t\t\t
\t\t\t\t\t<td>{{ u.dateInscription | date('Y-m-d') }}</td>       
          <td><a href=\"{{path('list_form_inscription',{'id':u.Matiere.id}) }}\">{{ u.Matiere.nom}}</a></td>
          <td>{{ u.Matiere.TypeEnseignant.libelle }}</td>
          <td>{{ u.nbHeur }}</td>  
          <td>{{ u.Matiere.nbrHeurGroupe * u.Matiere.NombreGroupe }}</td>
          <td>{{ u.Matiere.Filiere.niveau }}&nbsp;{{ u.Matiere.Filiere.nom }} </td> 
          


         
          </tr>
      \t
            {% endfor %}
              </tbody>
              </table> 
            </div>
  

      </div>
    </div>




      
<script type=\"text/javascript\" charset=\"utf-8\" >
  \$(document).ready(function () {
    var table = \$('#example').DataTable({
      \"columnDefs\": [
        {\"visible\": false, \"targets\": 0}
      ],
      \"order\": [[0, 'asc']],
      \"displayLength\": 25,
      \"drawCallback\": function (settings) {
        var api = this.api();
        var rows = api.rows({page: 'current'}).nodes();
        var last = null;

        api.column(0, {page: 'current'}).data().each(function (group, i) {
          if (last !== group) {
            \$(rows).eq(i).before(
                    '<tr class=\"group\"><td colspan=\"16\" align=\"center\" style=\"background-color:#81F7BE\" >' + group + '</td></tr>'
                    );

            last = group;
          }
        });
      }
    });

    // Order by the grouping
    \$('#example tbody').on('click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
        table.order([0, 'desc']).draw();
      } else {
        table.order([0, 'asc']).draw();
      }
 
 });


 });
 </script>
      {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:enseignant:ProfReservationEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/ProfReservationEnseignant.html.twig");
    }
}
