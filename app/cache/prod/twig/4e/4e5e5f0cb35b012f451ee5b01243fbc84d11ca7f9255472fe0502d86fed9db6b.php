<?php

/* @SRVDVServer/admin/FiliereAdmin.html.twig */
class __TwigTemplate_b156265198c136a649a4977db157a6ae0f794b91b202d8eb635869022b7f1d5e extends Twig_Template
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
        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 42)));
        echo "

  <div align=\"center\">
    </br>
    <div class=\"centreVerticalement\">\t  
      ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une filière:</legend>
        <div class=\"form-group\">
          ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "niveau", array()), 'label', array("label" => "Niveau : "));
        echo "
          ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nom", array()), 'label', array("label" => "Nom : "));
        echo "
          ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "anneeFiliere", array()), 'label', array("label" => "Année en cours: "));
        echo "
          ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "anneeFiliere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "User", array()), 'label', array("label" => "Responsable de filière: "));
        echo "
          ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "User", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
          ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
        </div>
      </fieldset>

      ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_end');
        echo "\t\t
    </div>
    <div class=\" centreVerticalement\">
      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
    </div>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Annees</th><th>Niveau</th><th>Nom</th><th>Date création</th><th>Responsables</th><th>Modifier</th><th>Suuprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Filieres"]) ? $context["Filieres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 49
            echo "              <tr>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "anneeFiliere", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "niveau", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateFiliere", array()), "d/m/Y"), "html", null, true);
            echo "</td>

                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
            echo " &nbsp;   ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>

                <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_filiere", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 59
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
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette filière ?</h4>
                        </div>
                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
            // line 69
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
        // line 78
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
        // line 103
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/admin/FiliereAdmin.html.twig", 103)->display($context);
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
        return array (  201 => 103,  174 => 78,  159 => 69,  147 => 60,  143 => 59,  138 => 57,  131 => 55,  126 => 53,  122 => 52,  118 => 51,  114 => 50,  111 => 49,  107 => 48,  92 => 36,  85 => 32,  81 => 31,  74 => 27,  70 => 26,  63 => 22,  59 => 21,  52 => 17,  48 => 16,  41 => 12,  37 => 11,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SRVDVServer/admin/FiliereAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\FiliereAdmin.html.twig");
    }
}
