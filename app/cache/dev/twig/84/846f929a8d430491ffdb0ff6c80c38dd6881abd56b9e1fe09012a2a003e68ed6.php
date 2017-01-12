<?php

/* @SRVDVServer/home/ListeUsers.html.twig */
class __TwigTemplate_65b0e49fa91e658c2fa344b243e64d16d30c5dbe8c68be6dbb2f92697907c6d6 extends Twig_Template
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
        $__internal_369da107272e8e8db6fe43efc010e9bbe185757853de736eeb257f8fabcb6131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369da107272e8e8db6fe43efc010e9bbe185757853de736eeb257f8fabcb6131->enter($__internal_369da107272e8e8db6fe43efc010e9bbe185757853de736eeb257f8fabcb6131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/home/ListeUsers.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "@SRVDVServer/home/ListeUsers.html.twig", 2)->display($context);
        // line 3
        echo "


</br>
<div>

\t\t\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th># </th><th>Nom lyes </th><th>Prenom</th><th>E-mail</th><th>Username</th><th>enseignant</th><th>Roles</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
                                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 29
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                            </td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        // line 58
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/home/ListeUsers.html.twig", 58)->display($context);
        // line 59
        echo "


";
        
        $__internal_369da107272e8e8db6fe43efc010e9bbe185757853de736eeb257f8fabcb6131->leave($__internal_369da107272e8e8db6fe43efc010e9bbe185757853de736eeb257f8fabcb6131_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/home/ListeUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 59,  124 => 58,  100 => 36,  90 => 31,  81 => 29,  77 => 28,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  52 => 21,  41 => 15,  27 => 3,  25 => 2,  22 => 1,);
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



</br>
<div>

\t\t\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th># </th><th>Nom lyes </th><th>Prenom</th><th>E-mail</th><th>Username</th><th>enseignant</th><th>Roles</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for r in users %}\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>{{ r.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.prenom }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.email }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.username}}</td>
\t\t\t\t\t\t\t\t<td>{{ r.type.libelle}}</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
                                {% for role in r.roles %}
                                    {{ role }}
                                {% endfor %}
                            </td>
\t\t\t\t\t\t\t
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



", "@SRVDVServer/home/ListeUsers.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\home\\ListeUsers.html.twig");
    }
}
