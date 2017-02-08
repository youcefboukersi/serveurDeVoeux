<?php

/* SRVDVServerBundle:responsable:MatiereResponsable.html.twig */
class __TwigTemplate_04373cdb6f794b33376164618312df152305591602e4da349b7b60c5abe92361 extends Twig_Template
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
        $__internal_e3935ae1abbd5e78d4af49c89166c2ee1a3f95b85929f1b86fff4fcb65da8ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3935ae1abbd5e78d4af49c89166c2ee1a3f95b85929f1b86fff4fcb65da8ea8->enter($__internal_e3935ae1abbd5e78d4af49c89166c2ee1a3f95b85929f1b86fff4fcb65da8ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 32)));
        echo "

";
        // line 4
        if (((isset($context["supprimer"]) ? $context["supprimer"] : $this->getContext($context, "supprimer")) == 0)) {
            // line 5
            echo "        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer cete Matière </br>
                  Elle est ratachée à un Voeux!!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      ";
        }
        // line 22
        echo "
  <div align=\"center\">
    </br>
    <div class=\" centreVerticalement\">
      ";
        // line 26
        if (((isset($context["ListeFiliere"]) ? $context["ListeFiliere"] : $this->getContext($context, "ListeFiliere")) == 0)) {
            // line 27
            echo "      ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
            echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une matière:</legend>
        <div class=\"form-group\">
          ";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label', array("label" => "Nom : "));
            echo "
          ";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
        </div>
        <div class=\"form-group\">
          ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "NombreGroupe", array()), 'label', array("label" => "Nombre de groupe : "));
            echo "
          ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "NombreGroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
        </div>
        <div class=\"form-group\">
          ";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbrHeurGroupe", array()), 'label', array("label" => "Nombre d'heures par groupe : "));
            echo "
\t\t\t\t\t";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbrHeurGroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "semestre", array()), 'label', array("label" => "Semestre : "));
            echo "
\t\t\t\t\t";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "semestre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Filiere", array()), 'label', array("label" => "Filiere : "));
            echo "
\t\t\t\t\t";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Filiere", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "TypeEnseignant", array()), 'label', array("label" => "Type Enseignement : "));
            echo "
\t\t\t\t\t";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "TypeEnseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t  </fieldset>

\t\t\t";
            // line 62
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
            echo "
      ";
        } else {
            // line 63
            echo " 

       <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Vous ne pouvez pas faire des modifications sur ces matières </br>
                  Vous étes responsable d'aucune des filières !!</Br>
                  Merci pour votre compréhension
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>

      ";
        }
        // line 83
        echo "\t
\t\t</div>
<div class=\" centreVerticalement\">&nbsp;&nbsp;&nbsp;&nbsp;</div>
\t\t<div class=\" centreVerticalement\">
\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr ><th align=\"center\" colspan=\"20\" >Liste des matières</th></tr>
\t\t\t\t\t<tr><th>Matiére</th><th>Type</th><th>H/Groupe</th><th>Groupes</th><th>Années</th><th>Semestre</th><th>Filieres</th><th>Modifier</th><th>Supprimer</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListeMatieres"]) ? $context["ListeMatieres"] : $this->getContext($context, "ListeMatieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 95
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "anneeFiliere", array()), "id", array()) == (isset($context["idAnnee"]) ? $context["idAnnee"] : $this->getContext($context, "idAnnee")))) {
                // line 96
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo "</td> 
\t\t\t\t\t\t\t\t<td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "anneeFiliere", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "semestre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "niveau", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t

                       ";
                // line 106
                $context["access"] = 0;
                echo " 
                    \t\t\t";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "user", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    echo "\t
                          ";
                    // line 108
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                        // line 109
                        echo "                            ";
                        $context["access"] = 1;
                        echo "            
                          
                          ";
                    }
                    // line 111
                    echo " 
                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 114
                if ((((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")) == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t \t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Matiere", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
            ";
                }
                // line 116
                echo "\t
            </td>
            <td>
              ";
                // line 119
                if ((((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")) == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
                    // line 120
                    echo "                <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                    echo "\" ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>

                <div id=\"myModal";
                    // line 122
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
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_matieres_responsable", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "'\"><b >Delete ! </b></button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                      </div>
                    </div>

                  </div>
                </div>\t\t\t\t\t\t\t\t\t
              ";
                }
                // line 138
                echo "\t
            </td>
            </tr>
            ";
            }
            // line 141
            echo "\t
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
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
        // line 164
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig", 164)->display($context);
        
        $__internal_e3935ae1abbd5e78d4af49c89166c2ee1a3f95b85929f1b86fff4fcb65da8ea8->leave($__internal_e3935ae1abbd5e78d4af49c89166c2ee1a3f95b85929f1b86fff4fcb65da8ea8_prof);

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
        return array (  330 => 164,  307 => 143,  300 => 141,  294 => 138,  283 => 131,  271 => 122,  265 => 120,  263 => 119,  258 => 116,  252 => 115,  250 => 114,  246 => 112,  239 => 111,  232 => 109,  230 => 108,  224 => 107,  220 => 106,  212 => 103,  208 => 102,  204 => 101,  200 => 100,  196 => 99,  192 => 98,  188 => 97,  185 => 96,  182 => 95,  178 => 94,  165 => 83,  142 => 63,  137 => 62,  130 => 58,  122 => 53,  118 => 52,  112 => 49,  108 => 48,  102 => 45,  98 => 44,  91 => 40,  87 => 39,  81 => 36,  77 => 35,  71 => 32,  67 => 31,  59 => 27,  57 => 26,  51 => 22,  32 => 5,  30 => 4,  25 => 2,  22 => 1,);
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

{% if supprimer == 0  %}
        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer cete Matière </br>
                  Elle est ratachée à un Voeux!!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      {% endif %}

  <div align=\"center\">
    </br>
    <div class=\" centreVerticalement\">
      {% if ListeFiliere == 0 %}
      {{ form_start(f)}}
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
\t\t\t\t\t</div>
\t\t\t\t\t  </fieldset>

\t\t\t{{ form_end(f)}}
      {% else %} 

       <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Vous ne pouvez pas faire des modifications sur ces matières </br>
                  Vous étes responsable d'aucune des filières !!</Br>
                  Merci pour votre compréhension
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>

      {% endif %}\t
\t\t</div>
<div class=\" centreVerticalement\">&nbsp;&nbsp;&nbsp;&nbsp;</div>
\t\t<div class=\" centreVerticalement\">
\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr ><th align=\"center\" colspan=\"20\" >Liste des matières</th></tr>
\t\t\t\t\t<tr><th>Matiére</th><th>Type</th><th>H/Groupe</th><th>Groupes</th><th>Années</th><th>Semestre</th><th>Filieres</th><th>Modifier</th><th>Supprimer</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in ListeMatieres %}
\t\t\t\t\t\t{% if u.Filiere.anneeFiliere.id == idAnnee %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ u.nom }}</td>
                  <td>{{ u.TypeEnseignant.libelle }}</td> 
\t\t\t\t\t\t\t\t<td>{{ u.nbrHeurGroupe }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.NombreGroupe }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Filiere.anneeFiliere }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.semestre }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Filiere.niveau}}&nbsp;{{ u.Filiere.nom}}</td>
\t\t\t\t\t\t\t

                       {% set access = 0 %} 
                    \t\t\t{% for user in u.Filiere.user %}\t
                          {% if app.user.id  == user.id  %}
                            {% set access = 1 %}            
                          
                          {% endif %} 
                       {% endfor %}\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if access == 1 or  app.user.roles[0]=='ROLE_ADMIN' %}
\t\t\t\t\t\t\t\t\t \t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='{{path('Modifier_Matiere',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
            {% endif %}\t
            </td>
            <td>
              {% if access == 1 or  app.user.roles[0]=='ROLE_ADMIN' %}
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
", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MatiereResponsable.html.twig");
    }
}
