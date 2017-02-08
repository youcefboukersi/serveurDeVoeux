<?php

/* SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig */
class __TwigTemplate_c2a2b835fcc12c721c9a8f45ec1d9ae3a02b664b2ff21eee85d99816d0160c67 extends Twig_Template
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
        $__internal_8874d9298f1aefe4c3f9774aed35b8d97fb85ff7882746f342be520e36f3b3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8874d9298f1aefe4c3f9774aed35b8d97fb85ff7882746f342be520e36f3b3bb->enter($__internal_8874d9298f1aefe4c3f9774aed35b8d97fb85ff7882746f342be520e36f3b3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nom", array()), "html", null, true);
        echo "  (";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nbrHeurGroupe", array()) * $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "NombreGroupe", array())), "html", null, true);
        echo ") \" &nbsp;&nbsp; <button  type=\"button\" class=\"btn btn-info\" onclick=\"window.location.href = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_reservation_responsable", array("id" => $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "id", array()))), "html", null, true);
        echo "'\"><b ><span class=\"glyphicon glyphicon-backward\" aria-hidden=\"true\"></span>&nbsp;Retour</b></button></h4>
    </br>
    <div class=\"centreVerticalement\">\t  
      ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une réservation:</legend>
        <div class=\"form-group\">
          ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbHeur", array()), 'label', array("label" => "Nombre d'heures  : "));
        echo "
\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbHeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t </fieldset>
\t\t\t";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr><th colspan=\"20\">listes des réservations sur la filière \"<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Etat_reservation_responsable", array("id" => $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "id", array()))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "niveau", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "nom", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "anneeFiliere", array()), "html", null, true);
        echo "</a>\"</th></tr>
\t\t\t\t\t<tr><th>Date </th><th>Nombre d'heures </th><th>Utilisateur </th><th>Matiere</th><th>Type </th><th>Heures Total</th><th>Mod</th><th>Supp</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 40
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "filiere", array()), "id", array()))) {
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
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "prenom", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nom", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 49
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
                echo "</td>

";
                // line 51
                $context["access"] = 0;
                echo " 
                          ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "Filiere", array()), "user", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    echo "  
                          ";
                    // line 53
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                        // line 54
                        echo "                            ";
                        $context["access"] = 1;
                        echo "            
                          
                          ";
                    }
                    // line 56
                    echo " 
                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "          <td>


            ";
                // line 61
                if (((($this->getAttribute($this->getAttribute($context["u"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) || ((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")) == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
                    // line 62
                    echo "
              <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_inscription", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                ";
                }
                // line 65
                echo "          </td>
          <td>
            ";
                // line 67
                if (((($this->getAttribute($this->getAttribute($context["u"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) || ((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")) == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
                    // line 68
                    echo "              <button type=\"button\" class=\"btn btn-warning\"   data-toggle=\"modal\" data-target=\"#myModal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                    echo "\" ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>

            ";
                }
                // line 71
                echo "

            <div id=\"myModal";
                // line 73
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
                // line 84
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
            // line 94
            echo "\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
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
        // line 118
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig", 118)->display($context);
        
        $__internal_8874d9298f1aefe4c3f9774aed35b8d97fb85ff7882746f342be520e36f3b3bb->leave($__internal_8874d9298f1aefe4c3f9774aed35b8d97fb85ff7882746f342be520e36f3b3bb_prof);

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
        return array (  257 => 118,  233 => 96,  226 => 94,  212 => 84,  198 => 73,  194 => 71,  187 => 68,  185 => 67,  181 => 65,  176 => 63,  173 => 62,  171 => 61,  166 => 58,  159 => 56,  152 => 54,  150 => 53,  144 => 52,  140 => 51,  135 => 49,  131 => 48,  127 => 47,  121 => 46,  116 => 44,  112 => 43,  108 => 41,  105 => 40,  101 => 39,  87 => 34,  76 => 26,  70 => 23,  66 => 22,  58 => 17,  54 => 16,  47 => 12,  35 => 9,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 20 })) }}



  <div align=\"center\">

    </br>
    <h4 align=\"center\"> Réserver la matière suivant :  \"{{ matiere.TypeEnseignant.libelle }}-{{matiere.nom}}  ({{ matiere.nbrHeurGroupe * matiere.NombreGroupe }}) \" &nbsp;&nbsp; <button  type=\"button\" class=\"btn btn-info\" onclick=\"window.location.href = '{{path('Etat_reservation_responsable',{'id':fil.id }) }}'\"><b ><span class=\"glyphicon glyphicon-backward\" aria-hidden=\"true\"></span>&nbsp;Retour</b></button></h4>
    </br>
    <div class=\"centreVerticalement\">\t  
      {{ form_start(f)}}
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une réservation:</legend>
        <div class=\"form-group\">
          {{ form_label(f.nbHeur,'Nombre d\\'heures  : ')}}
\t\t\t\t\t{{ form_widget(f.nbHeur,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t
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
                \t\t<tr><th colspan=\"20\">listes des réservations sur la filière \"<a href=\"{{path('Etat_reservation_responsable',{'id':fil.id }) }}\"> {{ fil.niveau}} {{ fil.nom}}  {{ fil.anneeFiliere}}</a>\"</th></tr>
\t\t\t\t\t<tr><th>Date </th><th>Nombre d'heures </th><th>Utilisateur </th><th>Matiere</th><th>Type </th><th>Heures Total</th><th>Mod</th><th>Supp</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in reservations %}
\t\t\t\t\t\t{% if fil.id  == u.Matiere.filiere.id  %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>{{ u.dateInscription | date('Y-m-d') }}</td>
          <td>{{ u.nbHeur }}</td>

          <td>{{ u.User.nom }}&nbsp;{{ u.User.prenom }}</td>
          <td>{{ u.Matiere.nom}}</td>
          <td>{{ u.Matiere.TypeEnseignant.libelle }}</td>
          <td>{{ u.Matiere.nbrHeurGroupe * u.Matiere.NombreGroupe }}</td>

{% set access = 0 %} 
                          {% for user in u.Matiere.Filiere.user %}  
                          {% if app.user.id  == user.id  %}
                            {% set access = 1 %}            
                          
                          {% endif %} 
                       {% endfor %}
          <td>


            {% if u.user.id  == app.user.id or access == 1  or  app.user.roles[0]=='ROLE_ADMIN'  %}

              <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '{{path('Modifier_inscription',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                {% endif %}
          </td>
          <td>
            {% if u.user.id  == app.user.id or access == 1 or  app.user.roles[0]=='ROLE_ADMIN'   %}
              <button type=\"button\" class=\"btn btn-warning\"   data-toggle=\"modal\" data-target=\"#myModal{{ u.id }}\" ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>

            {% endif %}


            <div id=\"myModal{{ u.id }}\" class=\"modal fade\" role=\"dialog\">
              <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette réservation ?</h4>
                  </div>

                  <div class=\"modal-footer\">
                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{ path('supp_incription_responsable',{'id':u.id }) }}'\"><b >Delete ! </b></button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                  </div>
                </div>

              </div>
            </div>

          </td>
          </tr>
          {% endif %}\t
            {% endfor %}
              </tbody>
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
      {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:enseignant:ReserveEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/ReserveEnseignant.html.twig");
    }
}
