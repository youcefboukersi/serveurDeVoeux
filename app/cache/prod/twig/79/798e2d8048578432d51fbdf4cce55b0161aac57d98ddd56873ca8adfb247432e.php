<?php

/* SRVDVServerBundle:admin:FiliereAdmin.html.twig */
class __TwigTemplate_77309d79d79edc63eab825b1e4a18ba7853a0d23b26c031c405a41397dd1421c extends Twig_Template
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
        $__internal_5450040ebfd5814991066e8f426834ccdfe2d51b7d29fb8a2dab715514f04e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5450040ebfd5814991066e8f426834ccdfe2d51b7d29fb8a2dab715514f04e0b->enter($__internal_5450040ebfd5814991066e8f426834ccdfe2d51b7d29fb8a2dab715514f04e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:FiliereAdmin.html.twig"));

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
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une filière:</legend>
        <div class=\"form-group\">
          ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'label', array("label" => "Niveau : "));
        echo "
          ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label', array("label" => "Nom : "));
        echo "
          ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "anneeFiliere", array()), 'label', array("label" => "Année en cours: "));
        echo "
          ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "anneeFiliere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "User", array()), 'label', array("label" => "Responsable de filière: "));
        echo "
          ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "User", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
          ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
        </div>
      </fieldset>

      ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
    </div>
    <div class=\" centreVerticalement\">
      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
    </div>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Années</th><th>Niveau</th><th>Noms</th><th>Date création</th><th>Résponsables</th><th>Modifier</th><th>Suuprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Filieres"]) ? $context["Filieres"] : $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 66
            echo "              <tr>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "anneeFiliere", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "niveau", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateFiliere", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
            echo " &nbsp;   ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_filiere", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\"  ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
                  <div id=\"myModal";
            // line 75
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
            // line 84
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
        // line 93
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
        // line 118
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:FiliereAdmin.html.twig", 118)->display($context);
        
        $__internal_5450040ebfd5814991066e8f426834ccdfe2d51b7d29fb8a2dab715514f04e0b->leave($__internal_5450040ebfd5814991066e8f426834ccdfe2d51b7d29fb8a2dab715514f04e0b_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:FiliereAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 118,  197 => 93,  182 => 84,  170 => 75,  166 => 74,  161 => 72,  155 => 71,  151 => 70,  147 => 69,  143 => 68,  139 => 67,  136 => 66,  132 => 65,  117 => 53,  110 => 49,  106 => 48,  99 => 44,  95 => 43,  88 => 39,  84 => 38,  77 => 34,  73 => 33,  66 => 29,  62 => 28,  55 => 24,  50 => 21,  31 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
      {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
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
          {{ form_label(f.anneeFiliere,'Année en cours: ')}}
          {{ form_widget(f.anneeFiliere,{'attr':{'class':'form-control'}})}}
        </div>

        <div class=\"form-group\">
          {{ form_label(f.User,'Responsable de filière: ')}}
          {{ form_widget(f.User,{'attr':{'class':'form-control'}})}}
        </div>

        <div class=\"form-group\">
          {{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
          {{ form_widget(f.reset,{'attr':{'class':'btn btn-info'}})}}
        </div>
      </fieldset>

      {{ form_end(f)}}\t\t
    </div>
    <div class=\" centreVerticalement\">
      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
    </div>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Années</th><th>Niveau</th><th>Noms</th><th>Date création</th><th>Résponsables</th><th>Modifier</th><th>Suuprimer</th></tr>
          </thead>
          <tbody>
            {% for u in Filieres %}
              <tr>
                <td>{{ u.anneeFiliere }}</td>
                <td>{{ u.niveau }}</td>
                <td>{{ u.nom }}</td>
                <td>{{ u.dateFiliere|date('d/m/Y')  }}</td>
                <td>{{ u.User.nom }} &nbsp;   {{ u.User.prenom }}</td>
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
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:FiliereAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/FiliereAdmin.html.twig");
    }
}
