<?php

/* @SRVDVServer/responsable/CompleterMatiere.html.twig */
class __TwigTemplate_b10e6e8faed4d9b5abb6c341a0da9c864829eccd82285a80af7c2ba2231be3d5 extends Twig_Template
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
        $__internal_2b9c036f57c8ddb077bc80f391bb8d6f10b35b1d835d8a2d2171867ed5299808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9c036f57c8ddb077bc80f391bb8d6f10b35b1d835d8a2d2171867ed5299808->enter($__internal_2b9c036f57c8ddb077bc80f391bb8d6f10b35b1d835d8a2d2171867ed5299808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/responsable/CompleterMatiere.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 30)));
        echo "




  <div align=\"center\">
    </br>
    <h4 align=\"center\"> Compléter la matière suivant :  \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nom", array()), "html", null, true);
        echo "  (";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nbrHeurGroupe", array()) * $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "NombreGroupe", array())), "html", null, true);
        echo ") \" &nbsp;&nbsp; <button  type=\"button\" class=\"btn btn-info\" onclick=\"window.location.href = '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_matieres_responsable");
        echo "'\"><b ><span class=\"glyphicon glyphicon-backward\" aria-hidden=\"true\"></span>&nbsp;Retour</b></button></h4>

    </br>
    <div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
      ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une réservation:</legend>


        <div class=\"form-group\">
          ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbHeur", array()), 'label', array("label" => "Nombre d'heures  : "));
        echo "
\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbHeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>\t
          <div class=\"form-group\">
          ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "User", array()), 'label', array("label" => "Ensiegnant  : "));
        echo "
          ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "User", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>  \t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t </fieldset>
\t\t\t";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr><th colspan=\"20\">Listes des réservations de la matière \"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
        echo "- ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nom", array()), "html", null, true);
        echo "   (";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nbrHeurGroupe", array()) * $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "NombreGroupe", array())), "html", null, true);
        echo ")\"</th></tr>
\t\t\t\t\t<tr><th>Date </th><th>Nombre d'heures </th><th>Utilisateurs </th><th>Matieres</th><th>Types </th><th>Heures Total</th><th>Modifier</th><th>Supprimer</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 48
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
          <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateInscription", array()), "Y-m-d"), "html", null, true);
            echo "</td>
          <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbHeur", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 56
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
            echo "</td>


          <td>
            <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_inscription_matieres_etat", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
          </td>
          <td>

            <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\" ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>



            <div id=\"myModal";
            // line 68
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
            // line 79
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
        // line 88
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
        // line 103
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/responsable/CompleterMatiere.html.twig", 103)->display($context);
        
        $__internal_2b9c036f57c8ddb077bc80f391bb8d6f10b35b1d835d8a2d2171867ed5299808->leave($__internal_2b9c036f57c8ddb077bc80f391bb8d6f10b35b1d835d8a2d2171867ed5299808_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/responsable/CompleterMatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 103,  194 => 88,  179 => 79,  165 => 68,  158 => 64,  151 => 60,  144 => 56,  140 => 55,  136 => 54,  130 => 53,  126 => 52,  122 => 51,  117 => 48,  113 => 47,  101 => 42,  90 => 34,  83 => 30,  79 => 29,  72 => 25,  68 => 24,  62 => 21,  58 => 20,  48 => 13,  35 => 9,  25 => 2,  22 => 1,);
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




  <div align=\"center\">
    </br>
    <h4 align=\"center\"> Compléter la matière suivant :  \"{{ matiere.TypeEnseignant.libelle }}-{{matiere.nom}}  ({{ matiere.nbrHeurGroupe * matiere.NombreGroupe }}) \" &nbsp;&nbsp; <button  type=\"button\" class=\"btn btn-info\" onclick=\"window.location.href = '{{path('Etat_matieres_responsable') }}'\"><b ><span class=\"glyphicon glyphicon-backward\" aria-hidden=\"true\"></span>&nbsp;Retour</b></button></h4>

    </br>
    <div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
      {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}

      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une réservation:</legend>


        <div class=\"form-group\">
          {{ form_label(f.nbHeur,'Nombre d\\'heures  : ')}}
\t\t\t\t\t{{ form_widget(f.nbHeur,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>\t
          <div class=\"form-group\">
          {{ form_label(f.User,'Ensiegnant  : ')}}
          {{ form_widget(f.User,{'attr':{'class':'form-control'}})}}
          </div>  \t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t{{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
\t\t\t\t\t{{ form_widget(f.reset,{'attr':{'class':'btn btn-info'}})}}
\t\t\t\t\t</div>

\t\t\t\t\t </fieldset>
\t\t\t{{ form_end(f)}}\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr><th colspan=\"20\">Listes des réservations de la matière \"{{ matiere.TypeEnseignant.libelle}}- {{ matiere.nom}}   ({{matiere.nbrHeurGroupe * matiere.NombreGroupe}})\"</th></tr>
\t\t\t\t\t<tr><th>Date </th><th>Nombre d'heures </th><th>Utilisateurs </th><th>Matieres</th><th>Types </th><th>Heures Total</th><th>Modifier</th><th>Supprimer</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in reservations %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
          <td>{{ u.dateInscription | date('Y-m-d') }}</td>
          <td>{{ u.nbHeur }}</td>
          <td>{{ u.User.nom }}&nbsp;{{ u.User.prenom }}</td>
          <td>{{ u.Matiere.nom}}</td>
          <td>{{ u.Matiere.TypeEnseignant.libelle }}</td>
          <td>{{ u.Matiere.nbrHeurGroupe * u.Matiere.NombreGroupe }}</td>


          <td>
            <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '{{path('modifier_inscription_matieres_etat',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
          </td>
          <td>

            <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#myModal{{ u.id }}\" ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>



            <div id=\"myModal{{ u.id }}\" class=\"modal fade\" role=\"dialog\">
              <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette réservation ?</h4>
                  </div>

                  <div class=\"modal-footer\">
                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{ path('supprimer_matiere_inscription',{'id':u.id }) }}'\"><b >Delete ! </b></button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                  </div>
               </div>
              </div>
            </div>
          </td>
          </tr>
          {% endfor %}
            </tbody>
            </table> 
          </div>
      </div>
    </div>
    <script>

      \$(document).ready(function () {
        \$('#example').DataTable();
      });


    </script>


    {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "@SRVDVServer/responsable/CompleterMatiere.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\responsable\\CompleterMatiere.html.twig");
    }
}
