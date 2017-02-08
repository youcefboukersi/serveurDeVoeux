<?php

/* SRVDVServerBundle:responsable:CompleterMatiere.html.twig */
class __TwigTemplate_69611b16457d0de22b25e197d329247bcee876b58a74c53619955c210088231d extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 30)));
        echo "




  <div align=\"center\">
    </br>
    <h4 align=\"center\"> Completer la matière suivant :  \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "nom", array()), "html", null, true);
        echo "  (";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "nbrHeurGroupe", array()) * $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "NombreGroupe", array())), "html", null, true);
        echo ") \" &nbsp;&nbsp; <button  type=\"button\" class=\"btn btn-info\" onclick=\"window.location.href = '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_matieres_responsable");
        echo "'\"><b ><span class=\"glyphicon glyphicon-backward\" aria-hidden=\"true\"></span>&nbsp;Retour</b></button></h4>

    </br>
    <div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
      ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une réservation:</legend>


        <div class=\"form-group\">
          ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nbHeur", array()), 'label', array("label" => "Nombre d'heures  : "));
        echo "
\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nbHeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t </fieldset>
\t\t\t";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr><th colspan=\"20\">listes des réservations sur la matière \"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
        echo "- ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "nom", array()), "html", null, true);
        echo "   (";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "nbrHeurGroupe", array()) * $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : null), "NombreGroupe", array())), "html", null, true);
        echo ")\"</th></tr>
\t\t\t\t\t<tr><th>#</th><th>Date </th><th>Nombre d'heures </th><th>Utilisateur </th><th>Matiere</th><th>Type </th><th>Heures Total</th><th>Mod</th><th>Supp</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 44
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateInscription", array()), "Y-m-d"), "html", null, true);
            echo "</td>
          <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbHeur", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 52
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
            echo "</td>


          <td>

            <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_inscription_matieres_etat", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>

          </td>
          <td>

            <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\" ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>



            <div id=\"myModal";
            // line 66
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
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_matiere_inscription", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </tbody>
            </table> 
          </div>
      </div>

    </div>
    <script>

      \$(document).ready(function () {
        \$('#example').DataTable();
      });


    </script>


    ";
        // line 105
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:CompleterMatiere.html.twig", 105)->display($context);
    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:CompleterMatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 105,  189 => 89,  171 => 77,  157 => 66,  150 => 62,  142 => 57,  134 => 52,  130 => 51,  126 => 50,  120 => 49,  116 => 48,  112 => 47,  108 => 46,  104 => 44,  100 => 43,  88 => 38,  77 => 30,  70 => 26,  66 => 25,  59 => 21,  55 => 20,  45 => 13,  32 => 9,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:responsable:CompleterMatiere.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/responsable/CompleterMatiere.html.twig");
    }
}
