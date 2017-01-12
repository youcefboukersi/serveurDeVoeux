<?php

/* SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig */
class __TwigTemplate_e01b5fb22f692b7b9a7f7be2196037a56b8ade210910b41173f1713f15ceba45 extends Twig_Template
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
        $__internal_5297f436bd4d87fc41031243fbe0575c4bd83909e023ba1a57691450c5496fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5297f436bd4d87fc41031243fbe0575c4bd83909e023ba1a57691450c5496fbd->enter($__internal_5297f436bd4d87fc41031243fbe0575c4bd83909e023ba1a57691450c5496fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 20)));
        echo "
<div align=\"centre\">
\t </br>
        


\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Date de création </th><th>nom</th><th>responsable</th><th>Année</th><th>res</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Filieres"] ?? $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 16
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "dateFiliere", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "niveau", array()), "html", null, true);
            echo "&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "anneeFiliere", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription_enseignant", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Select</b></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                   </tbody>
\t\t\t\t</table> 
            </div>
</div>
\t





<script>

\$(document).ready(function() {
    \$('#example').DataTable();
} );


</script>

";
        // line 46
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig", 46)->display($context);
        // line 47
        echo "
";
        
        $__internal_5297f436bd4d87fc41031243fbe0575c4bd83909e023ba1a57691450c5496fbd->leave($__internal_5297f436bd4d87fc41031243fbe0575c4bd83909e023ba1a57691450c5496fbd_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  104 => 46,  83 => 27,  72 => 22,  68 => 21,  62 => 20,  56 => 19,  52 => 18,  48 => 17,  45 => 16,  41 => 15,  25 => 2,  22 => 1,);
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
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 20 })) }}
<div align=\"centre\">
\t </br>
        


\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Date de création </th><th>nom</th><th>responsable</th><th>Année</th><th>res</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for f in Filieres %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ f.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ f.dateFiliere | date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t<td>{{ f.niveau}}&nbsp;&nbsp;{{ f.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ f.User.nom }}&nbsp;{{ f.User.prenom }}</td>
\t\t\t\t\t\t\t\t<td>{{ f.anneeFiliere}}</td>
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription_enseignant',{'id':f.id }) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Select</b></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}
                   </tbody>
\t\t\t\t</table> 
            </div>
</div>
\t





<script>

\$(document).ready(function() {
    \$('#example').DataTable();
} );


</script>

{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}

", "SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/ChoixFiliereEnseignant.html.twig");
    }
}
