<?php

/* SRVDVServerBundle:admin:alertAdmin.html.twig */
class __TwigTemplate_63a893203f13aa863dceb87419e5579573327ee3b4ea623705fe4999b183918e extends Twig_Template
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
        $__internal_b3ecc43eac084f6065edcee9c23576b731497f889df94c002c4bc5972e698863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ecc43eac084f6065edcee9c23576b731497f889df94c002c4bc5972e698863->enter($__internal_b3ecc43eac084f6065edcee9c23576b731497f889df94c002c4bc5972e698863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:alertAdmin.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 51)));
        echo "
  
  <div align=\"center\">
    </br>
    <div class=\"centreVerticalement\">\t  
      ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une alerte:</legend>
        ";
        // line 10
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), array(0 => ":FormTemplate:bootstrap.html.twig"));
        // line 11
        echo "        <form>
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
      </form>
      </fieldset>
      ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
    </div>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Utilisateurs</th><th>Date Création</th><th>Type d'alerte</th><th>Contenu</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_alertes"]) ? $context["list_alertes"] : $this->getContext($context, "list_alertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 25
            echo "              <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alert"], "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alert"], "user", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alert"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "typeAlerte", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "message", array()), "html", null, true);
            echo "</td>
                 <td>
                  <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_alerte", array("id" => $this->getAttribute($context["alert"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                </td>
                <td>


                  <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "id", array()), "html", null, true);
            echo "\" >
                    <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                  </button>


                  <div id=\"myModal";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette alerte ?</h4>
                        </div>

                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_alerte", array("id" => $this->getAttribute($context["alert"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        // line 81
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:alertAdmin.html.twig", 81)->display($context);
        
        $__internal_b3ecc43eac084f6065edcee9c23576b731497f889df94c002c4bc5972e698863->leave($__internal_b3ecc43eac084f6065edcee9c23576b731497f889df94c002c4bc5972e698863_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:alertAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 81,  135 => 63,  118 => 52,  104 => 41,  96 => 36,  88 => 31,  83 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  50 => 15,  44 => 12,  41 => 11,  39 => 10,  33 => 7,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 51 })) }}
  
  <div align=\"center\">
    </br>
    <div class=\"centreVerticalement\">\t  
      {{ form_start(f)}}
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une alerte:</legend>
        {% form_theme f \":FormTemplate:bootstrap.html.twig\" %}
        <form>
        {{ form_widget(f) }}
      </form>
      </fieldset>
      {{ form_end(f)}}\t\t
    </div>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Utilisateurs</th><th>Date Création</th><th>Type d'alerte</th><th>Contenu</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            {% for alert in list_alertes %}
              <tr>
                <td>{{ alert.user.nom }} {{ alert.user.prenom }}</td>
                <td>{{ alert.dateCreation | date('Y-m-d')  }}</td>
                <td>{{ alert.typeAlerte }}</td>
                <td>{{ alert.message }}</td>
                 <td>
                  <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '{{path('Modifier_alerte',{'id':alert.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                </td>
                <td>


                  <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal{{ alert.id }}\" >
                    <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                  </button>


                  <div id=\"myModal{{ alert.id }}\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette alerte ?</h4>
                        </div>

                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{ path('supprimer_alerte',{'id':alert.id }) }}'\"><b >Delete ! </b></button>
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



  </script>
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:alertAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/alertAdmin.html.twig");
    }
}
