<?php

/* SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig */
class __TwigTemplate_66e3a8af8e3e24b36f4607eb993903f70c2d8916ed131170b14fed5998b87f0a extends Twig_Template
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
        $__internal_000a7fa90d3fa9bd1b9ddb260ab93bad8ef8d1ff780f2b0b2a9aa5b37a5efa3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000a7fa90d3fa9bd1b9ddb260ab93bad8ef8d1ff780f2b0b2a9aa5b37a5efa3e->enter($__internal_000a7fa90d3fa9bd1b9ddb260ab93bad8ef8d1ff780f2b0b2a9aa5b37a5efa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig", 2)->display($context);
        // line 3
        echo "
<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Enseignant</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_profile_user_ens");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>\t
\t\t\t<li  class=\"active\"><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_enseignant");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
\t\t\t\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t


\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Date de création </th><th>nom</th><th>responsable</th><th>Année</th><th>res</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Filieres"] ?? $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 29
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "dateFiliere", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "niveau", array()), "html", null, true);
            echo "&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "anneeFiliere", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription_enseignant", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        // line 59
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:enseignant:ChoixFiliereEnseignant.html.twig", 59)->display($context);
        // line 60
        echo "
";
        
        $__internal_000a7fa90d3fa9bd1b9ddb260ab93bad8ef8d1ff780f2b0b2a9aa5b37a5efa3e->leave($__internal_000a7fa90d3fa9bd1b9ddb260ab93bad8ef8d1ff780f2b0b2a9aa5b37a5efa3e_prof);

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
        return array (  125 => 60,  123 => 59,  102 => 40,  91 => 35,  87 => 34,  81 => 33,  75 => 32,  71 => 31,  67 => 30,  64 => 29,  60 => 28,  38 => 9,  34 => 8,  27 => 3,  25 => 2,  22 => 1,);
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
{% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}

<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Enseignant</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"{{ path('form_profile_user_ens')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>\t
\t\t\t<li  class=\"active\"><a href=\"{{path('ChoixFiliereEns_enseignant')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
\t\t\t\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t


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
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('list_form_inscription_enseignant',{'id':f.id }) }}'\"><b ><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\"></span>&nbsp; Réserver</b></button></td>
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
