<?php

/* SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig */
class __TwigTemplate_ee2e50276923edc33bcc710841eb56db709d3c732ee6cd6ed8ba088dad3ef5f6 extends Twig_Template
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
        $__internal_ac8bcd12e198f13e285e6940f1f68075630481afd9a32d043195a3e4e2f105e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8bcd12e198f13e285e6940f1f68075630481afd9a32d043195a3e4e2f105e6->enter($__internal_ac8bcd12e198f13e285e6940f1f68075630481afd9a32d043195a3e4e2f105e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 31)));
        echo "



<div id=\"content\">
\t
 </br>
        

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th>
\t\t\t\t\t<th>Date de création </th>
\t\t\t\t\t<th>nom</th>
\t\t\t\t\t<th>responsable</th>
\t\t\t\t\t<th>Année</th>
\t\t\t\t\t<th>res</th>
\t\t\t\t\t</tr>
\t\t\t\t   </thead>

\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Filieres"] ?? $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 25
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "dateFiliere", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "niveau", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "anneeFiliere", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t

\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        // line 60
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig", 60)->display($context);
        // line 61
        echo "
";
        
        $__internal_ac8bcd12e198f13e285e6940f1f68075630481afd9a32d043195a3e4e2f105e6->leave($__internal_ac8bcd12e198f13e285e6940f1f68075630481afd9a32d043195a3e4e2f105e6_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 61,  118 => 60,  97 => 41,  83 => 33,  77 => 30,  71 => 29,  65 => 28,  61 => 27,  57 => 26,  54 => 25,  50 => 24,  25 => 2,  22 => 1,);
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
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\" , { 'id': 31 })) }}



<div id=\"content\">
\t
 </br>
        

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th>
\t\t\t\t\t<th>Date de création </th>
\t\t\t\t\t<th>nom</th>
\t\t\t\t\t<th>responsable</th>
\t\t\t\t\t<th>Année</th>
\t\t\t\t\t<th>res</th>
\t\t\t\t\t</tr>
\t\t\t\t   </thead>

\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for f in Filieres %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ f.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ f.dateFiliere | date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t<td>{{ f.niveau }}&nbsp;{{ f.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ f.User.nom }}&nbsp;{{ f.User.prenom }}</td>
\t\t\t\t\t\t\t\t<td>{{ f.anneeFiliere}}</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription',{'id':f.id }) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button>

\t\t\t\t\t\t\t\t</td>
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

", "SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/ChoixFiliereResponsable.html.twig");
    }
}
