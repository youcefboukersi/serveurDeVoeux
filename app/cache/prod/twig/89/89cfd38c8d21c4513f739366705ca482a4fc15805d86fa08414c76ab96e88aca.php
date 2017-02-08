<?php

/* SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig */
class __TwigTemplate_7e2c38fc541aabf294c573a6894446f72cc618012546ac988c0867010ef5a06e extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 20)));
        echo "



  <div align=\"center\">

    </br>
    <h4 align=\"center\"> Réserver la matière suivant :  \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "nom", array()), "html", null, true);
        echo "  (";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "nbrHeurGroupe", array()) * $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "NombreGroupe", array())), "html", null, true);
        echo ") \" &nbsp;&nbsp; <button  type=\"button\" class=\"btn btn-info\" onclick=\"window.location.href = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_reservation_responsable", array("id" => $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "id", array()))), "html", null, true);
        echo "'\"><b ><span class=\"glyphicon glyphicon-backward\" aria-hidden=\"true\"></span>&nbsp;Retour</b></button></h4>
    </br>
    <div class=\"centreVerticalement\">\t  
      ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une réservation:</legend>
        <div class=\"form-group\">
          ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nbHeur", array()), 'label', array("label" => "Nombre d'heures  : "));
        echo "
\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nbHeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t </fieldset>
\t\t\t";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr><th colspan=\"20\">listes des réservations sur la filière \"<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_reservation_responsable", array("id" => $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "niveau", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "nom", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "anneeFiliere", array()), "html", null, true);
        echo "</a>\"</th></tr>
\t\t\t\t\t<tr><th>Date </th><th>Nombre d\\'heures </th><th>Utilisateur </th><th>Matiere</th><th>Type </th><th>Heures Total</th><th>Mod</th><th>Supp</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 40
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "filiere", array()), "id", array()))) {
                // line 41
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateInscription", array()), "Y-m-d"), "html", null, true);
                echo "</td>
          <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbHeur", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "prenom", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nom", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 48
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
                echo "</td>


          <td>

            ";
                // line 53
                if ((($this->getAttribute($this->getAttribute($context["u"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "filiere", array()), "user", array()), "id", array())))) {
                    // line 54
                    echo "
              <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_inscription", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                ";
                }
                // line 57
                echo "          </td>
          <td>
            ";
                // line 59
                if ((($this->getAttribute($this->getAttribute($context["u"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "filiere", array()), "user", array()), "id", array())))) {
                    // line 60
                    echo "              <button type=\"button\" class=\"btn btn-warning\"   data-toggle=\"modal\" data-target=\"#myModal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                    echo "\" ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>

            ";
                }
                // line 63
                echo "

            <div id=\"myModal";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\" role=\"dialog\">
              <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette réservation ?</h4>
                  </div>

                  <div class=\"modal-footer\">
                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supp_incription_responsable", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b >Delete ! </b></button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                  </div>
                </div>

              </div>
            </div>

          </td>
          </tr>
          ";
            }
            // line 86
            echo "\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "              </tbody>
              </table> 
            </div>
        </div>

      </div>




      <script>

        \$(document).ready(function () {
          \$('#example').DataTable(
                  {
                    \"order\": [[0, \"desc\"]]
                  }
          );
        });


      </script>
      ";
        // line 110
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig", 110)->display($context);
    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 110,  201 => 88,  194 => 86,  180 => 76,  166 => 65,  162 => 63,  155 => 60,  153 => 59,  149 => 57,  144 => 55,  141 => 54,  139 => 53,  131 => 48,  127 => 47,  123 => 46,  117 => 45,  113 => 44,  109 => 43,  105 => 41,  102 => 40,  98 => 39,  84 => 34,  73 => 26,  67 => 23,  63 => 22,  55 => 17,  51 => 16,  44 => 12,  32 => 9,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/ReserveEnseignant.html.twig");
    }
}
