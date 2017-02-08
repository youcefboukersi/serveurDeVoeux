<?php

/* @SRVDVServer/admin/NouveauxUsersAdmin.html.twig */
class __TwigTemplate_8fd5c8ca8a3b693d86c6f3998d17df2e3aad4e7eab1c4739060c5b868bcb6f42 extends Twig_Template
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
        $__internal_93545ffebd05fd2705be1688585c248207004d28ada7a39b978439d367c00f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93545ffebd05fd2705be1688585c248207004d28ada7a39b978439d367c00f95->enter($__internal_93545ffebd05fd2705be1688585c248207004d28ada7a39b978439d367c00f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/NouveauxUsersAdmin.html.twig"));

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
            <tr><th>Filieres</th><th>Matieres</th><th>Nombre de groupe</th><th>Heures/Groupe</th><th>Type enseignement (Coef)</th><th>Semestre</th></tr>
          </thead>
          <tbody>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Matieres"]) ? $context["Matieres"] : $this->getContext($context, "Matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t
              ";
            // line 13
            if (((isset($context["idAnnee"]) ? $context["idAnnee"] : $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 14
                echo "                <tr >
                  <td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "niveau", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "html", null, true);
                echo "&nbsp;&nbsp; ";
                $context["i"] = 1;
                // line 16
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "User", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    echo "                
                  (";
                    // line 17
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                    echo ") 
                  ";
                    // line 18
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 19
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                  </td>
                  <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " &nbsp;(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
                  <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>\t\t\t\t\t
                </tr>
              ";
            }
            // line 27
            echo "\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        // line 70
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/admin/NouveauxUsersAdmin.html.twig", 70)->display($context);
        
        $__internal_93545ffebd05fd2705be1688585c248207004d28ada7a39b978439d367c00f95->leave($__internal_93545ffebd05fd2705be1688585c248207004d28ada7a39b978439d367c00f95_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/NouveauxUsersAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 70,  114 => 29,  107 => 27,  101 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  80 => 20,  74 => 19,  72 => 18,  64 => 17,  57 => 16,  49 => 15,  46 => 14,  44 => 13,  38 => 12,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 40 })) }}
  <div align=\"center\">
    </br>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
          <thead>
            <tr><th>Filieres</th><th>Matieres</th><th>Nombre de groupe</th><th>Heures/Groupe</th><th>Type enseignement (Coef)</th><th>Semestre</th></tr>
          </thead>
          <tbody>
            {% for r in Matieres %}\t\t\t\t
              {% if idAnnee  == r.filiere.anneeFiliere.id  %}
                <tr >
                  <td>{{ r.filiere.niveau }}&nbsp;{{ r.filiere.nom }}&nbsp;{{ r.filiere.anneeFiliere}}&nbsp;&nbsp; {% set i = 1 %}
                {% for user in r.filiere.User %}                
                  ({{ i }} - {{ user.nom }}  {{ user.prenom }}) 
                  {% set i = i +1  %}
                {% endfor %}
                  </td>
                  <td>{{ r. nom}}</td>
                  <td>{{ r.NombreGroupe}}</td>
                  <td>{{ r.nbrHeurGroupe}}</td>
                  <td>{{ r.TypeEnseignant.libelle}} &nbsp;({{ r.TypeEnseignant.coef}})</td>
                  <td>{{ r.semestre}}</td>\t\t\t\t\t
                </tr>
              {% endif %}\t
            {% endfor %}
          </tbody>
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
    {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/admin/NouveauxUsersAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\NouveauxUsersAdmin.html.twig");
    }
}
