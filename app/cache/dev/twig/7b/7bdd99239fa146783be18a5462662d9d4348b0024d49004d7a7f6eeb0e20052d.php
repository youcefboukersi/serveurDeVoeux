<?php

/* SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig */
class __TwigTemplate_f9d1a873c3a75fe1fdffe5fc26b3cc80f269b99db1e72395d8cfa69740a225d3 extends Twig_Template
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
        $__internal_6ca500e66fe012d66eefabb6c9e6f7d58d28b5be970cb1266a453ba15edc576a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca500e66fe012d66eefabb6c9e6f7d58d28b5be970cb1266a453ba15edc576a->enter($__internal_6ca500e66fe012d66eefabb6c9e6f7d58d28b5be970cb1266a453ba15edc576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 40)));
        echo "
  
";
        // line 4
        if (((isset($context["supprimer"]) ? $context["supprimer"] : $this->getContext($context, "supprimer")) == 1)) {
            // line 5
            echo "        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer cette année. </br>!!
                  Des Réservations et des matières lui sont affiliées  
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      ";
        }
        // line 22
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Filieres"]) ? $context["Filieres"] : $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 33
            echo "              <tr>
                <td>
                  ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "anneeFiliere", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 1)) {
                // line 36
                echo "                    OUI
                  ";
            }
            // line 37
            echo " &nbsp;&nbsp;
                  ";
            // line 38
            if (($this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "etat", array()) == 0)) {
                // line 39
                echo "                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
                    &nbsp;&nbsp;
                    <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href = '";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($this->getAttribute($context["u"], "anneeFiliere", array()), "id", array()))), "html", null, true);
                echo "'\"
                            ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                        ";
            }
            // line 44
            echo "                </td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateFiliere", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 48
            $context["i"] = 1;
            // line 49
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["u"], "User", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo "                
                  ";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                echo "</br>
                  ";
                // line 51
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 52
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "              </td>
              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 57
            echo "              <tr>
                <td>
                  ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "annee", array()), "html", null, true);
            echo " &nbsp;&nbsp;";
            if (($this->getAttribute($context["f"], "etat", array()) == 1)) {
                // line 60
                echo "                    OUI
                  ";
            }
            // line 61
            echo " &nbsp;&nbsp;
                  ";
            // line 62
            if (($this->getAttribute($context["f"], "etat", array()) == 0)) {
                // line 63
                echo "                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_Annee_users", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></b></button>
                    &nbsp;&nbsp;
                    <button type=\"button\" class=\"btn btn-warning\"  onclick=\"window.location.href = '";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_generate_Annee", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
                echo "'\"
                            ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                        ";
            }
            // line 68
            echo "                </td>
                <td></td>
                <td></td>
                <td></td>
              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "          </tbody>
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
        // line 117
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig", 117)->display($context);
        
        $__internal_6ca500e66fe012d66eefabb6c9e6f7d58d28b5be970cb1266a453ba15edc576a->leave($__internal_6ca500e66fe012d66eefabb6c9e6f7d58d28b5be970cb1266a453ba15edc576a_prof);

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
        return array (  231 => 117,  186 => 74,  175 => 68,  169 => 65,  163 => 63,  161 => 62,  158 => 61,  154 => 60,  150 => 59,  146 => 57,  141 => 56,  133 => 53,  127 => 52,  125 => 51,  117 => 50,  110 => 49,  108 => 48,  103 => 46,  99 => 45,  96 => 44,  90 => 41,  84 => 39,  82 => 38,  79 => 37,  75 => 36,  71 => 35,  67 => 33,  63 => 32,  51 => 22,  32 => 5,  30 => 4,  25 => 2,  22 => 1,);
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
  
{% if supprimer == 1  %}
        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer cette année. </br>!!
                  Des Réservations et des matières lui sont affiliées  
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      {% endif %}

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
                <td>
                  {% set i = 1 %}
                {% for user in u.User %}                
                  {{ i }} - {{ user.nom }}  {{ user.prenom }}</br>
                  {% set i = i +1  %}
                {% endfor %}
              </td>
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
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:anneeSuivanteAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/anneeSuivanteAdmin.html.twig");
    }
}
