<?php

/* @SRVDVServer/enseignant/ChoixFiliereEnseignant.html.twig */
class __TwigTemplate_c1db8969d70af12796a0df4543e4ab277607574e95a585804795133917db4caa extends Twig_Template
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
        $__internal_aeb0f962c7d934ffedd36ac0bf1488ce227a37464ff0b930e6b6aaec014d3acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb0f962c7d934ffedd36ac0bf1488ce227a37464ff0b930e6b6aaec014d3acb->enter($__internal_aeb0f962c7d934ffedd36ac0bf1488ce227a37464ff0b930e6b6aaec014d3acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/enseignant/ChoixFiliereEnseignant.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 20)));
        echo "
  <div class=\"container\">
    </br>
    <h4 align=\"center\"> Choisissez une filière :  </h4>
    </br>
     <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
        <thead>
          <tr>
            <th>Date de création </th>
            <th>Nom</th>
            <th>Responsables</th>
            <th>Année</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Filieres"]) ? $context["Filieres"] : $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 21
            echo "            <tr>

              <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "dateFiliere", array()), "Y-m-d"), "html", null, true);
            echo "</td>
              <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "niveau", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nom", array()), "html", null, true);
            echo "</td>

              <td>
                  ";
            // line 27
            $context["i"] = 1;
            // line 28
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f"], "User", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 29
                echo "                
                  ";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                echo " </br>";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </td>
              <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "anneeFiliere", array()), "html", null, true);
            echo "</td>
              <td>

                <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_reservation_responsable", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Select</b></button>

              </td>
            </tr>\t
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
      </table> 
    </div>
  </div>
  <script>

    \$(document).ready(function () {
      \$('#example').DataTable();
    });


  </script>

  ";
        // line 54
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/enseignant/ChoixFiliereEnseignant.html.twig", 54)->display($context);
        // line 55
        echo "
";
        
        $__internal_aeb0f962c7d934ffedd36ac0bf1488ce227a37464ff0b930e6b6aaec014d3acb->leave($__internal_aeb0f962c7d934ffedd36ac0bf1488ce227a37464ff0b930e6b6aaec014d3acb_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/enseignant/ChoixFiliereEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 55,  125 => 54,  110 => 41,  99 => 36,  93 => 33,  90 => 32,  84 => 31,  76 => 30,  73 => 29,  68 => 28,  66 => 27,  58 => 24,  54 => 23,  50 => 21,  46 => 20,  25 => 2,  22 => 1,);
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
    <h4 align=\"center\"> Choisissez une filière :  </h4>
    </br>
     <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
        <thead>
          <tr>
            <th>Date de création </th>
            <th>Nom</th>
            <th>Responsables</th>
            <th>Année</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          {% for f in Filieres %}
            <tr>

              <td>{{ f.dateFiliere | date('Y-m-d') }}</td>
              <td>{{ f.niveau }}&nbsp;{{ f.nom }}</td>

              <td>
                  {% set i = 1 %}
                {% for user in f.User %}
                
                  {{ i }} - {{ user.nom }}  {{ user.prenom }} </br>{% set i = i +1  %}
                {% endfor %}
                </td>
              <td>{{ f.anneeFiliere}}</td>
              <td>

                <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{path('Etat_reservation_responsable',{'id':f.id }) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Select</b></button>

              </td>
            </tr>\t
          {% endfor %}
        </tbody>
      </table> 
    </div>
  </div>
  <script>

    \$(document).ready(function () {
      \$('#example').DataTable();
    });


  </script>

  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}

", "@SRVDVServer/enseignant/ChoixFiliereEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\enseignant\\ChoixFiliereEnseignant.html.twig");
    }
}
