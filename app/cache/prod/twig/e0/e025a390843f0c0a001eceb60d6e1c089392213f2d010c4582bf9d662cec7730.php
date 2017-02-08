<?php

/* SRVDVServerBundle:admin:AnneeAdmin.html.twig */
class __TwigTemplate_d7c0b90b69ea40d4c56767a8510c2ab96213f9dced286400a6244a57ca2ea66f extends Twig_Template
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
        $__internal_ae60c757277c1fd9c98b2feeb607e5d77f691383dfd1934e5ebe09f7a788da86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae60c757277c1fd9c98b2feeb607e5d77f691383dfd1934e5ebe09f7a788da86->enter($__internal_ae60c757277c1fd9c98b2feeb607e5d77f691383dfd1934e5ebe09f7a788da86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:AnneeAdmin.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 45)));
        echo "

  
   ";
        // line 5
        if (((isset($context["supprimer"]) ? $context["supprimer"] : $this->getContext($context, "supprimer")) == 0)) {
            // line 6
            echo "        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer l année !!
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
    <div class=\"centreVerticalement\">\t  
      ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une année:</legend>
        <div class=\"form-group\">
          ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "annee", array()), 'label', array("label" => "Année : "));
        echo "
          ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "annee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "etat", array()), 'label', array("label" => "Actif: "));
        echo "
          ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "etat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "

        </div>
      </fieldset>
      ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
    </div>

    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Années</th><th>Active</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 53
            echo "              <tr>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "annee", array()), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 56
            if (($this->getAttribute($context["u"], "etat", array()) == 1)) {
                // line 57
                echo "                    OUI
                  ";
            }
            // line 59
            echo "                </td>
                <td>
                  ";
            // line 61
            if (($this->getAttribute($context["u"], "etat", array()) == 0)) {
                // line 62
                echo "                    <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Annee", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                      ";
            }
            // line 64
            echo "                </td>
                <td>
                  ";
            // line 66
            if (($this->getAttribute($context["u"], "etat", array()) == 0)) {
                // line 67
                echo "                    <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "\" >
                      <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                    </button>
                    <div id=\"myModal";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette année ?</h4>
                          </div>

                          <div class=\"modal-footer\">
                            <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_annee_admin", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b >Delete ! </b></button>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
            }
            // line 87
            echo "                </td>
              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "          </tbody>
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
        // line 101
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:AnneeAdmin.html.twig", 101)->display($context);
        
        $__internal_ae60c757277c1fd9c98b2feeb607e5d77f691383dfd1934e5ebe09f7a788da86->leave($__internal_ae60c757277c1fd9c98b2feeb607e5d77f691383dfd1934e5ebe09f7a788da86_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:AnneeAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 101,  178 => 90,  170 => 87,  160 => 80,  147 => 70,  140 => 67,  138 => 66,  134 => 64,  128 => 62,  126 => 61,  122 => 59,  118 => 57,  116 => 56,  111 => 54,  108 => 53,  104 => 52,  91 => 42,  84 => 38,  78 => 35,  74 => 34,  68 => 31,  64 => 30,  57 => 26,  51 => 22,  33 => 6,  31 => 5,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 45 })) }}

  
   {% if supprimer == 0  %}
        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer l année !!
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
        <legend > Ajouter une année:</legend>
        <div class=\"form-group\">
          {{ form_label(f.annee,'Année : ')}}
          {{ form_widget(f.annee,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">
          {{ form_label(f.etat,'Actif: ')}}
          {{ form_widget(f.etat,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">
          {{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}

        </div>
      </fieldset>
      {{ form_end(f)}}\t\t
    </div>

    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Années</th><th>Active</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            {% for u in Annees %}
              <tr>
                <td>{{ u.annee }}</td>
                <td>
                  {% if u.etat == 1 %}
                    OUI
                  {% endif %}
                </td>
                <td>
                  {% if u.etat == 0 %}
                    <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '{{path('Modifier_Annee',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                      {% endif %}
                </td>
                <td>
                  {% if u.etat == 0 %}
                    <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal{{ u.id }}\" >
                      <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                    </button>
                    <div id=\"myModal{{ u.id }}\" class=\"modal fade\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette année ?</h4>
                          </div>

                          <div class=\"modal-footer\">
                            <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{ path('supprimer_annee_admin',{'id':u.id }) }}'\"><b >Delete ! </b></button>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  {% endif %}
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
  </script>
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:AnneeAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/AnneeAdmin.html.twig");
    }
}
