<?php

/* SRVDVServerBundle:admin:TypeEnsAdmin.html.twig */
class __TwigTemplate_237a41027756503fd1b1bf8b7d6c378dd7f58d5ad200ab0c3436555a427408a9 extends Twig_Template
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
        $__internal_1dcce0f85e64dfe73c9da6b54c744c499bd5b85462f23c30c9e7f9bd829ca420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcce0f85e64dfe73c9da6b54c744c499bd5b85462f23c30c9e7f9bd829ca420->enter($__internal_1dcce0f85e64dfe73c9da6b54c744c499bd5b85462f23c30c9e7f9bd829ca420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:TypeEnsAdmin.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 41)));
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
                  Impossible de supprimer cet Type d'enseigenement  </br>
                    Il est rataché à une matière !!
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
    <div class=\" centreVerticalement\">\t  
      ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter: </legend>
        <div class=\"form-group\">
          ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'label', array("label" => "Libelle : "));
        echo "
          ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "coef", array()), 'label', array("label" => "Coefficient: "));
        echo "
          ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "coef", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
          ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
        </div>
      </fieldset>
      ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
    </div>

    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Noms</th><th>Coefficients</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Typesens"]) ? $context["Typesens"] : $this->getContext($context, "Typesens")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 53
            echo "              <tr>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "coef", array()), "html", null, true);
            echo "</td>
                <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_TypeEnseignant", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\"  ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>

                  <div id=\"myModal";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer ce type d'enseignement ?</h4>
                        </div>

                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_type_enseig_admin", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
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
        // line 80
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
        window.location.href = 'suppTypeEns/' + id;
      }

    }
  </script>
  ";
        // line 100
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:TypeEnsAdmin.html.twig", 100)->display($context);
        
        $__internal_1dcce0f85e64dfe73c9da6b54c744c499bd5b85462f23c30c9e7f9bd829ca420->leave($__internal_1dcce0f85e64dfe73c9da6b54c744c499bd5b85462f23c30c9e7f9bd829ca420_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:TypeEnsAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 100,  161 => 80,  146 => 71,  132 => 60,  127 => 58,  122 => 56,  118 => 55,  114 => 54,  111 => 53,  107 => 52,  94 => 42,  88 => 39,  84 => 38,  78 => 35,  74 => 34,  68 => 31,  64 => 30,  57 => 26,  51 => 22,  32 => 5,  30 => 4,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 41 })) }}
  
  {% if supprimer == 0  %}
        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer cet Type d'enseigenement  </br>
                    Il est rataché à une matière !!
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
    <div class=\" centreVerticalement\">\t  
      {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter: </legend>
        <div class=\"form-group\">
          {{ form_label(f.libelle,'Libelle : ')}}
          {{ form_widget(f.libelle,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">
          {{ form_label(f.coef,'Coefficient: ')}}
          {{ form_widget(f.coef,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">
          {{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
          {{ form_widget(f.reset,{'attr':{'class':'btn btn-info'}})}}
        </div>
      </fieldset>
      {{ form_end(f)}}
    </div>

    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Noms</th><th>Coefficients</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            {% for u in Typesens %}
              <tr>
                <td>{{ u.libelle }}</td>
                <td>{{ u.coef }}</td>
                <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '{{path('Modifier_TypeEnseignant',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#myModal{{ u.id }}\"  ><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>

                  <div id=\"myModal{{ u.id }}\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer ce type d'enseignement ?</h4>
                        </div>

                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{ path('supprimer_type_enseig_admin',{'id':u.id }) }}'\"><b >Delete ! </b></button>
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
        window.location.href = 'suppTypeEns/' + id;
      }

    }
  </script>
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:TypeEnsAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/TypeEnsAdmin.html.twig");
    }
}
