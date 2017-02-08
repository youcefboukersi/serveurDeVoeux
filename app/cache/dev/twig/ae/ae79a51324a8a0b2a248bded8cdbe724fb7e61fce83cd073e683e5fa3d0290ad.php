<?php

/* SRVDVServerBundle:home:ListeFilieres.html.twig */
class __TwigTemplate_f6b4955078157e9bc1a629ac88170506cb3faf593187f997d95d8263cba37c65 extends Twig_Template
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
        $__internal_4817a8518a7b807e35a5f111944e72fc425fc67c2e570282834ce01fbfe70ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4817a8518a7b807e35a5f111944e72fc425fc67c2e570282834ce01fbfe70ce1->enter($__internal_4817a8518a7b807e35a5f111944e72fc425fc67c2e570282834ce01fbfe70ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:ListeFilieres.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "  
    ";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => "Filieres")));
            echo "
  ";
        } else {
            // line 5
            echo "
    ";
            // line 6
            $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:home:ListeFilieres.html.twig", 6)->display($context);
            // line 7
            echo "  ";
        }
        // line 8
        echo "  <div class=\"container\">

  <div align=\"center\" class=\"form-group row\">
    <div class=\"col-xs-4 col-md-4 col-lg-4\">
    </div>
    <div class=\"col-xs-2 col-md-2 col-lg-2\">
      <select type=\"text\" id=\"min\" name=\"min\" class=\"form-control\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["an"]) {
            // line 16
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
        // line 18
        echo "      </select>
    </div>
  </div>  
</br>
    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
        <thead>
          <tr><th>#Filiere</th><th>Matiere</th><th>Nombre de groupe</th><th>heures/groupe</th><th>Type Enseignant (Coef)</th><th>Semestre</th><th>Année</th></tr>
        </thead>
        <tbody>
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Matieres"]) ? $context["Matieres"] : $this->getContext($context, "Matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t


              <tr >
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "niveau", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "html", null, true);
            echo "&nbsp;&nbsp;

                  ";
            // line 34
            $context["i"] = 1;
            // line 35
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "User", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo "                
                  (";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                echo ") 
                  ";
                // line 37
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                 
                
                    ";
            // line 41
            if (((isset($context["idAnnee"]) ? $context["idAnnee"] : $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 42
                echo "                    &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_reservation_responsable", array("id" => $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; select</b></button>                
                    ";
            }
            // line 43
            echo " 
              

                </td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo " &nbsp;(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
            echo ")</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
            echo "</td>\t
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "AnneeFiliere", array()), "annee", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t


              </tr>
            
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
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
                      '<tr class=\"group\"><td colspan=\"6\" align=\"center\" style=\"background-color:#81F7BE\">' + group + '</td></tr>'
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

            var age = parseFloat(data[6]) || 0; // use data for the age column

            if ((age == min || isNaN(min)))
            {
              return true;
            }
            return false;

          }
  );

  </script>

  ";
        // line 123
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:home:ListeFilieres.html.twig", 123)->display($context);
        // line 124
        echo "


";
        
        $__internal_4817a8518a7b807e35a5f111944e72fc425fc67c2e570282834ce01fbfe70ce1->leave($__internal_4817a8518a7b807e35a5f111944e72fc425fc67c2e570282834ce01fbfe70ce1_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:home:ListeFilieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 124,  242 => 123,  175 => 58,  163 => 52,  159 => 51,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  135 => 43,  129 => 42,  127 => 41,  123 => 39,  117 => 38,  115 => 37,  107 => 36,  100 => 35,  98 => 34,  89 => 32,  80 => 28,  68 => 18,  55 => 16,  51 => 15,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
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
    {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\" , { 'id': 'Filieres' })) }}
  {% else %}

    {% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}
  {% endif %}
  <div class=\"container\">

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
  </div>  
</br>
    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
        <thead>
          <tr><th>#Filiere</th><th>Matiere</th><th>Nombre de groupe</th><th>heures/groupe</th><th>Type Enseignant (Coef)</th><th>Semestre</th><th>Année</th></tr>
        </thead>
        <tbody>
          {% for r in Matieres %}\t\t\t\t


              <tr >
                <td>{{ r.filiere.niveau }}&nbsp;{{ r.filiere.nom }}&nbsp;{{ r.filiere.anneeFiliere}}&nbsp;&nbsp;

                  {% set i = 1 %}
                {% for user in r.filiere.User %}                
                  ({{ i }} - {{ user.nom }}  {{ user.prenom }}) 
                  {% set i = i +1  %}
                {% endfor %}
                 
                
                    {% if idAnnee  == r.filiere.anneeFiliere.id  %}
                    &nbsp;  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{path('Etat_reservation_responsable',{'id':r.filiere.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; select</b></button>                
                    {% endif %} 
              

                </td>
                <td>{{ r. nom}}</td>
                <td>{{ r.NombreGroupe}}</td>
                <td>{{ r.nbrHeurGroupe}}</td>
                <td>{{ r.TypeEnseignant.libelle}} &nbsp;({{ r.TypeEnseignant.coef}})</td>
                <td>{{ r.semestre}}</td>\t
                <td>{{ r.filiere.AnneeFiliere.annee}}</td>\t\t\t\t\t\t\t


              </tr>
            
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
                      '<tr class=\"group\"><td colspan=\"6\" align=\"center\" style=\"background-color:#81F7BE\">' + group + '</td></tr>'
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

            var age = parseFloat(data[6]) || 0; // use data for the age column

            if ((age == min || isNaN(min)))
            {
              return true;
            }
            return false;

          }
  );

  </script>

  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}



", "SRVDVServerBundle:home:ListeFilieres.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/home/ListeFilieres.html.twig");
    }
}
