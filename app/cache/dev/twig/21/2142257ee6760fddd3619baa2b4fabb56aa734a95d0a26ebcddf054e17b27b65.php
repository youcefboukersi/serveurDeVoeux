<?php

/* SRVDVServerBundle:home:index.html.twig */
class __TwigTemplate_f52b96d2710baac6e38d766e5b28ce561eed2c94f4cca764f9379e988d89cf6d extends Twig_Template
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
        $__internal_de702d4a888d654f35ef728a635ac7497085604a7b8be4369da2bee9b612d368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de702d4a888d654f35ef728a635ac7497085604a7b8be4369da2bee9b612d368->enter($__internal_de702d4a888d654f35ef728a635ac7497085604a7b8be4369da2bee9b612d368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:index.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:home:Menu.html.twig", "SRVDVServerBundle:home:index.html.twig", 2)->display($context);
        // line 3
        echo "

";
        // line 6
        echo "
";
        // line 7
        $context["tempArray"] = array();
        // line 8
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "
\t\t";
            // line 10
            if ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : null), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matier", array()), "id", array())), array(), "array", true, true)) {
                // line 11
                echo "\t\t\t";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matier", array()), "id", array())) => ($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["item"], "Matier", array()), "id", array())), array(), "array") + $this->getAttribute($context["item"], "nbHeur", array()))));
                // line 12
                echo "\t\t";
            } else {
                // line 13
                echo "\t\t\t";
                $context["tempArray"] = twig_array_merge((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), array(("_" . $this->getAttribute($this->getAttribute($context["item"], "Matier", array()), "id", array())) => $this->getAttribute($context["item"], "nbHeur", array())));
                // line 14
                echo "\t\t";
            }
            // line 15
            echo "
\t        
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "


<div id=\"contenthome\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>Date </th><th>heures </th><th>Enseignant</th><th>e-mail</th><th>Cat Ens</th><th>Semestre</th><th>Matiere</th><th>filiere</th><th>Type </th><th>Somme</th><th>Total</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reserves"]) ? $context["Reserves"] : $this->getContext($context, "Reserves")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 30
            echo "
\t\t\t\t\t\t";
            // line 31
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "id", array())), array(), "array") > ($this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "NombreGroupe", array())))) {
                // line 32
                echo "\t\t\t\t\t\t\t";
                $context["color21"] = "#FE2E2E";
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "id", array())), array(), "array") == ($this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "NombreGroupe", array())))) {
                // line 35
                echo "\t\t\t\t\t\t\t";
                $context["color21"] = "#58FA58";
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 37
            echo "
\t\t\t\t\t\t";
            // line 38
            if (($this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "id", array())), array(), "array") < ($this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "NombreGroupe", array())))) {
                // line 39
                echo "\t\t\t\t\t\t\t";
                $context["color21"] = "#F3F781";
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 41
            echo "
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr style=\"background-color:";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["color21"]) ? $context["color21"] : $this->getContext($context, "color21")), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateInscription", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nbHeur", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Utilisateur", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Utilisateur", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Utilisateur", array()), "mail", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Utilisateur", array()), "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "semestre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "nom", array()), "html", null, true);
            echo "&nbsp;(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "AnneeMatiere", array()), "html", null, true);
            echo ")</td>
\t\t\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "filiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tempArray"]) ? $context["tempArray"] : $this->getContext($context, "tempArray")), ("_" . $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "id", array())), array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["r"], "Matier", array()), "NombreGroupe", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                   </tbody>
\t\t\t\t</table> 
            
\t\t</div>
\t
</div>

<script type=\"text/javascript\" charset=\"utf-8\" >

\$(document).ready(function() {
    \$('#example').DataTable(
      
      
         

    );
} );


</script>


";
        // line 82
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:home:index.html.twig", 82)->display($context);
        
        $__internal_de702d4a888d654f35ef728a635ac7497085604a7b8be4369da2bee9b612d368->leave($__internal_de702d4a888d654f35ef728a635ac7497085604a7b8be4369da2bee9b612d368_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 82,  178 => 60,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  150 => 52,  146 => 51,  142 => 50,  138 => 49,  132 => 48,  128 => 47,  124 => 46,  119 => 44,  114 => 41,  108 => 39,  106 => 38,  103 => 37,  97 => 35,  94 => 34,  88 => 32,  86 => 31,  83 => 30,  79 => 29,  66 => 18,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  44 => 10,  41 => 9,  36 => 8,  34 => 7,  31 => 6,  27 => 3,  25 => 2,  22 => 1,);
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
{% include \"SRVDVServerBundle:home:Menu.html.twig\" %}


{# nous ajoutond un underscore dans la clé #}

{% set tempArray = {} %}
\t{% for item in Reserves %}

\t\t{% if tempArray['_'~item.Matier.id] is defined %}
\t\t\t{% set tempArray = tempArray|merge({('_'~item.Matier.id):(tempArray['_'~item.Matier.id]+item.nbHeur)}) %}
\t\t{% else %}
\t\t\t{% set tempArray = tempArray|merge({('_'~item.Matier.id):(item.nbHeur)}) %}
\t\t{% endif %}

\t        
\t{% endfor %}



<div id=\"contenthome\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>Date </th><th>heures </th><th>Enseignant</th><th>e-mail</th><th>Cat Ens</th><th>Semestre</th><th>Matiere</th><th>filiere</th><th>Type </th><th>Somme</th><th>Total</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for r in Reserves %}

\t\t\t\t\t\t{% if tempArray['_'~r.Matier.id] >  (r.Matier.nbrHeurGroupe * r.Matier.NombreGroupe )%}
\t\t\t\t\t\t\t{% set color21='#FE2E2E' %}\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if tempArray['_'~r.Matier.id] ==  (r.Matier.nbrHeurGroupe * r.Matier.NombreGroupe ) %}
\t\t\t\t\t\t\t{% set color21='#58FA58' %}\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if tempArray['_'~r.Matier.id] <  (r.Matier.nbrHeurGroupe * r.Matier.NombreGroupe ) %}
\t\t\t\t\t\t\t{% set color21='#F3F781' %}\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr style=\"background-color:{{color21}}\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>{{ r.dateInscription | date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.nbHeur }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.Utilisateur.nom }}&nbsp;{{ r.Utilisateur.prenom }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.Utilisateur.mail}}</td>
\t\t\t\t\t\t\t\t<td>{{ r.Utilisateur.type.libelle}}</td>
\t\t\t\t\t\t\t\t<td>{{ r.Matier.semestre }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.Matier.nom}}&nbsp;({{ r.Matier.AnneeMatiere}})</td>
\t\t\t\t\t\t\t\t<td>{{ r.Matier.filiere.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.Matier.TypeEnseignant.libelle }}</td>
\t\t\t\t\t\t\t\t<td>{{ tempArray['_'~r.Matier.id]  }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.Matier.nbrHeurGroupe * r.Matier.NombreGroupe  }}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}
                   </tbody>
\t\t\t\t</table> 
            
\t\t</div>
\t
</div>

<script type=\"text/javascript\" charset=\"utf-8\" >

\$(document).ready(function() {
    \$('#example').DataTable(
      
      
         

    );
} );


</script>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:home:index.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/home/index.html.twig");
    }
}
