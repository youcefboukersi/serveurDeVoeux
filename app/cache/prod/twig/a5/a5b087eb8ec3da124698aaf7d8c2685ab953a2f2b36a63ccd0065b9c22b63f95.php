<?php

/* SRVDVServerBundle:admin:AnneeAdmin.html.twig */
class __TwigTemplate_37c15ea08d9b244c38f3c2397dbf273341996081fe48011e4816c31b07b27287 extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 45)));
        echo "

  <div align=\"center\">
    </br>
    <div class=\"centreVerticalement\">\t  
      ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter une année:</legend>
        <div class=\"form-group\">
          ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "annee", array()), 'label', array("label" => "Année : "));
        echo "
          ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "annee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "etat", array()), 'label', array("label" => "Actif: "));
        echo "
          ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "etat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "

        </div>
      </fieldset>
      ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_end');
        echo "\t\t
    </div>

    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Année</th><th>Active</th><th>Mod</th><th>Supp</th></tr>
          </thead>
          <tbody>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Annees"]) ? $context["Annees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 34
            echo "              <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "annee", array()), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 37
            if (($this->getAttribute($context["u"], "etat", array()) == 1)) {
                // line 38
                echo "                    OUI
                  ";
            }
            // line 40
            echo "                </td>
                <td>
                  ";
            // line 42
            if (($this->getAttribute($context["u"], "etat", array()) == 0)) {
                // line 43
                echo "                    <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Annee", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                      ";
            }
            // line 45
            echo "                </td>
                <td>
                  ";
            // line 47
            if (($this->getAttribute($context["u"], "etat", array()) == 0)) {
                // line 48
                echo "                    <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "\" >
                      <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                    </button>
                    <div id=\"myModal";
                // line 51
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
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_annee_admin", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b >Delete ! </b></button>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  ";
            }
            // line 68
            echo "                </td>
              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        // line 82
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:AnneeAdmin.html.twig", 82)->display($context);
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
        return array (  164 => 82,  151 => 71,  143 => 68,  133 => 61,  120 => 51,  113 => 48,  111 => 47,  107 => 45,  101 => 43,  99 => 42,  95 => 40,  91 => 38,  89 => 37,  84 => 35,  81 => 34,  77 => 33,  64 => 23,  57 => 19,  51 => 16,  47 => 15,  41 => 12,  37 => 11,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:admin:AnneeAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/AnneeAdmin.html.twig");
    }
}
