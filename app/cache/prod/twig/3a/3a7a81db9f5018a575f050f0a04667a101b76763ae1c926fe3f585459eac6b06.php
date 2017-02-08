<?php

/* @SRVDVServer/home/accueil.html.twig */
class __TwigTemplate_5165d4128dff0c3f17ae0799027da28d8a4aa08a1142178ca622dc696a01047b extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => "Accueil")));
        echo "

  <div class=\"container\">
       </br></br>
        <h1 align = \"center\"> Bienvenu sur le  Serveur de Voeux des Enseignants du Département Informatique 
        </h1>
      </br></br></br>
      
        <div class=\"panel-group\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Alertes"]) ? $context["Alertes"] : null));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Alertes"]) ? $context["Alertes"] : null));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Alertes"]) ? $context["Alertes"] : null));
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
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/home/accueil.html.twig", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "@SRVDVServer/home/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  130 => 38,  124 => 37,  118 => 34,  110 => 33,  106 => 31,  103 => 30,  98 => 29,  92 => 28,  86 => 25,  78 => 24,  75 => 23,  72 => 22,  67 => 21,  61 => 20,  55 => 17,  47 => 16,  43 => 14,  41 => 13,  38 => 12,  34 => 11,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SRVDVServer/home/accueil.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\home\\accueil.html.twig");
    }
}
