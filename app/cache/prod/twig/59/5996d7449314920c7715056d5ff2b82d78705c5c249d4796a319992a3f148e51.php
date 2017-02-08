<?php

/* @SRVDVServer/home/index.html.twig */
class __TwigTemplate_9eeecd5f021f228418f551e3acb538fa6fcbfd72947e053cc81f6f4ca2477391 extends Twig_Template
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
        echo "  ";
        // line 10
        echo "  ";
        $context["tempArray"] = array();
        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "
    ";
            // line 13
            if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 14
                echo "      ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : null), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "      ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : null), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : null));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t
        ";
            // line 38
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") > ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 39
                echo "          ";
                $context["color21"] = "#FE2E2E";
                echo "\t\t\t\t\t\t
        ";
            }
            // line 41
            echo "        ";
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") == ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
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
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array") < ($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "NombreGroupe", array())))) {
                // line 46
                echo "          ";
                $context["color21"] = "#F3F781";
                echo "\t\t\t\t\t\t
        ";
            }
            // line 48
            echo "        <tr style=\"background-color:";
            echo twig_escape_filter($this->env, (isset($context["color21"]) ? $context["color21"] : null), "html", null, true);
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
            if (((isset($context["idAnnee"]) ? $context["idAnnee"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "id", array()))) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matiere", array()), "id", array())), array(), "array"), "html", null, true);
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
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/home/index.html.twig", 133)->display($context);
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
        return array (  293 => 133,  228 => 70,  219 => 67,  215 => 66,  211 => 65,  207 => 64,  203 => 63,  199 => 62,  193 => 61,  189 => 60,  185 => 59,  181 => 58,  174 => 55,  169 => 53,  165 => 52,  162 => 51,  160 => 50,  148 => 49,  143 => 48,  137 => 46,  135 => 45,  132 => 44,  126 => 42,  123 => 41,  117 => 39,  115 => 38,  109 => 37,  97 => 27,  84 => 25,  80 => 24,  73 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  45 => 11,  42 => 10,  40 => 9,  37 => 8,  35 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SRVDVServer/home/index.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\home\\index.html.twig");
    }
}
