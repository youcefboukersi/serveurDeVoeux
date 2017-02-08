<?php

/* @SRVDVServer/admin/AnneeAdmin.html.twig */
class __TwigTemplate_3833cd0422ac3cf3ee4a6034ecf40041f224c473fa5fb2779258d0379a63414c extends Twig_Template
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
        $__internal_d6f1d9414548bbe3e5af9d40d4d2a08e1a1ec52391992efe66b38ce9104e7e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f1d9414548bbe3e5af9d40d4d2a08e1a1ec52391992efe66b38ce9104e7e03->enter($__internal_d6f1d9414548bbe3e5af9d40d4d2a08e1a1ec52391992efe66b38ce9104e7e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/AnneeAdmin.html.twig"));

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
                  Impossible de supprimer cette Année 
                  Elle est ratachée à une Filière !!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      ";
        }
        // line 23
        echo "  
  <div align=\"center\">
    </br>
    <div class=\"centreVerticalement\">\t 
 
      ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une année:</legend>
        <div class=\"form-group\">
          ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "annee", array()), 'label', array("label" => "Année : "));
        echo "
          ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "annee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "etat", array()), 'label', array("label" => "Actif: "));
        echo "
          ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "etat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "

        </div>

      </fieldset>
      ";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t
     
    </div>

    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Années</th><th>Active</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 57
            echo "              <tr>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "annee", array()), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 60
            if (($this->getAttribute($context["u"], "etat", array()) == 1)) {
                // line 61
                echo "                    OUI
                  ";
            }
            // line 63
            echo "                </td>
                <td>
                  ";
            // line 65
            if (($this->getAttribute($context["u"], "etat", array()) == 0)) {
                // line 66
                echo "                    <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Annee", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                      ";
            }
            // line 68
            echo "                </td>
                <td>
                  ";
            // line 70
            if (($this->getAttribute($context["u"], "etat", array()) == 0)) {
                // line 71
                echo "                    <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "\" >
                      <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                    </button>
                    <div id=\"myModal";
                // line 74
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
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_annee_admin", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b >Delete ! </b></button>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
            }
            // line 91
            echo "                </td>
              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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
        // line 105
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/admin/AnneeAdmin.html.twig", 105)->display($context);
        
        $__internal_d6f1d9414548bbe3e5af9d40d4d2a08e1a1ec52391992efe66b38ce9104e7e03->leave($__internal_d6f1d9414548bbe3e5af9d40d4d2a08e1a1ec52391992efe66b38ce9104e7e03_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/AnneeAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 105,  182 => 94,  174 => 91,  164 => 84,  151 => 74,  144 => 71,  142 => 70,  138 => 68,  132 => 66,  130 => 65,  126 => 63,  122 => 61,  120 => 60,  115 => 58,  112 => 57,  108 => 56,  94 => 45,  86 => 40,  80 => 37,  76 => 36,  70 => 33,  66 => 32,  59 => 28,  52 => 23,  33 => 6,  31 => 5,  25 => 2,  22 => 1,);
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
                  Impossible de supprimer cette Année 
                  Elle est ratachée à une Filière !!
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
      {{ form_end(f)}}\t
     
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
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/admin/AnneeAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\AnneeAdmin.html.twig");
    }
}
