<?php

/* SRVDVServerBundle:home:ListeUsers.html.twig */
class __TwigTemplate_4849232e8a86a0ada8b792ed3a3d55aba7db1ec6efe0d14301bc96b8e7279702 extends Twig_Template
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
        $__internal_8e3521b2dafa33098ca063b33a4d08c38627516077138c0db2bf15f49e822e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3521b2dafa33098ca063b33a4d08c38627516077138c0db2bf15f49e822e36->enter($__internal_8e3521b2dafa33098ca063b33a4d08c38627516077138c0db2bf15f49e822e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:ListeUsers.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "  
    ";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => "users")));
            echo "
  ";
        } else {
            // line 5
            echo "
    ";
            // line 6
            $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:home:ListeUsers.html.twig", 6)->display($context);
            // line 7
            echo "  ";
        }
        // line 8
        echo "

  ";
        // line 10
        $context["tempArray"] = array();
        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "   ";
            if (((isset($context["IdAnnee"]) ? $context["IdAnnee"] : $this->getContext($context, "IdAnnee")) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "Matiere", array()), "filiere", array()), "anneeFiliere", array()), "id", array()))) {
                // line 13
                echo "    ";
                if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "User", array()), "id", array())), array(), "array", true, true)) {
                    // line 14
                    echo "       ";
                    $context["value"] = ($this->getAttribute($context["item"], "nbHeur", array()) * $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "matiere", array()), "TypeEnseignant", array()), "coef", array()));
                    // line 15
                    echo "      ";
                    $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "User", array()), "id", array())) => ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "User", array()), "id", array())), array(), "array") + (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))));
                    // line 16
                    echo "    ";
                } else {
                    // line 17
                    echo "       ";
                    $context["value"] = ($this->getAttribute($context["item"], "nbHeur", array()) * $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "matiere", array()), "TypeEnseignant", array()), "coef", array()));
                    // line 18
                    echo "      ";
                    $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "User", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                    // line 19
                    echo "    ";
                }
                // line 20
                echo "  ";
            }
            // line 21
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
  </br>
  <div class=\"container\">

    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
        <thead>
          <tr><th>Nom</th><th>Prénom</th><th>Heures</th><th>Heures theo</th><th>Enseignant</th></tr>
        </thead>
        <tbody>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t



            <tr >

              <td>
                ";
            // line 39
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                echo "  
                  <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Liste_ReservationProf", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 42
                echo "                      ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
                echo "
                ";
            }
            // line 44
            echo "              </td>
              <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "prenom", array()), "html", null, true);
            echo "</td>
              <td>
                ";
            // line 47
            if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array", true, true)) {
                // line 48
                echo "                ";
                echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($context["r"], "id", array())), array(), "array")), "html", null, true);
                echo "
                ";
            }
            // line 50
            echo "              </td>
              <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nombreHeurTheo", array()), "html", null, true);
            echo "</td>

              <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t
            


            </tr>\t
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
      \$('#example').DataTable(
              );
    });

  </script>
  ";
        // line 74
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:home:ListeUsers.html.twig", 74)->display($context);
        // line 75
        echo "


";
        
        $__internal_8e3521b2dafa33098ca063b33a4d08c38627516077138c0db2bf15f49e822e36->leave($__internal_8e3521b2dafa33098ca063b33a4d08c38627516077138c0db2bf15f49e822e36_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:home:ListeUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 75,  180 => 74,  163 => 59,  151 => 53,  146 => 51,  143 => 50,  137 => 48,  135 => 47,  130 => 45,  127 => 44,  121 => 42,  114 => 40,  110 => 39,  98 => 32,  86 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
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
  {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}  
    {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 'users' })) }}
  {% else %}

    {% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}
  {% endif %}


  {% set tempArray = {} %}
  {% for item in Reserves %}
   {% if IdAnnee  == item.Matiere.filiere.anneeFiliere.id  %}
    {% if tempArray['_'~item.User.id] is defined %}
       {% set value = item.nbHeur*item.matiere.TypeEnseignant.coef %}
      {% set tempArray = tempArray|merge({('_'~item.User.id):(tempArray['_'~item.User.id]+value)}) %}
    {% else %}
       {% set value = item.nbHeur*item.matiere.TypeEnseignant.coef %}
      {% set tempArray = tempArray|merge({('_'~item.User.id):(item.nbHeur)}) %}
    {% endif %}
  {% endif %}
  {% endfor %}

  </br>
  <div class=\"container\">

    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
        <thead>
          <tr><th>Nom</th><th>Prénom</th><th>Heures</th><th>Heures theo</th><th>Enseignant</th></tr>
        </thead>
        <tbody>
          {% for r in users %}\t\t\t\t



            <tr >

              <td>
                {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}  
                  <a href=\"{{path('Liste_ReservationProf',{'id':r.id })}}\" >{{ r.nom }}</a>
                {% else %}
                      {{ r.nom }}
                {% endif %}
              </td>
              <td>{{ r.prenom }}</td>
              <td>
                {% if tempArray['_'~r.id] is defined %}
                {{ tempArray['_'~r.id] | round }}
                {% endif %}
              </td>
              <td>{{ r.nombreHeurTheo }}</td>

              <td>{{ r.type.libelle}}</td>\t\t\t\t\t\t\t\t
            


            </tr>\t
          {% endfor %}
        </tbody>
      </table> 

    </div>

  </div>

  <script type=\"text/javascript\" charset=\"utf-8\" >

    \$(document).ready(function () {
      \$('#example').DataTable(
              );
    });

  </script>
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}



", "SRVDVServerBundle:home:ListeUsers.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/home/ListeUsers.html.twig");
    }
}
