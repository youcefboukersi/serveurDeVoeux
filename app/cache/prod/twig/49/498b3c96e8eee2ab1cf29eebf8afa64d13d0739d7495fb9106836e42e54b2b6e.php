<?php

/* SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig */
class __TwigTemplate_395c3c11b2574d723c2f761cacb9980f1862018302a1a437f117fd9ae2c2a925 extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 40)));
        echo "



  <div align=\"center\">
    </br>


    <div class=\" centreVerticalement\">

      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
          <thead>
            <tr><th>#Filieres</th><th>Matieres</th><th>Nombre de groupe</th><th>Heures/Groupe</th><th>Type enseignant (Coef)</th><th>Semestre</th></tr>
          </thead>
          <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Matieres"]) ? $context["Matieres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t
              ";
            // line 19
            if (((isset($context["idAnnee"]) ? $context["idAnnee"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 20
                echo "                <tr >
                  <td>";
                // line 21
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
                  <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " &nbsp;(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
                  <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t


                </tr>
              ";
            }
            // line 31
            echo "\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "          </tbody>
        </table> 

      </div>



    </div>




    <script>
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
      });

    </script>
    ";
        // line 82
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig", 82)->display($context);
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
        return array (  149 => 82,  98 => 33,  91 => 31,  83 => 27,  77 => 26,  73 => 25,  69 => 24,  65 => 23,  52 => 21,  49 => 20,  47 => 19,  41 => 18,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:admin:NouveauxUsersAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/NouveauxUsersAdmin.html.twig");
    }
}
