<?php

/* SRVDVServerBundle:enseignant:ReserveMatiereEnseignant.html.twig */
class __TwigTemplate_d5c8760a6003f3e8f6fa3c39a3b6c5e1091af0d9bd61c5880ac0d4be273149fc extends Twig_Template
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
        $__internal_c2d1abec78fa12448db02b7d803c76bd31e05461b33bff35560f776276b51a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d1abec78fa12448db02b7d803c76bd31e05461b33bff35560f776276b51a2f->enter($__internal_c2d1abec78fa12448db02b7d803c76bd31e05461b33bff35560f776276b51a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:ReserveMatiereEnseignant.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "
      ";
            // line 14
            if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 15
                echo "        ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 16
                echo "      ";
            } else {
                // line 17
                echo "        ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "       

            ";
            // line 34
            if (((isset($context["idAnnee"]) ? $context["idAnnee"] : $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 35
                echo "
              ";
                // line 36
                if ( !$this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array", true, true)) {
                    // line 37
                    echo "                ";
                    $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($context["r"], "id", array())) => 0));
                    // line 38
                    echo "              ";
                }
                // line 39
                echo "
              ";
                // line 40
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") > ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 41
                    echo "                ";
                    $context["color21"] = "#FE2E2E";
                    echo "                     
              ";
                }
                // line 43
                echo "              ";
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") == ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
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
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") < ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
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
                echo twig_escape_filter($this->env, (isset($context["color21"]) ? $context["color21"] : $this->getContext($context, "color21")), "html", null, true);
                echo "\">
                <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "niveau", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "html", null, true);
                echo "&nbsp;&nbsp;

                  ";
                // line 55
                $context["i"] = 1;
                // line 56
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "User", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    echo "                
                  (";
                    // line 57
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                    echo ") 
                  ";
                    // line 58
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 59
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "

                </td>
                <td> ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "  </td>
                <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
                <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 66
                echo twig_escape_filter($this->env, ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())), "html", null, true);
                echo "</td>
                <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>                                   
                <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>
                <td><button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; select</b></button>
                </td>                               


              </tr>
            ";
            }
            // line 75
            echo " 
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        // line 126
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:enseignant:ReserveMatiereEnseignant.html.twig", 126)->display($context);
        
        $__internal_c2d1abec78fa12448db02b7d803c76bd31e05461b33bff35560f776276b51a2f->leave($__internal_c2d1abec78fa12448db02b7d803c76bd31e05461b33bff35560f776276b51a2f_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:enseignant:ReserveMatiereEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 126,  228 => 77,  221 => 75,  212 => 70,  208 => 69,  204 => 68,  200 => 67,  196 => 66,  192 => 65,  186 => 64,  182 => 63,  177 => 60,  171 => 59,  169 => 58,  161 => 57,  154 => 56,  152 => 55,  143 => 53,  139 => 52,  135 => 50,  129 => 48,  127 => 47,  124 => 46,  118 => 44,  115 => 43,  109 => 41,  107 => 40,  104 => 39,  101 => 38,  98 => 37,  96 => 36,  93 => 35,  91 => 34,  84 => 32,  72 => 22,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  42 => 12,  40 => 11,  33 => 7,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\" , { 'id': 20 })) }}

  <div class=\"container\">

    </br>
    <h4 align=\"center\"> Choisissez la matiére (COURS , TD ou TP ) que vous voulez réserver  &nbsp;&nbsp; <button  type=\"button\" class=\"btn btn-info\" onclick=\"window.location.href = '{{path('ChoixFiliereEns_enseignant') }}'\"><b ><span class=\"glyphicon glyphicon-backward\" aria-hidden=\"true\"></span>&nbsp;Retour</b></button></h4>



    {% set tempArray = {} %}
    {% for item in Reserves %}

      {% if tempArray['_'~item.Matiere.id] is defined %}
        {% set tempArray = tempArray|merge({('_'~item.Matiere.id):(tempArray['_'~item.Matiere.id]+item.nbHeur)}) %}
      {% else %}
        {% set tempArray = tempArray|merge({('_'~item.Matiere.id):(item.nbHeur)}) %}
      {% endif %}


    {% endfor %}


    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"99%\" >
        <thead>

          <tr><th>Filieres</th><th>Matieres</th><th>Type(Coef)</th><th>Somme des réservations</th><th>Total</th><th>Nombre de groupe</th><th>eures/Groupe</th><th>Semestre</th><th></th></tr>
        </thead>

        <tbody>
          {% for r in matieres %}       

            {% if idAnnee  == r.filiere.anneeFiliere.id   %}

              {% if tempArray['_'~r.id] is not defined %}
                {% set tempArray = tempArray|merge({('_'~r.id):0}) %}
              {% endif %}

              {% if tempArray['_'~r.id] >  (r.nbrHeurGroupe * r.NombreGroupe )%}
                {% set color21='#FE2E2E' %}                     
              {% endif %}
              {% if tempArray['_'~r.id] ==  (r.nbrHeurGroupe * r.NombreGroupe ) %}
                {% set color21='#58FA58' %}                     
              {% endif %}

              {% if tempArray['_'~r.id] <  (r.nbrHeurGroupe * r.NombreGroupe ) %}
                {% set color21='#F3F781' %}                     
              {% endif %}


              <tr style=\"background-color:{{color21}}\">
                <td>{{ r.filiere.niveau }}&nbsp;{{ r.filiere.nom }}&nbsp;{{ r.filiere.anneeFiliere}}&nbsp;&nbsp;

                  {% set i = 1 %}
                {% for user in r.filiere.User %}                
                  ({{ i }} - {{ user.nom }}  {{ user.prenom }}) 
                  {% set i = i +1  %}
                {% endfor %}


                </td>
                <td> {{ r. nom}}  </td>
                <td>{{ r.TypeEnseignant.libelle}} ({{ r.TypeEnseignant.coef}})</td>
                <td>{{ tempArray['_'~r.id]}}</td>
                <td>{{ r.nbrHeurGroupe * r.NombreGroupe  }}</td>
                <td>{{ r.NombreGroupe}}</td>
                <td>{{ r.nbrHeurGroupe}}</td>                                   
                <td>{{ r.semestre}}</td>
                <td><button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{path('list_form_inscription',{'id':r.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; select</b></button>
                </td>                               


              </tr>
            {% endif %} 
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

  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:enseignant:ReserveMatiereEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/ReserveMatiereEnseignant.html.twig");
    }
}
