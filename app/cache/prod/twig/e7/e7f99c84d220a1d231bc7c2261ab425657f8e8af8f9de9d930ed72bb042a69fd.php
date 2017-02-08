<?php

/* SRVDVServerBundle:home:index.html.twig */
class __TwigTemplate_f1214d9a708c2229ad218b5c7a61ae825100e975f3372dc3b14c4c85b9d56b2c extends Twig_Template
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
        $__internal_d16b13b637d8721749124ce9fda3e6330fe83caa05d9575117f1e2074b511044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16b13b637d8721749124ce9fda3e6330fe83caa05d9575117f1e2074b511044->enter($__internal_d16b13b637d8721749124ce9fda3e6330fe83caa05d9575117f1e2074b511044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:index.html.twig"));

        // line 1
        echo "<html>

  ";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "  
    ";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => "Reserves")));
            echo "
  ";
        } else {
            // line 6
            echo "
    ";
            // line 7
            $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:home:index.html.twig", 7)->display($context);
            // line 8
            echo "  ";
        }
        // line 9
        echo "  ";
        // line 10
        echo "  ";
        $context["tempArray"] = array();
        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "
    ";
            // line 13
            if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 14
                echo "      ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "      ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                // line 17
                echo "    ";
            }
            // line 18
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  <div align=\"center\" class=\"form-group row\">
    <div class=\"col-xs-4 col-md-4 col-lg-4\">
    </div>
    <div class=\"col-xs-2 col-md-2 col-lg-2\">
      <select type=\"text\" id=\"min\" name=\"min\" class=\"form-control\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["an"]) {
            // line 25
            echo "          <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["an"], "annee", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["an"], "etat", array()) == 1)) {
                echo "année active";
            }
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['an'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      </select>
    </div>
  </div>\t 
</div>
<div class=\"table-responsive\">
  <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
    <thead>
      <tr><th>Filiere</th><th>Année</th><th>Date </th><th>Heures </th><th>Enseignant</th><th>Cat Ens</th><th>Semestre</th><th>Matiere</th><th>Type </th><th>Somme</th><th>Total</th></tr>
    </thead>
    <tbody>
      ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t
        ";
            // line 38
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") > ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 39
                echo "          ";
                $context["color21"] = "#FE2E2E";
                echo "\t\t\t\t\t\t
        ";
            }
            // line 41
            echo "        ";
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") == ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 42
                echo "          ";
                $context["color21"] = "#58FA58";
                echo "\t\t\t\t\t\t
        ";
            }
            // line 44
            echo "
        ";
            // line 45
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") < ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 46
                echo "          ";
                $context["color21"] = "#F3F781";
                echo "\t\t\t\t\t\t
        ";
            }
            // line 48
            echo "        <tr style=\"background-color:";
            echo twig_escape_filter($this->env, (isset($context["color21"]) ? $context["color21"] : $this->getContext($context, "color21")), "html", null, true);
            echo "\">
          <td>";
            // line 49
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
            ";
            // line 50
            if (((isset($context["idAnnee"]) ? $context["idAnnee"] : $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 51
                echo "         
              ";
                // line 52
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo "  
                &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_reservation_responsable", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Sélectionner</b></button>                
              ";
                }
                // line 55
                echo "            ";
            }
            echo "\t

          </td>
          <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateInscription", array()), "Y-m-d"), "html", null, true);
            echo "</td>
          <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbHeur", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "User", array()), "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "semestre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array"), "html", null, true);
            echo "</td>
          <td>";
            // line 67
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
            echo "</td>
        </tr>\t
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </tbody>
  </table> 
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
                    '<tr class=\"group\"><td colspan=\"16\" align=\"center\" >' + group + '</td></tr>'
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

    \$('#min').on('click', function () {

      table.draw();
    });
  });

  \$.fn.dataTable.ext.search.push(
          function (settings, data, dataIndex) {
            var min = parseInt(\$('#min').val(), 10);

            var age = parseFloat(data[1]) || 0; // use data for the age column

            if ((age == min || isNaN(min)))
            {
              return true;
            }
            return false;

          }
  );

</script>


";
        // line 133
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:home:index.html.twig", 133)->display($context);
        
        $__internal_d16b13b637d8721749124ce9fda3e6330fe83caa05d9575117f1e2074b511044->leave($__internal_d16b13b637d8721749124ce9fda3e6330fe83caa05d9575117f1e2074b511044_prof);

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
        return array (  296 => 133,  231 => 70,  222 => 67,  218 => 66,  214 => 65,  210 => 64,  206 => 63,  202 => 62,  196 => 61,  192 => 60,  188 => 59,  184 => 58,  177 => 55,  172 => 53,  168 => 52,  165 => 51,  163 => 50,  151 => 49,  146 => 48,  140 => 46,  138 => 45,  135 => 44,  129 => 42,  126 => 41,  120 => 39,  118 => 38,  112 => 37,  100 => 27,  87 => 25,  83 => 24,  76 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  56 => 13,  53 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  38 => 7,  35 => 6,  30 => 4,  26 => 3,  22 => 1,);
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
    {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 'Reserves' })) }}
  {% else %}

    {% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}
  {% endif %}
  {# nous ajoutons un underscore dans la clé #}
  {% set tempArray = {} %}
  {% for item in Reserves %}

    {% if tempArray['_'~item.Matiere.id] is defined %}
      {% set tempArray = tempArray|merge({('_'~item.Matiere.id):(tempArray['_'~item.Matiere.id]+item.nbHeur)}) %}
    {% else %}
      {% set tempArray = tempArray|merge({('_'~item.Matiere.id):(item.nbHeur)}) %}
    {% endif %}
  {% endfor %}
  <div align=\"center\" class=\"form-group row\">
    <div class=\"col-xs-4 col-md-4 col-lg-4\">
    </div>
    <div class=\"col-xs-2 col-md-2 col-lg-2\">
      <select type=\"text\" id=\"min\" name=\"min\" class=\"form-control\">
        {% for an in Annees %}
          <option>{{ an.annee}} {% if an.etat==1 %}année active{% endif%}</option>
        {% endfor %}
      </select>
    </div>
  </div>\t 
</div>
<div class=\"table-responsive\">
  <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
    <thead>
      <tr><th>Filiere</th><th>Année</th><th>Date </th><th>Heures </th><th>Enseignant</th><th>Cat Ens</th><th>Semestre</th><th>Matiere</th><th>Type </th><th>Somme</th><th>Total</th></tr>
    </thead>
    <tbody>
      {% for r in Reserves %}\t\t
        {% if tempArray['_'~r.Matiere.id] >  (r.Matiere.nbrHeurGroupe * r.Matiere.NombreGroupe )%}
          {% set color21='#FE2E2E' %}\t\t\t\t\t\t
        {% endif %}
        {% if tempArray['_'~r.Matiere.id] ==  (r.Matiere.nbrHeurGroupe * r.Matiere.NombreGroupe ) %}
          {% set color21='#58FA58' %}\t\t\t\t\t\t
        {% endif %}

        {% if tempArray['_'~r.Matiere.id] <  (r.Matiere.nbrHeurGroupe * r.Matiere.NombreGroupe ) %}
          {% set color21='#F3F781' %}\t\t\t\t\t\t
        {% endif %}
        <tr style=\"background-color:{{color21}}\">
          <td>{{ r.Matiere.filiere.niveau }}&nbsp;{{ r.Matiere.filiere.nom }}&nbsp;{{ r.Matiere.filiere.anneeFiliere}}&nbsp;&nbsp;({{ r.Matiere.filiere.User.nom}}&nbsp;{{ r.Matiere.filiere.User.prenom}})
            {% if idAnnee  == r.Matiere.filiere.anneeFiliere.id  %}
         
              {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}  
                &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{path('Etat_reservation_responsable',{'id':r.Matiere.filiere.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Sélectionner</b></button>                
              {% endif %}
            {% endif %}\t

          </td>
          <td>{{ r.Matiere.filiere.anneeFiliere}}</td>
          <td>{{ r.dateInscription | date('Y-m-d') }}</td>
          <td>{{ r.nbHeur }}</td>
          <td>{{ r.User.nom }}&nbsp;{{ r.User.prenom }}</td>
          <td>{{ r.User.type.libelle}}</td>
          <td>{{ r.Matiere.semestre }}</td>
          <td>{{ r.Matiere.nom}}</td>
          <td>{{ r.Matiere.TypeEnseignant.libelle }}</td>
          <td>{{ tempArray['_'~r.Matiere.id]  }}</td>
          <td>{{ r.Matiere.nbrHeurGroupe * r.Matiere.NombreGroupe  }}</td>
        </tr>\t
      {% endfor %}
    </tbody>
  </table> 
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
                    '<tr class=\"group\"><td colspan=\"16\" align=\"center\" >' + group + '</td></tr>'
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

    \$('#min').on('click', function () {

      table.draw();
    });
  });

  \$.fn.dataTable.ext.search.push(
          function (settings, data, dataIndex) {
            var min = parseInt(\$('#min').val(), 10);

            var age = parseFloat(data[1]) || 0; // use data for the age column

            if ((age == min || isNaN(min)))
            {
              return true;
            }
            return false;

          }
  );

</script>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:home:index.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/home/index.html.twig");
    }
}
