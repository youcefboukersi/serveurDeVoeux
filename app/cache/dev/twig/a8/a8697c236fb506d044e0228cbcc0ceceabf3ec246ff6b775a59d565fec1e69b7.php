<?php

/* @SRVDVServer/home/index.html.twig */
class __TwigTemplate_cd59eaeb48dd026246519f3f422d79fe917a08e51f431685032effa6bd5e7fcd extends Twig_Template
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
        $__internal_c2df6487ba03c34cbb2f3a90e76f1d091acfee146a202e7e604b15f657220edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2df6487ba03c34cbb2f3a90e76f1d091acfee146a202e7e604b15f657220edf->enter($__internal_c2df6487ba03c34cbb2f3a90e76f1d091acfee146a202e7e604b15f657220edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/home/index.html.twig"));

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
            $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "@SRVDVServer/home/index.html.twig", 7)->display($context);
            // line 8
            echo "  ";
        }
        // line 9
        echo "
  ";
        // line 11
        echo "  ";
        $context["tempArray"] = array();
        // line 12
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "
    ";
            // line 14
            if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 15
                echo "      ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 16
                echo "    ";
            } else {
                // line 17
                echo "      ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                // line 18
                echo "    ";
            }
            // line 19
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  
  <div align=\"center\" class=\"form-group row\">
    <div class=\"col-xs-4 col-md-4 col-lg-4\">
    </div>
    <div class=\"col-xs-2 col-md-2 col-lg-2\">
      <select type=\"text\" id=\"min\" name=\"min\" class=\"form-control\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["an"]) {
            // line 27
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
        // line 29
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t
        ";
            // line 40
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") > ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 41
                echo "          ";
                $context["color21"] = "#FE2E2E";
                echo "\t\t\t\t\t\t
        ";
            }
            // line 43
            echo "        ";
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") == ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 44
                echo "          ";
                $context["color21"] = "#58FA58";
                echo "\t\t\t\t\t\t
        ";
            }
            // line 46
            echo "
        ";
            // line 47
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") < ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 48
                echo "          ";
                $context["color21"] = "#F3F781";
                echo "\t\t\t\t\t\t
        ";
            }
            // line 50
            echo "        <tr style=\"background-color:";
            echo twig_escape_filter($this->env, (isset($context["color21"]) ? $context["color21"] : $this->getContext($context, "color21")), "html", null, true);
            echo "\">
          <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "niveau", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "html", null, true);
            echo "&nbsp;&nbsp;

              ";
            // line 53
            $context["i"] = 1;
            // line 54
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "User", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo "                
                  (";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                echo ") 
                  ";
                // line 56
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 57
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            ";
            if (((isset($context["idAnnee"]) ? $context["idAnnee"] : $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 59
                echo "         
              ";
                // line 60
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    echo "  
                &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_reservation_responsable", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Sélectionner</b></button>                
              ";
                }
                // line 63
                echo "            ";
            }
            echo "\t

          </td>
          <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateInscription", array()), "Y-m-d"), "html", null, true);
            echo "</td>
          <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbHeur", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "User", array()), "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "semestre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array"), "html", null, true);
            echo "</td>
          <td>";
            // line 75
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
            echo "</td>
        </tr>\t
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
        // line 141
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/home/index.html.twig", 141)->display($context);
        
        $__internal_c2df6487ba03c34cbb2f3a90e76f1d091acfee146a202e7e604b15f657220edf->leave($__internal_c2df6487ba03c34cbb2f3a90e76f1d091acfee146a202e7e604b15f657220edf_prof);

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
        return array (  321 => 141,  256 => 78,  247 => 75,  243 => 74,  239 => 73,  235 => 72,  231 => 71,  227 => 70,  221 => 69,  217 => 68,  213 => 67,  209 => 66,  202 => 63,  197 => 61,  193 => 60,  190 => 59,  187 => 58,  181 => 57,  179 => 56,  171 => 55,  164 => 54,  162 => 53,  153 => 51,  148 => 50,  142 => 48,  140 => 47,  137 => 46,  131 => 44,  128 => 43,  122 => 41,  120 => 40,  114 => 39,  102 => 29,  89 => 27,  85 => 26,  77 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  57 => 14,  54 => 13,  49 => 12,  46 => 11,  43 => 9,  40 => 8,  38 => 7,  35 => 6,  30 => 4,  26 => 3,  22 => 1,);
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
          <td>{{ r.Matiere.filiere.niveau }}&nbsp;{{ r.Matiere.filiere.nom }}&nbsp;{{ r.Matiere.filiere.anneeFiliere}}&nbsp;&nbsp;

              {% set i = 1 %}
                {% for user in r.Matiere.filiere.User %}                
                  ({{ i }} - {{ user.nom }}  {{ user.prenom }}) 
                  {% set i = i +1  %}
                {% endfor %}
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
", "@SRVDVServer/home/index.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\home\\index.html.twig");
    }
}
