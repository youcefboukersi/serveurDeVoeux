<?php

/* SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig */
class __TwigTemplate_f77e3662945bc3f207efb801f7d66e0d42c2c3a7b2038cc34c5454087a1fd50c extends Twig_Template
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
        $__internal_8904d132c92084b26be7268a5212358f0ecfdbfcc10f96aa9f4ce0e53b8b53a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8904d132c92084b26be7268a5212358f0ecfdbfcc10f96aa9f4ce0e53b8b53a1->enter($__internal_8904d132c92084b26be7268a5212358f0ecfdbfcc10f96aa9f4ce0e53b8b53a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig", 2)->display($context);
        // line 3
        echo "
<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Responsable</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_profile_user_resp");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li   ><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Matiere");
        echo "\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
\t\t\t<li  class=\"active\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_responsable");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t


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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Filieres"] ?? $this->getContext($context, "Filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 35
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "dateFiliere", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "niveau", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "User", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "User", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "anneeFiliere", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t<button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
            // line 43
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
        // line 51
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
        // line 70
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:ChoixFiliereResponsable.html.twig", 70)->display($context);
        // line 71
        echo "
";
        
        $__internal_8904d132c92084b26be7268a5212358f0ecfdbfcc10f96aa9f4ce0e53b8b53a1->leave($__internal_8904d132c92084b26be7268a5212358f0ecfdbfcc10f96aa9f4ce0e53b8b53a1_prof);

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
        return array (  139 => 71,  137 => 70,  116 => 51,  102 => 43,  96 => 40,  90 => 39,  84 => 38,  80 => 37,  76 => 36,  73 => 35,  69 => 34,  42 => 10,  38 => 9,  34 => 8,  27 => 3,  25 => 2,  22 => 1,);
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
\t\t<h3>Responsable</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"{{ path('form_profile_user_resp')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li   ><a href=\"{{ path('list_form_Matiere')}}\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
\t\t\t<li  class=\"active\"><a href=\"{{path('ChoixFiliereEns_responsable')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t


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
