<?php

/* SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig */
class __TwigTemplate_047861b4dcc791ca9b12632d5409d63d6586cd8a0336b5fee195724912ae1324 extends Twig_Template
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
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>#</th><th>Date</th><th>nom</th><th>Responsable</th></tr>
          </thead>
          <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Filieres"]) ? $context["Filieres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 19
            echo "              <tr>

                <td>
                  ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "anneeFiliere", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 1)) {
                // line 23
                echo "                    OUI
                  ";
            }
            // line 24
            echo " &nbsp;&nbsp;
                  ";
            // line 25
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 0)) {
                // line 26
                echo "                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
                    &nbsp;&nbsp;
                    <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href = '";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"
                            ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                        ";
            }
            // line 31
            echo "
                </td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateFiliere", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "user", array()), "prenom", array()), "html", null, true);
            echo "</td>


              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 42
            echo "              <tr>

                <td>
                  ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "annee", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($context["f"], "etat", array()) == 1)) {
                // line 46
                echo "                    OUI
                  ";
            }
            // line 47
            echo " &nbsp;&nbsp;
                  ";
            // line 48
            if (($this->getAttribute($context["f"], "etat", array()) == 0)) {
                // line 49
                echo "                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
                    &nbsp;&nbsp;
                    <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href = '";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"
                            ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                        ";
            }
            // line 54
            echo "
                </td>
                <td></td>
                <td></td>
                <td></td>
              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
          </tbody>
        </table> 
      </div>
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
        // line 109
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig", 109)->display($context);
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
        return array (  199 => 109,  149 => 61,  137 => 54,  131 => 51,  125 => 49,  123 => 48,  120 => 47,  116 => 46,  112 => 45,  107 => 42,  103 => 41,  100 => 40,  87 => 35,  83 => 34,  79 => 33,  75 => 31,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  54 => 23,  50 => 22,  45 => 19,  41 => 18,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/anneeSuivanteAdmin.html.twig");
    }
}
