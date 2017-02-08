<?php

/* SRVDVServerBundle:responsable:MatiereResponsable.html.twig */
class __TwigTemplate_4d33bafafd31160851df8a1820cb8da5eae70c57d5b6b97b6987bcff092466b6 extends Twig_Template
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
        $__internal_b6874712c840ab015301320fbe610e515ac7674ee02f05736b8db85bf8062682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6874712c840ab015301320fbe610e515ac7674ee02f05736b8db85bf8062682->enter($__internal_b6874712c840ab015301320fbe610e515ac7674ee02f05736b8db85bf8062682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 32)));
        echo "
  <div align=\"center\">
    </br>
    <div class=\" centreVerticalement\">
      ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une matière:</legend>
        <div class=\"form-group\">
          ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label', array("label" => "Nom : "));
        echo "
          ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "NombreGroupe", array()), 'label', array("label" => "Nombre de groupe : "));
        echo "
          ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "NombreGroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbrHeurGroupe", array()), 'label', array("label" => "Nombre d'heures par groupe : "));
        echo "
\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbrHeurGroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "semestre", array()), 'label', array("label" => "Semestre : "));
        echo "
\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "semestre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Filiere", array()), 'label', array("label" => "Filiere : "));
        echo "
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Filiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "TypeEnseignant", array()), 'label', array("label" => "Type Enseignement : "));
        echo "
\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "TypeEnseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t  </fieldset>

\t\t\t";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>
<div class=\" centreVerticalement\">&nbsp;&nbsp;&nbsp;&nbsp;</div>
\t\t<div class=\" centreVerticalement\">
\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr ><th align=\"center\" colspan=\"20\" >Liste des matières</th></tr>
\t\t\t\t\t<tr><th>Noms</th><th>Heures/Groupe</th><th>Groupes</th><th>Années</th><th>Semestre</th><th>Filieres</th><th>Statut enseignant</th><th>Modifier</th><th>Supprimer</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListeMatieres"]) ? $context["ListeMatieres"] : $this->getContext($context, "ListeMatieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 54
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "anneeFiliere", array()), "id", array()) == (isset($context["idAnnee"]) ? $context["idAnnee"] : $this->getContext($context, "idAnnee")))) {
                // line 55
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "anneeFiliere", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "semestre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "niveau", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 64
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "user", array()), "id", array()))) {
                    // line 65
                    echo "\t\t\t\t\t\t\t\t\t \t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Matiere", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
            ";
                }
                // line 66
                echo "\t
            </td>
            <td>
              ";
                // line 69
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "user", array()), "id", array()))) {
                    // line 70
                    echo "                <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                    echo "\" ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>

                <div id=\"myModal";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                    echo "\" class=\"modal fade\" role=\"dialog\">
                  <div class=\"modal-dialog\">
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette matière ?</h4>
                      </div>
                      <div class=\"modal-footer\">
                        <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                    // line 81
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_matieres_responsable", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "'\"><b >Delete ! </b></button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                      </div>
                    </div>

                  </div>
                </div>\t\t\t\t\t\t\t\t\t
              ";
                }
                // line 88
                echo "\t
            </td>
            </tr>
            ";
            }
            // line 91
            echo "\t
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </tbody>
                </table> 
              </div>
          </div>
        </div>
        <script>

          \$(document).ready(function () {
            \$('#example').DataTable();
          });

          function SupprimerUser(id) {

            var rep = confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur');

            if (rep) {
              window.location.href = \"SuppMatiere/\" + id;
            }

          }
        </script>
        ";
        // line 114
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig", 114)->display($context);
        
        $__internal_b6874712c840ab015301320fbe610e515ac7674ee02f05736b8db85bf8062682->leave($__internal_b6874712c840ab015301320fbe610e515ac7674ee02f05736b8db85bf8062682_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:MatiereResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 114,  225 => 93,  218 => 91,  212 => 88,  201 => 81,  189 => 72,  183 => 70,  181 => 69,  176 => 66,  170 => 65,  168 => 64,  163 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  137 => 56,  134 => 55,  131 => 54,  127 => 53,  113 => 42,  106 => 38,  102 => 37,  94 => 32,  90 => 31,  84 => 28,  80 => 27,  74 => 24,  70 => 23,  63 => 19,  59 => 18,  53 => 15,  49 => 14,  43 => 11,  39 => 10,  32 => 6,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", {'id': 32 })) }}
  <div align=\"center\">
    </br>
    <div class=\" centreVerticalement\">
      {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une matière:</legend>
        <div class=\"form-group\">
          {{ form_label(f.nom,'Nom : ')}}
          {{ form_widget(f.nom,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">
          {{ form_label(f.NombreGroupe,'Nombre de groupe : ')}}
          {{ form_widget(f.NombreGroupe,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">
          {{ form_label(f.nbrHeurGroupe,'Nombre d\\'heures par groupe : ')}}
\t\t\t\t\t{{ form_widget(f.nbrHeurGroupe,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.semestre,'Semestre : ')}}
\t\t\t\t\t{{ form_widget(f.semestre,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.Filiere,'Filiere : ')}}
\t\t\t\t\t{{ form_widget(f.Filiere,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.TypeEnseignant,'Type Enseignement : ')}}
\t\t\t\t\t{{ form_widget(f.TypeEnseignant,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t{{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
\t\t\t\t\t{{ form_widget(f.reset,{'attr':{'class':'btn btn-info'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t  </fieldset>

\t\t\t{{ form_end(f)}}\t\t
\t\t</div>
<div class=\" centreVerticalement\">&nbsp;&nbsp;&nbsp;&nbsp;</div>
\t\t<div class=\" centreVerticalement\">
\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr ><th align=\"center\" colspan=\"20\" >Liste des matières</th></tr>
\t\t\t\t\t<tr><th>Noms</th><th>Heures/Groupe</th><th>Groupes</th><th>Années</th><th>Semestre</th><th>Filieres</th><th>Statut enseignant</th><th>Modifier</th><th>Supprimer</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in ListeMatieres %}
\t\t\t\t\t\t{% if u.Filiere.anneeFiliere.id == idAnnee %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ u.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.nbrHeurGroupe }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.NombreGroupe }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Filiere.anneeFiliere }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.semestre }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Filiere.niveau}}&nbsp;{{ u.Filiere.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{ u.TypeEnseignant.libelle }}</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if app.user.id  == u.Filiere.user.id  %}
\t\t\t\t\t\t\t\t\t \t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='{{path('Modifier_Matiere',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
            {% endif %}\t
            </td>
            <td>
              {% if app.user.id  == u.Filiere.user.id  %}
                <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal{{ u.id }}\" ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>

                <div id=\"myModal{{ u.id }}\" class=\"modal fade\" role=\"dialog\">
                  <div class=\"modal-dialog\">
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette matière ?</h4>
                      </div>
                      <div class=\"modal-footer\">
                        <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{ path('supprimer_matieres_responsable',{'id':u.id }) }}'\"><b >Delete ! </b></button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                      </div>
                    </div>

                  </div>
                </div>\t\t\t\t\t\t\t\t\t
              {% endif %}\t
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
            \$('#example').DataTable();
          });

          function SupprimerUser(id) {

            var rep = confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur');

            if (rep) {
              window.location.href = \"SuppMatiere/\" + id;
            }

          }
        </script>
        {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MatiereResponsable.html.twig");
    }
}
