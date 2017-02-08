<?php

/* @SRVDVServer/enseignant/ReserveMatiereEnseignant.html.twig */
class __TwigTemplate_eeb54cfa3d4bb2e9f2d17214a4341d558ed44b7b6c546f5708c0514d904740a1 extends Twig_Template
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
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 20)));
        echo "

  <div class=\"container\">

    </br>
    <h4 align=\"center\"> Choisissez la matiére (COURS , TD ou TP ) que vous voulez réserver  &nbsp;&nbsp; <button  type=\"button\" class=\"btn btn-info\" onclick=\"window.location.href = '";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_enseignant");
        echo "'\"><b ><span class=\"glyphicon glyphicon-backward\" aria-hidden=\"true\"></span>&nbsp;Retour</b></button></h4>



    ";
        // line 11
        $context["tempArray"] = array();
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "
      ";
            // line 14
            if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 15
                echo "        ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : null), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 16
                echo "      ";
            } else {
                // line 17
                echo "        ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : null), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                // line 18
                echo "      ";
            }
            // line 19
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"99%\" >
        <thead>

          <tr><th>Filieres</th><th>Matieres</th><th>Type(Coef)</th><th>Somme des réservations</th><th>Total</th><th>Nombre de groupe</th><th>eures/Groupe</th><th>Semestre</th><th></th></tr>
        </thead>

        <tbody>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "       

            ";
            // line 34
            if (((isset($context["idAnnee"]) ? $context["idAnnee"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 35
                echo "
              ";
                // line 36
                if ( !$this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array", true, true)) {
                    // line 37
                    echo "                ";
                    $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : null), array(("_" . $this->getAttribute($context["r"], "id", array())) => 0));
                    // line 38
                    echo "              ";
                }
                // line 39
                echo "
              ";
                // line 40
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") > ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 41
                    echo "                ";
                    $context["color21"] = "#FE2E2E";
                    echo "                     
              ";
                }
                // line 43
                echo "              ";
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") == ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 44
                    echo "                ";
                    $context["color21"] = "#58FA58";
                    echo "                     
              ";
                }
                // line 46
                echo "
              ";
                // line 47
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") < ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 48
                    echo "                ";
                    $context["color21"] = "#F3F781";
                    echo "                     
              ";
                }
                // line 50
                echo "

              <tr style=\"background-color:";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["color21"]) ? $context["color21"] : null), "html", null, true);
                echo "\">
                <td>";
                // line 53
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







                </td>
                <td> ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "  </td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
                <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 65
                echo twig_escape_filter($this->env, ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())), "html", null, true);
                echo "</td>
                <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>                                   
                <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>
                <td><button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; select</b></button>
                </td>                               


              </tr>
            ";
            }
            // line 74
            echo " 
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
                      '<tr class=\"group\"><td colspan=\"6\" align=\"center\" >' + group + '</td></tr>'
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
        // line 125
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/enseignant/ReserveMatiereEnseignant.html.twig", 125)->display($context);
    }

    public function getTemplateName()
    {
        return "@SRVDVServer/enseignant/ReserveMatiereEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 125,  206 => 76,  199 => 74,  190 => 69,  186 => 68,  182 => 67,  178 => 66,  174 => 65,  170 => 64,  164 => 63,  160 => 62,  140 => 53,  136 => 52,  132 => 50,  126 => 48,  124 => 47,  121 => 46,  115 => 44,  112 => 43,  106 => 41,  104 => 40,  101 => 39,  98 => 38,  95 => 37,  93 => 36,  90 => 35,  88 => 34,  81 => 32,  69 => 22,  61 => 19,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  47 => 14,  44 => 13,  39 => 12,  37 => 11,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SRVDVServer/enseignant/ReserveMatiereEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\enseignant\\ReserveMatiereEnseignant.html.twig");
    }
}
