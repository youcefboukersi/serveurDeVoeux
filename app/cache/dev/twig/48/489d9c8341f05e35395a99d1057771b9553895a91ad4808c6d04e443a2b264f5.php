<?php

/* SRVDVServerBundle:home:accueil.html.twig */
class __TwigTemplate_6ca32e07bfde23030c88c2cca3a3ef5326578c78cb7bc0624203aec6f5145a56 extends Twig_Template
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
        $__internal_dff9402c2e948609cf114e92d4f5fc14d3ca7a296be5116298982edd1eea0ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff9402c2e948609cf114e92d4f5fc14d3ca7a296be5116298982edd1eea0ab0->enter($__internal_dff9402c2e948609cf114e92d4f5fc14d3ca7a296be5116298982edd1eea0ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:accueil.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => "Accueil")));
        echo "

  <div class=\"container\">
       </br></br>
        <h1 align = \"center\"> Bienvenue sur le  Serveur de Voeux des Enseignants du Département Informatique 
        </h1>
      </br></br></br>
      
        <div class=\"panel-group\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Alertes"]) ? $context["Alertes"] : $this->getContext($context, "Alertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 12
            echo "
            ";
            // line 13
            if (($this->getAttribute($context["alert"], "typeAlerte", array()) == "Tres_importants")) {
                // line 14
                echo "
              <div class=\"panel panel-danger\">
                <div class=\"panel-heading\">Alerte  Trés importante créee par ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alert"], "user", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alert"], "user", array()), "prenom", array()), "html", null, true);
                echo "  le  ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alert"], "dateCreation", array()), "Y-m-d"), "html", null, true);
                echo "</div>
                <div class=\"panel-body\">  ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "message", array()), "html", null, true);
                echo "</div>
              </div>
            ";
            }
            // line 20
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Alertes"]) ? $context["Alertes"] : $this->getContext($context, "Alertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 22
            echo "            ";
            if (($this->getAttribute($context["alert"], "typeAlerte", array()) == "Importants")) {
                // line 23
                echo "              <div class=\"panel panel-warning\">
                <div class=\"panel-heading\">Alerte importante crée par ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alert"], "user", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alert"], "user", array()), "prenom", array()), "html", null, true);
                echo "  le  ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alert"], "dateCreation", array()), "Y-m-d"), "html", null, true);
                echo "</div>
                <div class=\"panel-body\">  ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "message", array()), "html", null, true);
                echo "</div>
              </div>
            ";
            }
            // line 28
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Alertes"]) ? $context["Alertes"] : $this->getContext($context, "Alertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 30
            echo "            ";
            if (($this->getAttribute($context["alert"], "typeAlerte", array()) == "information")) {
                // line 31
                echo "
              <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Information crée par ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alert"], "user", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alert"], "user", array()), "prenom", array()), "html", null, true);
                echo "  le  ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alert"], "dateCreation", array()), "Y-m-d"), "html", null, true);
                echo "</div>
                <div class=\"panel-body\">  ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "message", array()), "html", null, true);
                echo "</div>
              </div>
            ";
            }
            // line 37
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        </div>  
  </div>  
        
";
        // line 42
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:home:accueil.html.twig", 42)->display($context);
        
        $__internal_dff9402c2e948609cf114e92d4f5fc14d3ca7a296be5116298982edd1eea0ab0->leave($__internal_dff9402c2e948609cf114e92d4f5fc14d3ca7a296be5116298982edd1eea0ab0_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:home:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 42,  133 => 38,  127 => 37,  121 => 34,  113 => 33,  109 => 31,  106 => 30,  101 => 29,  95 => 28,  89 => 25,  81 => 24,  78 => 23,  75 => 22,  70 => 21,  64 => 20,  58 => 17,  50 => 16,  46 => 14,  44 => 13,  41 => 12,  37 => 11,  25 => 2,  22 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 'Accueil' })) }}

  <div class=\"container\">
       </br></br>
        <h1 align = \"center\"> Bienvenue sur le  Serveur de Voeux des Enseignants du Département Informatique 
        </h1>
      </br></br></br>
      
        <div class=\"panel-group\">
          {% for alert in Alertes %}

            {% if alert.typeAlerte == 'Tres_importants' %}

              <div class=\"panel panel-danger\">
                <div class=\"panel-heading\">Alerte  Trés importante créee par {{ alert.user.nom }} {{ alert.user.prenom }}  le  {{ alert.dateCreation | date('Y-m-d')  }}</div>
                <div class=\"panel-body\">  {{ alert.message }}</div>
              </div>
            {% endif %}
          {% endfor %}
          {% for alert in Alertes %}
            {% if alert.typeAlerte == 'Importants' %}
              <div class=\"panel panel-warning\">
                <div class=\"panel-heading\">Alerte importante crée par {{ alert.user.nom }} {{ alert.user.prenom }}  le  {{ alert.dateCreation | date('Y-m-d')  }}</div>
                <div class=\"panel-body\">  {{ alert.message }}</div>
              </div>
            {% endif %}
          {% endfor %}
          {% for alert in Alertes %}
            {% if alert.typeAlerte == 'information' %}

              <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Information crée par {{ alert.user.nom }} {{ alert.user.prenom }}  le  {{ alert.dateCreation | date('Y-m-d')  }}</div>
                <div class=\"panel-body\">  {{ alert.message }}</div>
              </div>
            {% endif %}
          {% endfor %}

        </div>  
  </div>  
        
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:home:accueil.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/home/accueil.html.twig");
    }
}
