<?php

/* @SRVDVServer/home/ListeUsers.html.twig */
class __TwigTemplate_e24d89c9d316c013eaac219c9d48a8becc041ecaebe28a48387e0fcec87fa9e4 extends Twig_Template
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
            $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "@SRVDVServer/home/ListeUsers.html.twig", 6)->display($context);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/home/ListeUsers.html.twig", 52)->display($context);
        // line 53
        echo "


";
    }

    public function getTemplateName()
    {
        return "@SRVDVServer/home/ListeUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 53,  116 => 52,  99 => 37,  89 => 32,  80 => 30,  76 => 29,  71 => 27,  66 => 25,  62 => 24,  51 => 18,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SRVDVServer/home/ListeUsers.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\home\\ListeUsers.html.twig");
    }
}
