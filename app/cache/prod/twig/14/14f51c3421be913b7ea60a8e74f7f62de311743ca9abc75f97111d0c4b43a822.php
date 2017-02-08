<?php

/* SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig */
class __TwigTemplate_9d71fb6a2e1d67903aff970aca7f0a8406257543c5c577079a2da5ec23e21e10 extends Twig_Template
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
        $__internal_0db38610a4e916dbcd9c6567c7f97ab71aebb8d4f093255e437103caa8b7ca6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db38610a4e916dbcd9c6567c7f97ab71aebb8d4f093255e437103caa8b7ca6b->enter($__internal_0db38610a4e916dbcd9c6567c7f97ab71aebb8d4f093255e437103caa8b7ca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 30)));
        echo "


  <div class=\"container\">

    </br>
    <h4 align=\"center\"> Choisissez la matiére (COURS , TD ou TP ) que vous voulez completer </h4>

    ";
        // line 10
        $context["tempArray"] = array();
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "      ";
            if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 13
                echo "        ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 14
                echo "      ";
            } else {
                // line 15
                echo "        ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                // line 16
                echo "      ";
            }
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"99%\" >
        <thead>
          <tr><th>Filieres</th><th>Matières</th><th>Enseignements(Coef)</th><th>Heures réservées</th><th>Total</th><th>Nombre de groupe</th><th>Heures/Groupes</th><th>Semestre</th><th></th></tr>
        </thead>

        <tbody>
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t
            ";
            // line 27
            if ((((isset($context["idAnnee"]) ? $context["idAnnee"] : $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "User", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 28
                echo "              ";
                if ( !$this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array", true, true)) {
                    // line 29
                    echo "                ";
                    $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($context["r"], "id", array())) => 0));
                    // line 30
                    echo "              ";
                }
                // line 31
                echo "              ";
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") > ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 32
                    echo "                ";
                    $context["color21"] = "#FE2E2E";
                    echo "\t\t\t\t\t\t
              ";
                }
                // line 34
                echo "              ";
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") == ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 35
                    echo "                ";
                    $context["color21"] = "#58FA58";
                    echo "\t\t\t\t\t\t
              ";
                }
                // line 37
                echo "
              ";
                // line 38
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") < ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 39
                    echo "                ";
                    $context["color21"] = "#F3F781";
                    echo "\t\t\t\t\t\t
              ";
                }
                // line 41
                echo "

              <tr style=\"background-color:";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["color21"]) ? $context["color21"] : $this->getContext($context, "color21")), "html", null, true);
                echo "\">
                
                <td>";
                // line 45
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
                <td>  ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "  </td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " &nbsp;(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array"), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t\t
                <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t
                <td><button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription_matieres_etat", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Select</b></button></td>

              </tr>
            ";
            }
            // line 57
            echo "\t
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        // line 102
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig", 102)->display($context);
        
        $__internal_0db38610a4e916dbcd9c6567c7f97ab71aebb8d4f093255e437103caa8b7ca6b->leave($__internal_0db38610a4e916dbcd9c6567c7f97ab71aebb8d4f093255e437103caa8b7ca6b_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 102,  186 => 59,  179 => 57,  172 => 54,  168 => 53,  164 => 52,  160 => 51,  156 => 50,  152 => 49,  146 => 48,  142 => 47,  129 => 45,  124 => 43,  120 => 41,  114 => 39,  112 => 38,  109 => 37,  103 => 35,  100 => 34,  94 => 32,  91 => 31,  88 => 30,  85 => 29,  82 => 28,  80 => 27,  74 => 26,  64 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  38 => 11,  36 => 10,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\" , { 'id': 30 })) }}


  <div class=\"container\">

    </br>
    <h4 align=\"center\"> Choisissez la matiére (COURS , TD ou TP ) que vous voulez completer </h4>

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
          <tr><th>Filieres</th><th>Matières</th><th>Enseignements(Coef)</th><th>Heures réservées</th><th>Total</th><th>Nombre de groupe</th><th>Heures/Groupes</th><th>Semestre</th><th></th></tr>
        </thead>

        <tbody>
          {% for r in matieres %}\t\t
            {% if idAnnee  == r.filiere.anneeFiliere.id and r.filiere.User.id == app.user.id  %}
              {% if tempArray['_'~r.id] is not defined %}
                {% set tempArray = tempArray|merge({('_'~r.id):0}) %}
              {% endif %}
              {% if tempArray['_'~r.id] >  (r.nbrHeurGroupe * r.NombreGroupe )%}
                {% set color21='#FE2E2E' %}\t\t\t\t\t\t
              {% endif %}
              {% if tempArray['_'~r.id] ==  (r.nbrHeurGroupe * r.NombreGroupe ) %}
                {% set color21='#58FA58' %}\t\t\t\t\t\t
              {% endif %}

              {% if tempArray['_'~r.id] <  (r.nbrHeurGroupe * r.NombreGroupe ) %}
                {% set color21='#F3F781' %}\t\t\t\t\t\t
              {% endif %}


              <tr style=\"background-color:{{color21}}\">
                
                <td>{{ r.filiere.niveau }}&nbsp;{{ r.filiere.nom }}&nbsp;{{ r.filiere.anneeFiliere}}&nbsp;&nbsp;({{ r.filiere.User.nom}}&nbsp;{{ r.filiere.User.prenom}})
                </td>
                <td>  {{ r. nom}}  </td>
                <td>{{ r.TypeEnseignant.libelle}} &nbsp;({{ r.TypeEnseignant.coef}})</td>
                <td>{{ tempArray['_'~r.id]}}</td>
                <td>{{ r.nbrHeurGroupe * r.NombreGroupe  }}</td>
                <td>{{ r.NombreGroupe}}</td>
                <td>{{ r.nbrHeurGroupe}}</td>\t\t\t\t\t\t\t\t\t
                <td>{{ r.semestre}}</td>\t\t\t\t\t\t\t\t
                <td><button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{path('list_form_inscription_matieres_etat',{'id':r.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Select</b></button></td>

              </tr>
            {% endif %}\t
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

  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:responsable:EtatMatiereResponsable.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/responsable/EtatMatiereResponsable.html.twig");
    }
}
