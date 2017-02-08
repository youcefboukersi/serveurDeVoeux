<?php

/* SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig */
class __TwigTemplate_e80d84bd57a4b5145c8456e17cb948f22d99791dd75e6c13275ff4d6ccca4d31 extends Twig_Template
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
        $__internal_a4c45874986d4dc8444afa82d8dc446ecf0e7b3581f4836ac3bce10052cbe865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c45874986d4dc8444afa82d8dc446ecf0e7b3581f4836ac3bce10052cbe865->enter($__internal_a4c45874986d4dc8444afa82d8dc446ecf0e7b3581f4836ac3bce10052cbe865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig"));

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
            <tr><th>#</th><th>Dates</th><th>Noms</th><th>Responsables</th></tr>
          </thead>
          <tbody>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Filieres"]) ? $context["Filieres"] : $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 13
            echo "              <tr>
                <td>
                  ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "anneeFiliere", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 1)) {
                // line 16
                echo "                    OUI
                  ";
            }
            // line 17
            echo " &nbsp;&nbsp;
                  ";
            // line 18
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 0)) {
                // line 19
                echo "                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
                    &nbsp;&nbsp;
                    <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href = '";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"
                            ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                        ";
            }
            // line 24
            echo "                </td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateFiliere", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
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
        // line 32
        echo "
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 34
            echo "              <tr>

                <td>
                  ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "annee", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($context["f"], "etat", array()) == 1)) {
                // line 38
                echo "                    OUI
                  ";
            }
            // line 39
            echo " &nbsp;&nbsp;
                  ";
            // line 40
            if (($this->getAttribute($context["f"], "etat", array()) == 0)) {
                // line 41
                echo "                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
                    &nbsp;&nbsp;
                    <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href = '";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"
                            ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                        ";
            }
            // line 46
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
        // line 53
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
        // line 101
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig", 101)->display($context);
        
        $__internal_a4c45874986d4dc8444afa82d8dc446ecf0e7b3581f4836ac3bce10052cbe865->leave($__internal_a4c45874986d4dc8444afa82d8dc446ecf0e7b3581f4836ac3bce10052cbe865_prof);

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
        return array (  194 => 101,  144 => 53,  132 => 46,  126 => 43,  120 => 41,  118 => 40,  115 => 39,  111 => 38,  107 => 37,  102 => 34,  98 => 33,  95 => 32,  82 => 27,  78 => 26,  74 => 25,  71 => 24,  65 => 21,  59 => 19,  57 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 13,  38 => 12,  25 => 2,  22 => 1,);
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
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>#</th><th>Dates</th><th>Noms</th><th>Responsables</th></tr>
          </thead>
          <tbody>
            {% for u in Filieres %}
              <tr>
                <td>
                  {{ u.anneeFiliere }} &nbsp;&nbsp;{% if u.anneeFiliere.etat == 1 %}
                    OUI
                  {% endif %} &nbsp;&nbsp;
                  {% if u.anneeFiliere.etat == 0 %}
                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{path('generate_Annee_users',{'id':u.anneeFiliere.id }) }}'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
                    &nbsp;&nbsp;
                    <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href = '{{path('supprimer_generate_Annee',{'id': u.anneeFiliere.id }) }}'\"
                            ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                        {% endif %}
                </td>
                <td>{{ u.dateFiliere|date('d/m/Y') }}</td>
                <td>{{ u.nom }}</td>
                <td>{{ u.User.nom }}&nbsp;{{ u.user.prenom }}</td>


              </tr>\t
            {% endfor %}

            {% for f in Annees %}
              <tr>

                <td>
                  {{ f.annee }} &nbsp;&nbsp;{% if f.etat == 1 %}
                    OUI
                  {% endif %} &nbsp;&nbsp;
                  {% if f.etat == 0 %}
                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{path('generate_Annee_users',{'id':f.id }) }}'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
                    &nbsp;&nbsp;
                    <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href = '{{path('supprimer_generate_Annee',{'id': f.id }) }}'\"
                            ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                        {% endif %}

                </td>
                <td></td>
                <td></td>
                <td></td>
              </tr>\t
            {% endfor %}

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
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/anneeSuivanteAdmin.html.twig");
    }
}
