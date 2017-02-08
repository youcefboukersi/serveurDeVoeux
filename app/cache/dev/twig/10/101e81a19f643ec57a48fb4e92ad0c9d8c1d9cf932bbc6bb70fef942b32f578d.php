<?php

/* @SRVDVServer/admin/FiliereAdmin.html.twig */
class __TwigTemplate_410435e277aa089a0cd11f5241e3aaf80f743f2c442dc6bf51f1aa8c5341de4b extends Twig_Template
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
        $__internal_38bb9d3c5fd2e8e34f45c7c5013fd883e702585563daac2cbeaa94ae52fbc654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bb9d3c5fd2e8e34f45c7c5013fd883e702585563daac2cbeaa94ae52fbc654->enter($__internal_38bb9d3c5fd2e8e34f45c7c5013fd883e702585563daac2cbeaa94ae52fbc654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/FiliereAdmin.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 42)));
        echo "
";
        // line 3
        if (((isset($context["supprimer"]) ? $context["supprimer"] : $this->getContext($context, "supprimer")) == 0)) {
            // line 4
            echo "        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer cet Filière  </br>
                    Elle est ratachée à une Matière !!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      ";
        }
        // line 21
        echo "  <div align=\"center\">
    </br>
    <div class=\"centreVerticalement\">\t


  
      ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une filière:</legend>
        <div class=\"form-group\">
          ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'label', array("label" => "Niveau : "));
        echo "
          ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label', array("label" => "Nom : "));
        echo "
          ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        
        <div class=\"form-group\">
          ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "User", array()), 'label', array("label" => "Responsable de filière: "));
        echo "
          ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "User", array()), 'widget', array("attr" => array("class" => "form-control selectpicker")));
        echo "
        </div>

        


        <div class=\"form-group\">
          ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
        </div>
      </fieldset>
    
      ";
        // line 54
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
    </div>
    <div class=\" centreVerticalement\">
      &nbsp;  &nbsp;  
    </div>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Années</th><th>Niveau</th><th>Noms</th><th>Date création</th><th>Résponsables</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Filieres"]) ? $context["Filieres"] : $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 67
            echo "              <tr>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "anneeFiliere", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "niveau", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateFiliere", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 73
            $context["i"] = 1;
            // line 74
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["u"], "User", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 75
                echo "                
                  ";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                echo " </br>";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 77
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </td>
                <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_filiere", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\"  ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                  <div id=\"myModal";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette filière ?</h4>
                        </div>
                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_filiere_admin", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b >Delete ! </b></button>
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "          </tbody>
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
        window.location.href = 'suppFiliere/' + id;
      }

    }


  </script>
  ";
        // line 127
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/admin/FiliereAdmin.html.twig", 127)->display($context);
        
        $__internal_38bb9d3c5fd2e8e34f45c7c5013fd883e702585563daac2cbeaa94ae52fbc654->leave($__internal_38bb9d3c5fd2e8e34f45c7c5013fd883e702585563daac2cbeaa94ae52fbc654_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/FiliereAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 127,  211 => 100,  196 => 91,  184 => 82,  180 => 81,  175 => 79,  172 => 78,  166 => 77,  158 => 76,  155 => 75,  150 => 74,  148 => 73,  143 => 71,  139 => 70,  135 => 69,  131 => 68,  128 => 67,  124 => 66,  109 => 54,  102 => 50,  92 => 43,  88 => 42,  80 => 37,  76 => 36,  69 => 32,  65 => 31,  58 => 27,  50 => 21,  31 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 42 })) }}
{% if supprimer == 0  %}
        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer cet Filière  </br>
                    Elle est ratachée à une Matière !!
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
    <div class=\"centreVerticalement\">\t


  
      {{ form_start(f)}}
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une filière:</legend>
        <div class=\"form-group\">
          {{ form_label(f.niveau,'Niveau : ')}}
          {{ form_widget(f.niveau,{'attr':{'class':'form-control'}})}}
        </div>

        <div class=\"form-group\">
          {{ form_label(f.nom,'Nom : ')}}
          {{ form_widget(f.nom,{'attr':{'class':'form-control'}})}}
        </div>

        
        <div class=\"form-group\">
          {{ form_label(f.User,'Responsable de filière: ')}}
          {{ form_widget(f.User,{'attr':{'class':'form-control selectpicker'}})}}
        </div>

        


        <div class=\"form-group\">
          {{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
        </div>
      </fieldset>
    
      {{ form_end(f)}}\t\t
    </div>
    <div class=\" centreVerticalement\">
      &nbsp;  &nbsp;  
    </div>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Années</th><th>Niveau</th><th>Noms</th><th>Date création</th><th>Résponsables</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            {% for u in Filieres %}
              <tr>
                <td>{{ u.anneeFiliere }}</td>
                <td>{{ u.niveau }}</td>
                <td>{{ u.nom }}</td>
                <td>{{ u.dateFiliere|date('d/m/Y')  }}</td>
                <td>
                  {% set i = 1 %}
                {% for user in u.User %}
                
                  {{ i }} - {{ user.nom }}  {{ user.prenom }} </br>{% set i = i +1  %}
                {% endfor %}
                </td>
                <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '{{path('Modifier_filiere',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#myModal{{ u.id }}\"  ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                  <div id=\"myModal{{ u.id }}\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette filière ?</h4>
                        </div>
                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{ path('supprimer_filiere_admin',{'id':u.id }) }}'\"><b >Delete ! </b></button>
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>\t
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
        window.location.href = 'suppFiliere/' + id;
      }

    }


  </script>
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/admin/FiliereAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\FiliereAdmin.html.twig");
    }
}
