<?php

/* @SRVDVServer/responsable/EtatMatiereResponsable.html.twig */
class __TwigTemplate_2a6110c79f2d3d145d3ca5e7b407a148e79741bd48b707f116a8eba2447f2273 extends Twig_Template
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
        $__internal_ea52ce0f3ec6307ab08be3c72ce2ba442bcd07ecd117709a3876425ad4724546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea52ce0f3ec6307ab08be3c72ce2ba442bcd07ecd117709a3876425ad4724546->enter($__internal_ea52ce0f3ec6307ab08be3c72ce2ba442bcd07ecd117709a3876425ad4724546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/responsable/EtatMatiereResponsable.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 30)));
        echo "



    </br>
    <h4 align=\"center\"> Choisissez la matière (COURS , TD ou TP ) que vous voulez completer </h4>

    ";
        // line 9
        $context["tempArray"] = array();
        // line 10
        echo "    ";
        $context["ProfArray"] = array();
        // line 11
        echo "     ";
        $context["TotalArray"] = array();
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "      ";
            if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array", true, true)) {
                // line 14
                echo "      
        ";
                // line 15
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 16
                echo "      ";
            } else {
                // line 17
                echo "        ";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                // line 18
                echo "        
      ";
            }
            // line 20
            echo "
      ";
            // line 21
            $context["heur"] = ($this->getAttribute($context["item"], "nbHeur", array()) * $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "TypeEnseignant", array()), "coef", array()));
            // line 22
            echo "
      ";
            // line 23
            if ($this->getAttribute((isset($context["ProfArray"]) ? $context["ProfArray"] : null), ("_" . $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "Filiere", array()), "id", array())), array(), "array", true, true)) {
                // line 24
                echo "      
        ";
                // line 25
                $context["ProfArray"] = twig_array_merge((isset($context["ProfArray"]) ? $context["ProfArray"] : $this->getContext($context, "ProfArray")), array(("_" . $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "Filiere", array()), "id", array())) => ($this->getAttribute((isset($context["ProfArray"]) ? $context["ProfArray"] : $this->getContext($context, "ProfArray")), ("_" . $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "Filiere", array()), "id", array())), array(), "array") + (isset($context["heur"]) ? $context["heur"] : $this->getContext($context, "heur")))));
                // line 26
                echo "      ";
            } else {
                // line 27
                echo "        ";
                $context["ProfArray"] = twig_array_merge((isset($context["ProfArray"]) ? $context["ProfArray"] : $this->getContext($context, "ProfArray")), array(("_" . $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "Filiere", array()), "id", array())) => (isset($context["heur"]) ? $context["heur"] : $this->getContext($context, "heur"))));
                // line 28
                echo "        
      ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            echo " 
       ";
            // line 33
            $context["heurT"] = (($this->getAttribute($context["matiere"], "NombreGroupe", array()) * $this->getAttribute($this->getAttribute($context["matiere"], "TypeEnseignant", array()), "coef", array())) * $this->getAttribute($context["matiere"], "nbrHeurGroupe", array()));
            // line 34
            echo "    ";
            if ($this->getAttribute((isset($context["TotalArray"]) ? $context["TotalArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["matiere"], "Filiere", array()), "id", array())), array(), "array", true, true)) {
                echo "    
      
        ";
                // line 36
                $context["TotalArray"] = twig_array_merge((isset($context["TotalArray"]) ? $context["TotalArray"] : $this->getContext($context, "TotalArray")), array(("_" . $this->getAttribute($this->getAttribute($context["matiere"], "Filiere", array()), "id", array())) => ($this->getAttribute((isset($context["TotalArray"]) ? $context["TotalArray"] : $this->getContext($context, "TotalArray")), ("_" . $this->getAttribute($this->getAttribute($context["matiere"], "Filiere", array()), "id", array())), array(), "array") + (isset($context["heurT"]) ? $context["heurT"] : $this->getContext($context, "heurT")))));
                // line 37
                echo "          ";
            } else {
                // line 38
                echo "        ";
                $context["TotalArray"] = twig_array_merge((isset($context["TotalArray"]) ? $context["TotalArray"] : $this->getContext($context, "TotalArray")), array(("_" . $this->getAttribute($this->getAttribute($context["matiere"], "Filiere", array()), "id", array())) => (isset($context["heurT"]) ? $context["heurT"] : $this->getContext($context, "heurT"))));
                // line 39
                echo "        
      ";
            }
            // line 41
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"99%\" >
        <thead>
          <tr><th>Filieres</th><th>Matières</th><th>Type(Coef)</th><th>Profs</th><th>Heures réservées</th><th>Total</th><th>Nombre de groupe</th><th>Heures/Groupes</th><th>Semestre</th><th></th></tr>
        </thead>

        <tbody>
          ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t

                 ";
            // line 52
            $context["access"] = 0;
            echo " 
                          ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["r"], "Filiere", array()), "user", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo "  
                          ";
                // line 54
                if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array())) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
                    // line 55
                    echo "                            ";
                    $context["access"] = 1;
                    echo "            
                          
                          ";
                }
                // line 57
                echo " 
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t

            ";
            // line 60
            if ((((isset($context["idAnnee"]) ? $context["idAnnee"] : $this->getContext($context, "idAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "id", array())) && ((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")) == 1))) {
                // line 61
                echo "
              ";
                // line 62
                if ( !$this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array", true, true)) {
                    // line 63
                    echo "                ";
                    $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($context["r"], "id", array())) => 0));
                    // line 64
                    echo "              ";
                }
                // line 65
                echo "              ";
                if ( !$this->getAttribute((isset($context["ProfArray"]) ? $context["ProfArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "id", array())), array(), "array", true, true)) {
                    // line 66
                    echo "                ";
                    $context["ProfArray"] = twig_array_merge((isset($context["ProfArray"]) ? $context["ProfArray"] : $this->getContext($context, "ProfArray")), array(("_" . $this->getAttribute($this->getAttribute($context["r"], "Filiere", array()), "id", array())) => 0));
                    // line 67
                    echo "              ";
                }
                // line 68
                echo "
             
              ";
                // line 70
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") > ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 71
                    echo "                ";
                    $context["color21"] = "#FE2E2E";
                    echo "\t\t\t\t\t\t
              ";
                }
                // line 73
                echo "              ";
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") == ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 74
                    echo "                ";
                    $context["color21"] = "#58FA58";
                    echo "\t\t\t\t\t\t
              ";
                }
                // line 76
                echo "
              ";
                // line 77
                if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array") < ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())))) {
                    // line 78
                    echo "                ";
                    $context["color21"] = "#F3F781";
                    echo "\t\t\t\t\t\t
              ";
                }
                // line 80
                echo "

              <tr style=\"background-color:";
                // line 82
                echo twig_escape_filter($this->env, (isset($context["color21"]) ? $context["color21"] : $this->getContext($context, "color21")), "html", null, true);
                echo "\">
                
                <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "niveau", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "anneeFiliere", array()), "html", null, true);
                echo "&nbsp;&nbsp;";
                $context["i"] = 1;
                // line 85
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "User", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    echo "                
                  (";
                    // line 86
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                    echo ") 
                  ";
                    // line 87
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 88
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                [  res : ";
                echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["ProfArray"]) ? $context["ProfArray"] : $this->getContext($context, "ProfArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "id", array())), array(), "array")), "html", null, true);
                echo " H / total:";
                echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["TotalArray"]) ? $context["TotalArray"] : $this->getContext($context, "TotalArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "filiere", array()), "id", array())), array(), "array")), "html", null, true);
                echo "H  ]
                </td>
                <td>  ";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "  </td>
                <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo " &nbsp;(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "TypeEnseignant", array()), "coef", array()), "html", null, true);
                echo ")</td>
                <td>

                    
                    ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    echo "  
                     ";
                    // line 97
                    if (($this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "id", array()) == $this->getAttribute($context["r"], "id", array()))) {
                        echo "     
                      ";
                        // line 98
                        echo twig_escape_filter($this->env, ((((($this->getAttribute($this->getAttribute($context["item"], "User", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["item"], "User", array()), "prenom", array())) . "(") . $this->getAttribute($context["item"], "nbHeur", array())) . ")"), "html", null, true);
                        echo "</br>
                      ";
                    }
                    // line 100
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "



                </td>
                <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array")), "html", null, true);
                echo "
                    
                </td>
                <td>";
                // line 109
                echo twig_escape_filter($this->env, ($this->getAttribute($context["r"], "nbrHeurGroupe", array()) * $this->getAttribute($context["r"], "NombreGroupe", array())), "html", null, true);
                echo "</td>
                <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t\t
                <td>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "semestre", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t
                <td> 
                  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription_matieres_etat", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Select</b></button>
                  
                </td>

              </tr>
            ";
            }
            // line 119
            echo "\t
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </tbody>
      </table> 
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
        // line 164
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/responsable/EtatMatiereResponsable.html.twig", 164)->display($context);
        
        $__internal_ea52ce0f3ec6307ab08be3c72ce2ba442bcd07ecd117709a3876425ad4724546->leave($__internal_ea52ce0f3ec6307ab08be3c72ce2ba442bcd07ecd117709a3876425ad4724546_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/responsable/EtatMatiereResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 164,  361 => 121,  354 => 119,  345 => 114,  340 => 112,  336 => 111,  332 => 110,  328 => 109,  322 => 106,  315 => 101,  309 => 100,  304 => 98,  300 => 97,  294 => 96,  285 => 92,  281 => 91,  273 => 89,  267 => 88,  265 => 87,  257 => 86,  250 => 85,  242 => 84,  237 => 82,  233 => 80,  227 => 78,  225 => 77,  222 => 76,  216 => 74,  213 => 73,  207 => 71,  205 => 70,  201 => 68,  198 => 67,  195 => 66,  192 => 65,  189 => 64,  186 => 63,  184 => 62,  181 => 61,  179 => 60,  175 => 58,  168 => 57,  161 => 55,  159 => 54,  153 => 53,  149 => 52,  142 => 50,  132 => 42,  126 => 41,  122 => 39,  119 => 38,  116 => 37,  114 => 36,  108 => 34,  106 => 33,  100 => 32,  97 => 31,  91 => 30,  87 => 28,  84 => 27,  81 => 26,  79 => 25,  76 => 24,  74 => 23,  71 => 22,  69 => 21,  66 => 20,  62 => 18,  59 => 17,  56 => 16,  54 => 15,  51 => 14,  48 => 13,  43 => 12,  40 => 11,  37 => 10,  35 => 9,  25 => 2,  22 => 1,);
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



    </br>
    <h4 align=\"center\"> Choisissez la matière (COURS , TD ou TP ) que vous voulez completer </h4>

    {% set tempArray = {} %}
    {% set ProfArray = {} %}
     {% set TotalArray = {} %}
    {% for item in Reserves %}
      {% if tempArray['_'~item.Matiere.id] is defined %}
      
        {% set tempArray = tempArray|merge({('_'~item.Matiere.id):(tempArray['_'~item.Matiere.id]+item.nbHeur)}) %}
      {% else %}
        {% set tempArray = tempArray|merge({('_'~item.Matiere.id):(item.nbHeur)}) %}
        
      {% endif %}

      {% set heur = item.nbHeur*item.Matiere.TypeEnseignant.coef  %}

      {% if ProfArray['_'~item.Matiere.Filiere.id] is defined %}
      
        {% set ProfArray = ProfArray|merge({('_'~item.Matiere.Filiere.id):(ProfArray['_'~item.Matiere.Filiere.id]+heur )}) %}
      {% else %}
        {% set ProfArray = ProfArray|merge({('_'~item.Matiere.Filiere.id):(heur )}) %}
        
      {% endif %}
    {% endfor %}

    {% for matiere in matieres %} 
       {% set heurT = matiere.NombreGroupe*matiere.TypeEnseignant.coef*matiere.nbrHeurGroupe  %}
    {% if TotalArray['_'~matiere.Filiere.id] is defined %}    
      
        {% set TotalArray = TotalArray|merge({('_'~matiere.Filiere.id):(TotalArray['_'~matiere.Filiere.id] + heurT )}) %}
          {% else %}
        {% set TotalArray = TotalArray|merge({('_'~matiere.Filiere.id):( heurT )}) %}
        
      {% endif %}
    {% endfor %}

    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"99%\" >
        <thead>
          <tr><th>Filieres</th><th>Matières</th><th>Type(Coef)</th><th>Profs</th><th>Heures réservées</th><th>Total</th><th>Nombre de groupe</th><th>Heures/Groupes</th><th>Semestre</th><th></th></tr>
        </thead>

        <tbody>
          {% for r in matieres %}\t

                 {% set access = 0 %} 
                          {% for user in r.Filiere.user %}  
                          {% if app.user.id  == user.id or app.user.roles[0]== 'ROLE_ADMIN'  %}
                            {% set access = 1 %}            
                          
                          {% endif %} 
                       {% endfor %}\t

            {% if idAnnee  == r.filiere.anneeFiliere.id and access == 1  %}

              {% if tempArray['_'~r.id] is not defined %}
                {% set tempArray = tempArray|merge({('_'~r.id):0}) %}
              {% endif %}
              {% if ProfArray['_'~r.filiere.id] is not defined %}
                {% set ProfArray = ProfArray|merge({('_'~r.Filiere.id):0}) %}
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
                
                <td>{{ r.filiere.niveau }}&nbsp;{{ r.filiere.nom }}&nbsp;{{ r.filiere.anneeFiliere}}&nbsp;&nbsp;{% set i = 1 %}
                {% for user in r.filiere.User %}                
                  ({{ i }} - {{ user.nom }}  {{ user.prenom }}) 
                  {% set i = i +1  %}
                {% endfor %}
                [  res : {{   ProfArray['_'~r.filiere.id] |round}} H / total:{{ TotalArray['_'~r.filiere.id] |round}}H  ]
                </td>
                <td>  {{ r. nom}}  </td>
                <td>{{ r.TypeEnseignant.libelle}} &nbsp;({{ r.TypeEnseignant.coef}})</td>
                <td>

                    
                    {% for item in Reserves %}  
                     {% if item.Matiere.id == r.id   %}     
                      {{item.User.nom~' '~item.User.prenom~'('~item.nbHeur~')'  }}</br>
                      {% endif %}
                    {% endfor %}




                </td>
                <td>{{ tempArray['_'~r.id] |round}}
                    
                </td>
                <td>{{ r.nbrHeurGroupe * r.NombreGroupe  }}</td>
                <td>{{ r.NombreGroupe}}</td>
                <td>{{ r.nbrHeurGroupe}}</td>\t\t\t\t\t\t\t\t\t
                <td>{{ r.semestre}}</td>\t\t\t\t\t\t\t\t
                <td> 
                  <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{path('list_form_inscription_matieres_etat',{'id':r.id}) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Select</b></button>
                  
                </td>

              </tr>
            {% endif %}\t
          {% endfor %}
        </tbody>
      </table> 
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

  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/responsable/EtatMatiereResponsable.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\responsable\\EtatMatiereResponsable.html.twig");
    }
}
