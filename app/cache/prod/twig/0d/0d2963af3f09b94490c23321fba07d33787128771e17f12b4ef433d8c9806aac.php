<?php

/* SRVDVServerBundle:home:ListeUsers.html.twig */
class __TwigTemplate_6574a594af1e47fe9f5cbd42acf4261d55e8e4007295520855a3c5bdf4310eb3 extends Twig_Template
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
        $__internal_78d08f1c2089a3cdcceaf32a0e934921b5d700e809c40fddd4ba1dcea31d88bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d08f1c2089a3cdcceaf32a0e934921b5d700e809c40fddd4ba1dcea31d88bb->enter($__internal_78d08f1c2089a3cdcceaf32a0e934921b5d700e809c40fddd4ba1dcea31d88bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:ListeUsers.html.twig"));

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
  </br>
  <div class=\"container\">

    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
        <thead>
          <tr><th>Nom</th><th>Prénom</th><th>Enseignant</th><th>Roles</th></tr>
        </thead>
        <tbody>
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t



            <tr >

              <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "prenom", array()), "html", null, true);
            echo "</td>

              <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t
              <td>
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 30
                echo "                  ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "              </td>


            </tr>\t
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        // line 52
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:home:ListeUsers.html.twig", 52)->display($context);
        // line 53
        echo "


";
        
        $__internal_78d08f1c2089a3cdcceaf32a0e934921b5d700e809c40fddd4ba1dcea31d88bb->leave($__internal_78d08f1c2089a3cdcceaf32a0e934921b5d700e809c40fddd4ba1dcea31d88bb_prof);

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
        return array (  121 => 53,  119 => 52,  102 => 37,  92 => 32,  83 => 30,  79 => 29,  74 => 27,  69 => 25,  65 => 24,  54 => 18,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
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

  </br>
  <div class=\"container\">

    <div class=\"table-responsive\">
      <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
        <thead>
          <tr><th>Nom</th><th>Prénom</th><th>Enseignant</th><th>Roles</th></tr>
        </thead>
        <tbody>
          {% for r in users %}\t\t\t\t



            <tr >

              <td>{{ r.nom }}</td>
              <td>{{ r.prenom }}</td>

              <td>{{ r.type.libelle}}</td>\t\t\t\t\t\t\t\t
              <td>
                {% for role in r.roles %}
                  {{ role }}
                {% endfor %}
              </td>


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



", "SRVDVServerBundle:home:ListeUsers.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/home/ListeUsers.html.twig");
    }
}
